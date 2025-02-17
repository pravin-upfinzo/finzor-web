<?php
include_once('data-handler.php'); // Include the data handler to fetch category and posts

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <p><?php echo htmlspecialchars($description); ?></p>
    </header>

    <?php if (!empty($images)): ?>
        <section class="images">
            <?php foreach ($images as $alt => $imgPath): ?>
                <img src="<?php echo htmlspecialchars($imgPath); ?>" alt="<?php echo htmlspecialchars($alt); ?>" style="max-width:100%;">
            <?php endforeach; ?>
        </section>
    <?php endif; ?>

    <?php if ($slug && $postContent): ?>
     
        <article>
            <h2><?php echo htmlspecialchars($postContent['title']); ?></h2>
            <p><small>Posted on: <?php echo htmlspecialchars($postContent['date']); ?></small></p>
            <p><?php echo htmlspecialchars($postContent['short_description']); ?></p>
            <div><?php echo $postContent['content']; ?></div>
        </article>
    <?php else: ?>
        <section class="posts">
            <h2>Available Blog Categories:</h2>
            <ul>
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $cate_key => $ind_post): ?>
                        <h1>Category: <?php echo ucwords(htmlspecialchars($cate_key)); ?></h1>
                        <?php foreach ($ind_post as $post): ?>
                            <li>
                                <h3>
                                    <a href="./<?php echo htmlspecialchars($cate_key . '/' . $post['slug']); ?>">
                                        <?php echo htmlspecialchars($post['title']); ?>
                                    </a>
                                </h3>
                                <p><small>Posted on: <?php echo htmlspecialchars($post['date']); ?></small></p>
                                <p><?php echo htmlspecialchars($post['short_description']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No posts available in this category.</p>
                <?php endif; ?>
            </ul>
        </section>
    <?php endif; ?>

    <footer>
        <p>&copy; 2025 Your Website Name</p>
    </footer>
</body>
</html>
