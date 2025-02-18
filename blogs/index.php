<?php
    require_once __DIR__ . '/../routes/config/constant.php';
    $page_title = 'Finzor - Blogs';
    $meta_lines = '';
    $meta_lines .= '';

    include_once('data-handler.php'); // Include the data handler to fetch category and posts

    // to include page specific CSS
    $pageStyles = '<link rel="stylesheet" href="'.BASE_URL.'blogs/assets/css/styles.css">';
    $pageStyles .= '<style></style>';

    // to include page specific JS
    $pageScripts = '<script src="'.BASE_URL.'blogs/assets/js/blog.js"></script>';
    $pageScripts .= '<script></script>';

    include_once('../partials/header.php'); //should be last after all variables

?>
<span class="section_start" active-menu="list-menu-blog"></span>

<section class="blog_section">
    <div class = "container-fluid container-custom">
        <h1 class="primary-title">Finzor Blog</h1>

        <?php if (!$slug): ?>
            <div class="post-filter-container">
                <h3 class="secondary-title"> Filter by Category: </h3>
                <select id="category-select" class="filter-select-list">
                    <option value="all">All</option>
                    <?php 
                   
                    foreach ($categoriesData as $categoryKey => $categoryDetails) : ?>
                        <option value="<?= $categoryKey; ?>"><?= ucfirst($categoryDetails['filter_box_title']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        <?php endif; ?>
    

    <div class = "row row-custom">
        <?php 
        if ($slug && $postContent): ?>

            <!-- <article>
                <h2><?php //echo htmlspecialchars($postContent['title']); ?></h2>
                <p><small>Posted on: <?php //echo htmlspecialchars($postContent['date']); ?></small></p>
                <p><?php //echo htmlspecialchars($postContent['short_description']); ?></p>
                <div><?php //echo $postContent['content']; ?></div>
            </article> -->

                <article class="article-container">
                    <div class="article-header">
                        
                        <h1 class="article-heading"><?php echo htmlspecialchars($postContent['title']); ?></h1>
                    </div>
                    <section class="article-content">
                        <img src="<?php echo BASE_URL.'blogs/'.ltrim($postContent['banner'] , "./"); ?>" alt='large-image' class="poster-image">
                        <div class="blog-real-content">
                            <p class="article-subheading"><span>Category: <b><?php echo htmlspecialchars($postContent['category_name']); ?></b></span><span>Posted on:  <b><?php echo ($postContent['date'] != "") ? date("d M Y", strtotime($postContent['date'])) : "N/A" ; ?></b></span></p>
                            <?php echo $postContent['content']; ?>
                        </div>
                        
                    </section>
                    <aside class="article-aside">
                        <h4 class="article-heading">Other Related Articles</h4>
                        <div class="article-card">
                            <img src='https://images.unsplash.com/photo-1457269315919-3cfc794943cd?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=2c42c1cac3092204f4c1afdca4d44e99' alt=''>
                            <div>
                            <p class="article-heading title">The big subtext</p>
                            <p class="author">Mathews</p>
                            </div>
                        </div>
                        <div class="article-card">
                            <img src='https://images.unsplash.com/photo-1528640936814-4460bc015292?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=66812b5fda04c80ff762c8a920f562f3' alt=''>
                            <div>
                            <p class="article-heading title">The bug subtext</p>
                            <p class="author">Harsha</p>
                            </div>
                        </div>
                    </aside>
                
                </article>
            
        <?php else: ?>
            <?php if (!empty($posts)): ?>

                <?php  
                foreach ($posts as $cate_key => $ind_post): ?>
                    <?php foreach ($ind_post as $post): ?>
                        <div class = "col-sm-12 col-md-6 col-lg-4 post-column <?= $cate_key; ?>">
                            <?php if ($post['thumbnail'] != ""): ?>
                                <img class="post-column__image"  src="<?php echo $post['thumbnail']; ?>" alt="blog-thumbnail" style="max-width:100%;">
                            <?php endif; ?>
                            <div class="meta-data">
                                <p class="meta-data__date-category truncate-1-line" ><?php echo date("d M Y", strtotime($post['date'])); ?>   |   <span ><b><?php echo ucwords(htmlspecialchars($post['category_name'])); ?></b></span></p>
                                
                                <a href="./<?php echo htmlspecialchars($cate_key . '/' . $post['slug']); ?>">
                                    <h3 class="meta-data__title truncate-1-line"><?php echo htmlspecialchars($post['title']); ?></h3>
                                </a>
                                <p class="meta_short_desc truncate-2-lines"><?php echo htmlspecialchars($post['short_description']); ?></p>
                                <p class="meta-data__author truncate-1-line">By <span><b><i><?php echo htmlspecialchars($post['author']); ?></i></b></span></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-posts">No posts available in this category.</p>
            <?php endif; ?>

            <?php endif; ?>
        </div>

    <div id = "load-more-container">
      <button class = "load-more-button" id="load-more-button"> Load More </button>
    </div>

    </div>
</section>
<!-- Include footer -->
<?php include_once('../partials/footer.php'); ?>
