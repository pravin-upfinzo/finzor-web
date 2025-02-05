<?php
$page_title = 'Onboard | Become a Part of Our Payment Network – Sign Up Today';
$meta_lines = '<meta name="description" content="Unlock easy payment processing with Finzor. Sign up today to start accepting secure payments and improve your business operations">';

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

        <p> Securely log in or sign up for free and manage your finances with ease!</p>
   </div class="intro">

    <div class="signup-container">
        <h3>Sign In with</h3>
        <div class="social-buttons">
            <button class="google"><img src="./assets/images/google-icon.svg" alt="google"> Google</button>
        </div>

        <p class="divider">Or sign Up with below Details</p>

        <form>
            <div class="input-group">
                <span class="icon"><img src="./assets/images/username.svg" alt="user-icon"></span>
                <input type="text" placeholder="Name" required>
            </div>
            <div class="input-group">
                <span class="icon">📧</span>
                <input type="email" placeholder="Email" required>
            </div>

            <div class="input-group">
            <div class="inputWithIcon">
            <span class="icon"><img src="./assets/images/usermob.svg" alt="user-icon"></span>
                                <span class="country-code">+91</span>
                                <input type="tel" name="phone" id="jwlMobile" class="jwlMobile" placeholder="00000 00000" maxlength="11" autocomplete="off">
                            </div>
            </div>
            <!-- <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" placeholder="Password" required>
            </div> -->

            <!-- <p class="password-strength">Password strength: <span class="strong">strong</span></p> -->

            <div class="checkbox-container">
                <input type="checkbox" required> 
                <label> I agree with the <a href="#">Privacy Policy</a></label>
            </div>
            <a href="#" class="login_btn">
                                       <button class="buttons">
                                            <span class="text">Submit</span>
                                            <div class="icon">
                                                <img src="./assets/images/telegram.svg" alt="" class="tele_img">
                                            </div>
                                        </button>
                                      </a>
        </form>
    </div>
</div class="background">

</div>


