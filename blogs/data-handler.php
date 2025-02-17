<?php
error_reporting(E_ALL & ~E_WARNING & ~E_DEPRECATED);

// Helper function to read and decode JSON files
function getJsonData($filePath) {
    if (file_exists($filePath)) {
        $jsonContent = file_get_contents($filePath);
        return json_decode($jsonContent, true);
    }
    return null;
}

// Load the central categories JSON file
$categoriesData = getJsonData(__DIR__ . "/categories/all-categories.json");


// Initialize category and slug with default values
$category = '';
$slug = null;

// Check if we are dealing with clean URLs (e.g., /blogs/tech/ or /blogs/tech/ai-innovation)
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH); // Get the path

// Remove the leading '/blogs/' part of the URL
$path = str_replace('blog.php', '', $path);
$path = str_replace('/finzor-web', '', $path);
$path = str_replace('/blogs/', '', $path);

// Split the path into segments
$pathParts = explode('/', $path);

// If there are path segments, assume the first one is the category and the second is the slug
if (!empty($pathParts[0])) {
    $category = $pathParts[0]; // Category from URL path
}
if (!empty($pathParts[1])) {
    $slug = $pathParts[1]; // Slug from URL path (if present)
}

// Fallback to check query parameters if the clean URL does not contain them
if (empty($category) && isset($_GET['category'])) {
    $category = $_GET['category']; // Fallback to category from query string
}
if (empty($slug) && isset($_GET['slug'])) {
    $slug = $_GET['slug']; // Fallback to slug from query string
}

// Now you have the category and slug, whether from the URL path or query parameters

// echo "<pre>";
// echo "Category: $category<br>";
// echo "Slug: $slug<br>";
// echo "</pre>";
// exit;


// Fetch category data based on the category parameter
function getCategoryData($category,$slug) {
    global $categoriesData;

    // Now the categories are not in a "categories" array, but as keys of the JSON object
    if($category == '' && $slug == null){
        return $categoriesData; //all cate
    } else {
        if (isset($categoriesData[$category])) {
            return $categoriesData[$category]; // Directly return the category if found
        }
    }
    
    return null; // Return null if category is not found
}

// Get category data
$categoryDatas = getCategoryData($category, $slug);

//echo "<pre>"; print_r($categoryDatas); //exit;

// If category exists, process posts
$posts = [];
$title = 'Finzor - Blog';
$description = 'Blog description available.';
$images = [];

$banner_image = "";
$thumbnail_image = "";

if ($categoryDatas) {
    // Initialize posts as an empty array to store posts grouped by category
    $posts = [];

    // Check if $categoryDatas is an associative array (flat) or a multidimensional array
    if (isset($categoryDatas['file'])) {
        // Case 1: When $categoryDatas is a flat array (only one category data)
        $categoryData = $categoryDatas; // Treat it as a single category array
       
        // Extract category details
        $title = $categoryData['title'] ?? $title;
        $description = $categoryData['description'] ?? 'No description available.';
        $images = $categoryData['images'] ?? [];

        // Load the category-specific JSON file
        $categoryFile = __DIR__ . "/categories/{$categoryData['file']}";
        $categoryDetails = getJsonData($categoryFile);

        $def_image = "./assets/images/default-blog-img.jpg";
        $banner_abs_Path = __DIR__ . '/' . ltrim($categoryDetails['banner'], './');
        $thmnail_abs_Path = __DIR__ . '/' . ltrim($categoryDetails['thumbnail'], './');
        //echo "banner_abs_Path => ".$banner_abs_Path; exit;

        $banner_image = ($categoryDetails['banner'] && file_exists($banner_abs_Path)) ? $categoryDetails['banner'] : $def_image;
        $thumbnail_image = ($categoryDetails['thumbnail']  && file_exists($thmnail_abs_Path)) ? $categoryDetails['thumbnail'] : $def_image;

        // Fetch posts if they exist
        if (isset($categoryDetails['posts'])) {
            
            foreach ($categoryDetails['posts'] as $postKey => $post) {
                // If banner or thumbnail are not set or empty, assign the category-level images
                if (!isset($post['banner']) || empty($post['banner'])) {
                    $categoryDetails['posts'][$postKey]['banner'] = $banner_image;
                } else {
                   
                    $post_banner_path = $categoryDetails['posts'][$postKey]['banner'];
                   
                    $post_banner_abs_Path = __DIR__ . '/' . ltrim($post_banner_path, './');
                   
                    $new_post_banner_path =  ($post_banner_path && file_exists($post_banner_abs_Path)) ? $post_banner_path : $def_image;
                    //echo "new_post_banner_path => ".$new_post_banner_path;
                    $categoryDetails['posts'][$postKey]['banner'] = $new_post_banner_path;
                }
    
                if (!isset($post['thumbnail']) || empty($post['thumbnail'])) {
                    $categoryDetails['posts'][$postKey]['thumbnail'] = $thumbnail_image;
                }
            }
            $posts[$category] = $categoryDetails['posts']; // Store posts
        }
    } else {
        // Case 2: When $categoryDatas is a multidimensional array (multiple categories)
        foreach ($categoryDatas as $key => $categoryData) {
            // Extract category details
            // $title = $categoryData['title'] ?? $title;
            // $description = $categoryData['description'] ?? 'No description available.';
            $title = $title;
            $description = $description;
            $images = $categoryData['images'] ?? [];
            
            
            // Load the category-specific JSON file
            $categoryFile = __DIR__ . "/categories/{$categoryData['file']}";
            $categoryDetails = getJsonData($categoryFile);

            $def_image = "./assets/images/default-blog-img.jpg";
            $banner_abs_Path = __DIR__ . '/' . ltrim($categoryDetails['banner'], './');
            $thmnail_abs_Path = __DIR__ . '/' . ltrim($categoryDetails['thumbnail'], './');
            //echo "banner_abs_Path => ".$banner_abs_Path; exit;
    
            $banner_image = ($categoryDetails['banner'] && file_exists($banner_abs_Path)) ? $categoryDetails['banner'] : $def_image;
            $thumbnail_image = ($categoryDetails['thumbnail']  && file_exists($thmnail_abs_Path)) ? $categoryDetails['thumbnail'] : $def_image;

            // Fetch posts if they exist
            if (isset($categoryDetails['posts'])) { 
                foreach ($categoryDetails['posts'] as $postKey => $post) {
                    // If banner or thumbnail are not set or empty, assign the category-level images
                    if (!isset($post['banner']) || empty($post['banner'])) {
                        $categoryDetails['posts'][$postKey]['banner'] = $banner_image;
                    } else {
                        $post_banner_path = $categoryDetails['posts'][$postKey]['banner'];
                        $post_banner_abs_Path = __DIR__ . '/' . ltrim($post_banner_path, './');
                        $new_post_banner_path =  ($post_banner_path && file_exists($post_banner_abs_Path)) ? $post_banner_path : $def_image;
                        $categoryDetails['posts'][$postKey]['banner'] = $new_post_banner_path;
                    }
        
                    if (!isset($post['thumbnail']) || empty($post['thumbnail'])) {
                        $categoryDetails['posts'][$postKey]['thumbnail'] = $thumbnail_image;
                    }
                }
                $posts[$key] = $categoryDetails['posts']; // Store posts by category key
            }

        }

        
    }
}

//echo "<pre>"; print_r($categoryDetails); exit;

// Fetch the post based on the slug
function getPostBySlug($slug, $posts, $category) {
    if (isset($posts[$category])) {
       
        // Filter the posts for the specified category
        $filteredPosts = array_filter($posts[$category], function($post) use ($slug) {
            return $post['slug'] === $slug;
        });

        // Reindex the filtered posts array
        $filteredPosts = array_values($filteredPosts);

        // Return the first post from the filtered array if it exists
        return !empty($filteredPosts) ? $filteredPosts[0] : null;
    }
    return null;
}

$postContent = null;
if ($slug) {
    $postContent = getPostBySlug($slug, $posts, $category);

    if ($postContent['content'] === "html-file" && isset($postContent['content_file'])) {
        $contentFile = __DIR__ . "/descriptions/$category/content/{$postContent['content_file']}";
        $content = file_exists($contentFile) ? file_get_contents($contentFile) : "<b>Content not found</b>";
        //echo "<p>" . nl2br($content) . "</p>";
       // echo "<p>" . $content . "</p>";
       $postContent['content'] =  $content;
    } else  {
        $postContent['content'] =   htmlspecialchars($postContent['content']) ; 
    }
}

// echo "<pre>"; print_r($posts); exit;
//echo "<pre>"; print_r($postContent); exit;

?>