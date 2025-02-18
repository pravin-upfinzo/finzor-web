<?php

// Helper function to read and decode JSON files
function getJsonData($filePath) {
    if (file_exists($filePath)) {
        $jsonContent = file_get_contents($filePath);
        return json_decode($jsonContent, true);
    }
    return null;
}

// Get category and slug from URL
$category = $_GET['category'] ?? 'general';
$slug = $_GET['slug'] ?? null;

// Construct file path for category
$categoryFile = __DIR__ . "/categories/$category.json";
$categoryData = getJsonData($categoryFile);

// Check if category exists
if ($categoryData) {
    // Display Category Title and Description
    echo "<h1>{$categoryData['title']}</h1>";
    echo "<p>{$categoryData['description']}</p>";
    
    // Display Images if available
    if (isset($categoryData['images'])) {
        foreach ($categoryData['images'] as $alt => $imgPath) {
            echo "<img src='$imgPath' alt='$alt' style='max-width:100%;'>";
        }
    }
    
    // Display Posts
    $posts = $categoryData['posts'];
    if ($slug) {
        $postFound = false;
        foreach ($posts as $post) {
            if ($post['slug'] === $slug) {
                echo "<h1>{$post['title']}</h1>";
                echo "<p><small>Posted on: {$post['date']}</small></p>";
                echo "<p>{$post['short_description']}</p>";
                
                // Load content either from text file or JSON
                if ($post['content'] === "text-file" && isset($post['content_file'])) {
                    $contentFile = __DIR__ . "/descriptions/$category/content/{$post['content_file']}";
                    $content = file_exists($contentFile) ? file_get_contents($contentFile) : "<b>Content not found</b>";
                    //echo "<p>" . nl2br($content) . "</p>";
                    echo "<p>" . $content . "</p>";
                } else {
                    echo "<p>{$post['content']}</p>";
                }
                
                $postFound = true;
                break;
            }
        }
        if (!$postFound) {
            echo "Post not found.";
        }
    } else {
        // Display All Posts in Category
        foreach ($posts as $post) {
            //echo "<h2><a href='./blog.php?category=$category&slug={$post['slug']}'>{$post['title']}</a></h2>";
            echo "<h2><a href='./{$category}/{$post['slug']}'>{$post['title']}</a></h2>";
            echo "<p><small>Posted on: {$post['date']}</small></p>";
            echo "<p>{$post['short_description']}</p>";
        }
    }
} else {
    echo "Category not found.";
}
?>
