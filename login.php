<?php
$page_title = 'Login';
$meta_lines = '<meta name="description" content="">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/login.css">' . "\n";
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">'. "\n";
$pageStyles .= '<style></style>' . "\n";



include_once('partials/header.php'); //should be last after all variables
?>


<div class="container-login">

<div class="background">
   
    <div class="intro"> 
       <h2> Welcome!</h2>

        <p> Use these awesome forms to login or create new account in 
            your project for free.
        </p>
   </div class="intro">

    <div class="signup-container">
        <h3>Sign in with</h3>
        <div class="social-buttons">
            <button class="google"><img src="./assets/images/google-icon.svg" alt="google"> Google</button>
        </div>

        <p class="divider">Or sign in with credentials</p>

        <form>
            <div class="input-group">
                <span class="icon">🎓</span>
                <input type="text" placeholder="Name" required>
            </div>
            <div class="input-group">
                <span class="icon">📧</span>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" placeholder="Password" required>
            </div>

            <p class="password-strength">Password strength: <span class="strong">strong</span></p>

            <div class="checkbox-container">
                <input type="checkbox" required> 
                <label>I agree with the <a href="#">Privacy Policy</a></label>
            </div>

            <button type="submit" class="submit-btn">Create account</button>
        </form>
    </div>
</div class="background">

</div>

<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>
