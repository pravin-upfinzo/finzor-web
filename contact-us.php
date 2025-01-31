<?php
$page_title = 'Contact Us';
$meta_lines = '<meta name="description" content="">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/contact_us.css">' . "\n";
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">'. "\n";
$pageStyles .= '<style></style>' . "\n";


// to include page specific JS

$pageScripts = '<script src="./assets/js/lottie.min.js"></script>' . "\n";
$pageScripts .= '<script src="./assets/js/contact_us.js"></script>' . "\n";
$pageScripts .= '<script></script>' . "\n";

include_once('partials/header.php'); //should be last after all variables
?>


<!-- contact-us content -->
<section id="contact_us">
    <div class="container">
        <div class="get-started">
            <h1 class="heading-2">Let’s Start a Conversation</h1>
        </div>
        <div class="contact_sub_cont">
            <div class="modal-img" style="width: 40%;">
                <!-- sdfas
                    <model-viewer class="model" alt="laptop" src="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/b5f434ae4d45d10fe1664d5606ad28e4d9c739af/images/laptop.glb" shadow-intensity="1"  camera-controls touch-action="pan-y"  environment-image="https://raw.githubusercontent.com/Smit-Prajapati/prajapatismit/b5f434ae4d45d10fe1664d5606ad28e4d9c739af/images/dancing_hall_2k.hdr" exposure="1.5"   disable-zoom disable-tap  camera-orbit="-45deg 60deg 9m" autoplay ></model-viewer> -->
                <div id="contact-us" class="visual-desktop hidden lg:block w-1454 h-1258 relative z-[1]"></div>
            </div>
            <form method="POST" id="form" class="form-wrapper">
                <div class="contact-wrapper form_group">
                    <label for="name" class="field-label">Name</label>
                    <input class="text-field-3" maxlength="256" name="name" data-name="Name" placeholder="Enter Your Name" type="text" id="Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                    <span class="error" id="NameError"></span>
                </div>
                <div class="email-wrapper form_group">
                    <label for="email" class="field-label">Email</label>
                    <input class="text-field-3" maxlength="256" name="email" data-name="Email" placeholder="Enter Your Email" type="email" id="email">
                    <span class="error" id="emailError"></span>
                </div>
                <div class="phone-wrapper form_group">
                    <label for="phone" class="field-label">phone</label>
                    <input class="text-field-3" maxlength="256" name="phone" data-name="phone" placeholder="Enter Your Phone Num" type="phone" id="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    <span class="error" id="phoneError"></span>
                </div>
                <div class="comment-wrapper form_group">
                    <label for="message" class="field-label">Message</label>
                    <textarea id="message" name="message" maxlength="5000" rows="4" cols="50" data-name="Field 3" placeholder="Enter Your Message" class="texteria"></textarea>
                    <span class="error" id="messageError"></span>
                </div>
                <button type="submit" class="fz_submit active_btn">
                    <span class="text">Send Message</span>
                    <div class="icon">
                        <img src="./assets/images/fz_button_arrow.svg" alt="">
                    </div>
                </button>
            </form>
        </div>
    </div>
</section>


<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>