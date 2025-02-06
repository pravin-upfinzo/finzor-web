<?php
$page_title = 'Onboard Become a Part of Our Payment Network,Sign Up Today';
$meta_lines = '<meta name="description" content="Unlock easy payment processing with Finzor. Sign up today to start accepting secure payments and improve your business operations">';
$meta_lines .= '<meta name="keywords" content="Enroll for payment solutions,Join payment platform,Payment integration enrollment,Business payment solutions">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/login.css">' . "\n";
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">'. "\n";
$pageStyles .= '<style></style>' . "\n";

//to include in footer
$pageScripts = '' . "\n";
$pageScripts .= '<script></script>' . "\n";

include_once('partials/header.php'); //should be last after all variables
?>


<div class="container-login">
    <div class="intro"> 
        <h2> Let’s make fintech
        work for you! </h2>
   </div>

    <div class="signup-container">
        <h3>Sign Up</h3>
        <!-- <div class="social-buttons">
            <button class="google"><img src="./assets/images/google-icon.svg" alt="google"> Google</button>
        </div> -->

        <form id="signupForm">
                <div class="form-group">
                    <label for="name">
                        <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>

                    </span>Name <span class="mandatory">*</span></label>
                    <input type="text" id="Name" name="name" placeholder="Enter your name" >
                    <span class="error" id="NameError"></span>
                </div>
                <div class="form-group">
                    <label for="email"><span class="icon">
                    <svg height="20" width="20" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="13.312000000000001"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#34b195;} </style> <g> <path class="st0" d="M510.678,112.275c-2.308-11.626-7.463-22.265-14.662-31.054c-1.518-1.915-3.104-3.63-4.823-5.345 c-12.755-12.818-30.657-20.814-50.214-20.814H71.021c-19.557,0-37.395,7.996-50.21,20.814c-1.715,1.715-3.301,3.43-4.823,5.345 C8.785,90.009,3.63,100.649,1.386,112.275C0.464,116.762,0,121.399,0,126.087V385.92c0,9.968,2.114,19.55,5.884,28.203 c3.497,8.26,8.653,15.734,14.926,22.001c1.59,1.586,3.169,3.044,4.892,4.494c12.286,10.175,28.145,16.32,45.319,16.32h369.958 c17.18,0,33.108-6.145,45.323-16.384c1.718-1.386,3.305-2.844,4.891-4.43c6.27-6.267,11.425-13.741,14.994-22.001v-0.064 c3.769-8.653,5.812-18.171,5.812-28.138V126.087C512,121.399,511.543,116.762,510.678,112.275z M46.509,101.571 c6.345-6.338,14.866-10.175,24.512-10.175h369.958c9.646,0,18.242,3.837,24.512,10.175c1.122,1.129,2.179,2.387,3.112,3.637 L274.696,274.203c-5.348,4.687-11.954,7.002-18.696,7.002c-6.674,0-13.276-2.315-18.695-7.002L43.472,105.136 C44.33,103.886,45.387,102.7,46.509,101.571z M36.334,385.92V142.735L176.658,265.15L36.405,387.435 C36.334,386.971,36.334,386.449,36.334,385.92z M440.979,420.597H71.021c-6.281,0-12.158-1.651-17.174-4.552l147.978-128.959 l13.815,12.018c11.561,10.046,26.028,15.134,40.36,15.134c14.406,0,28.872-5.088,40.432-15.134l13.808-12.018l147.92,128.959 C453.137,418.946,447.26,420.597,440.979,420.597z M475.666,385.92c0,0.529,0,1.051-0.068,1.515L335.346,265.221L475.666,142.8 V385.92z"></path> </g> </g></svg>
                    </span>Email <span class="mandatory">*</span></label>
                    <input type="email" id="email" placeholder="Enter your email" name="email" >
                    <span class="error" id="emailError"></span>

                    
                </div>
                <div class="form-group">
                    <label for="mobile"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
</svg>
</span>Mobile Number <span class="mandatory">*</span></label>
                    <input type="tel" placeholder="Enter your mobile number"  pattern="[0-9]{10}" type="phone" id="phone" name="mobile" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >
                    <span class="error" id="phoneError"></span>
                </div>
                <!-- <button class="buttons" type="submit" onclick="validateForm()"> -->
                <button class="buttons" type="submit">
                    <div class="button-loader"></div>
                    <span class="text">Submit</span>
                      <div class="icon">
                            <img src="./assets/images/telegram.svg" alt="" class="tele_img">
                             </div>
                        </button>
                        
            </form>

            <!-- <form id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
        <span class="error" id="nameError"></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
        <span class="error" id="emailError"></span>
        <br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}">
        <span class="error" id="phoneError"></span>
        <br><br>

        

        

        <button type="button" onclick="validateForm()">Submit</button>
    </form> -->


</div>



<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>