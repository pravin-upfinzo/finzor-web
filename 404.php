<?php
$page_title = 'Onboard Become a Part of Our Payment Network,Sign Up Today';
$meta_lines = '<meta name="description" content="Unlock easy payment processing with Finzor. Sign up today to start accepting secure payments and improve your business operations">';
$meta_lines .= '<meta name="keywords" content="Enroll for payment solutions,Join payment platform,Payment integration enrollment,Business payment solutions">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/404.css">' . "\n";
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">'. "\n";
$pageStyles .= '<style></style>' . "\n";

//to include in footer
$pageScripts = '' . "\n";
$pageScripts .= '<script></script>' . "\n";

include_once('partials/header.php'); //should be last after all variables
?>
<section class="error-page">
    <div class="container">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>

        <a href="./index.php" class="btn">
        <button class="buttons" type="submit">
                    <span class="text">Go Home</span>
                      <div class="icon">
                            <img src="./assets/images/telegram.svg" alt="" class="tele_img">
                             </div>
                        </button>
                        </a>
    </div>
</section>



<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>