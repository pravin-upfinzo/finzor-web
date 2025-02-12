<?php
$page_title = 'Empower Your Bank with CoreNexus Advanced Core Banking Solutions';
$meta_lines = '<meta name="description" content="Revolutionize your banking infrastructure with CoreNexus core banking solutions. Our secure and flexible platform helps streamline operations and accelerate growth">';
$meta_lines .= '<meta name="keywords" content="Banking solutions,Payments bank,Core banking solutions,Cloud platform,Branch banking,Banking,Banking Software solutions,Core banking software">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/products_list.css">' . "\n";
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">'. "\n";
$pageStyles .= '<style></style>' . "\n";


// to include page specific JS
$pageScripts = '<script src="./assets/js/spotlight_effect.js"></script>' . "\n";
$pageScripts .= '<script src="./assets/js/product-page-svg-script/cbs_svg_script.js"></script>' . "\n";
$pageScripts .= '<script src="./assets/js/product_list.js"></script>' . "\n";
$pageScripts .= '<script></script>' . "\n";

include_once('partials/header.php'); //should be last after all variables
?>

<!-- product_hero_section -->
<section id="fz_product_list_hero_sec" class="section_start" active-menu="list-menu-service" active-submenu="finbankz" active-submenu-l2="finbankz-corebanking">
    <canvas class="hero_sec_dot" id="hero_sec_dot"></canvas>
    <div class="container">
        <div class="product_list_hero">
            <h2 class="product_list_hero_title">Secure financial services<br> as  <span>CoreNexus</span> </h2>
            <a class="cmn-btn" href="contact-us.php">
                <span class="text"> Let's connect</span>
                <div class="icon">
                    <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                </div>
            </a>
        </div>
    </div>
    <!-- Banner Section -->
        <section id="fz_product_list_banner_sec">
            <div class="container" id="banner_svg">
                <!-- <img src="./assets/images/product_banner/core_banking_solutions.svg" alt="product-banner" class="fz_product_list_banner_img"> -->
                
            </div>
        </section>
</section>



<!-- Cloud Based Solutions -->
<section class="fz_ai_enhance_sec cbs_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 fz_enhance_col left-space">
                <div class="fz_ai_enhance_text">
                    <h2>Driving Deeper Customer Interactions</h2>
                    <p class="fz_enhance_para">Accelerate digital adoption with customer-led product designs, gain real-time insights into customer journeys for personalized engagements. Offer tailored products based on holistic customer views and embedded insights
                    </p>
                    <ul>
                        <li>
                            <p>Personalized engagements tailor products with <span class="fz_cbs_color">real-time data</span></p>
                        </li>
                        <li>
                            <p><span class="fz_cbs_color">Customer-Centric Design </span>enhance UX with smart insights</p>
                        </li>
                        <li>
                            <p><span class="fz_cbs_color">Seamless Digital Adoption </span>drive growth with AI-driven analytics</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 fz_enhance_img_col">
                <div class="fz_ai_enhance_img zoom-in-cbs" id="section_1_svg">
                    <!-- <img src="./assets/images/cbs_image.png" alt="CBS"> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_feature_section -->
<section id="fz_product_list_feature">
    <div class="container">
        <div class="product_list_feature_head">
            <h3>CoreNexus</h3>
            <h4>Features</h4>
        </div>
        <div class="product_list_feature_cards spotlight-effect">
            <div></div>
            <div class="product_list_feature_card fade-down">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/open-api.svg" alt="digital payment"> -->
                    <div id="feature_card_1_svg"></div>
                    <h4>Open Rest API</h4>
                    <p>Allows seamless integration with third-party applications, enabling extended functionalities and services</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-left">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/ckyc.svg" alt="digital payment"> -->
                    <div id="feature_card_2_svg"></div>
                    <h4> CKYC and AML</h4>
                    <p>Centralized Know Your Customer and Anti-Money Laundering protocols ensure compliance with regulatory standards</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-right">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/cash-management.svg" alt="digital payment"> -->
                    <div id="feature_card_3_svg"></div>
                    <h4>Cash Management</h4>
                    <p>Tools that help businesses manage their cash flow efficiently, including monitoring and optimizing liquidity</p>
                </div>
            </div>
            <div class="product_list_feature_card zoom-in product_center">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/digital-payments.svg" alt="digital payment"> -->
                    <div id="feature_card_4_svg"></div>
                    <h4>Digital Payments</h4>
                    <p>Facilitates electronic transactions, reducing reliance on cash and enhancing transaction speed</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-left">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/cbs.svg" alt="digital payment"> -->
                    <div id="feature_card_5_svg"></div>
                    <h4>Cloud Based Solutions </h4>
                    <p>Offers scalable and flexible banking services accessible over the internet, reducing infrastructure costs</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-right">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/ai-enhancement.svg" alt="digital payment"> -->
                    <div id="feature_card_6_svg"></div>
                    <h4>AI enhancement </h4>
                    <p>Utilizes artificial intelligence to improve decision-making processes and operational efficiency</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-up">
                <div class="product_list_feature_cont">
                    <!-- <img src="./assets/images/corenexus-feature-card-icons/regulatory.svg" alt="digital payment"> -->
                    <div id="feature_card_7_svg"></div>
                    <h4>Regulatory Risk</h4>
                    <p>Tools to identify, assess, and mitigate risks associated with regulatory compliance</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Super Feature -->
<section class="fz_features_sec">
    <div class="container">
        <h2>Innovate Better</h2>
        <p class="fz_features_heading_para">Power innovations with open APIs and a curated partner ecosystem. Transform into digital businesses creating unconventional revenue streams.</p>
        <div class="row">
            <div class="col-lg-6">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="onTabClick('v-pills-home')">
                        <div class="fz_feature_tab_heading">
                            <div id="section_3_icon_1_svg"></div>
                            <h4>Unleash Innovation with Open APIs</h4>
                        </div>
                        <p class="fz_feature_para">
                        Seamlessly build, integrate, and scale with powerful APIs. Enhance efficiency, streamline operations, and unlock limitless possibilities for digital growth.
                        </p>
                    </button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="onTabClick('v-pills-profile')">
                        <div class="fz_feature_tab_heading">
                        <div id="section_3_icon_2_svg"></div>
                            <h4>Transform Your Business Digitally</h4>
                        </div>
                        <p class="fz_feature_para">
                        Leverage cutting-edge solutions to drive efficiency, optimize processes, and create new revenue opportunities. Stay ahead in the evolving digital landscape.
                        </p>
                    </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" onclick="onTabClick('v-pills-messages')">
                        <div class="fz_feature_tab_heading">
                        <div id="section_3_icon_3_svg"></div>
                            <h4>Next-Gen Financial Innovation</h4>
                        </div>
                        <p class="fz_feature_para">
                        Connect, collaborate, and grow with our curated partner ecosystem. Power innovation, expand market reach, and redefine financial solutions for a smarter future.
                        </p>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 fz_tab_images_features">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="fz_features_img zoom-in-fe" id="section_2_card_1_svg">
                            <!-- <img src="./assets/images/features.svg" alt=""> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="fz_features_img zoom-in-fe" id="section_2_card_2_svg">
                            <!-- <img src="./assets/images/features.svg" alt=""> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="fz_features_img zoom-in-fe" id="section_2_card_3_svg">
                            <!-- <img src="./assets/images/features.svg" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Seamless -->
<section class="fz_ai_enhance_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="fz_ai_enhance_img zoom-in_ai_enhance" id="section_3_svg">
                    <!-- <img src="./assets/images/ai_enhance_img.webp" alt=""> -->
                </div>
            </div>
            <div class="col-lg-7 fz_enhance_col">
                <div class="fz_ai_enhance_text">
                    <h2>End-to-End Digital Experience</h2>
                    <p class="fz_enhance_para">Transformation create customized client journeys by utilizing best practices for customer experience and solution configuration. Transform gradually across all client touchpoints by using an agile delivery methodology.
                    </p>
                    <ul>
                        <li>
                            <p>Create personalized client journeys with<span class="fz_cbs_color ps-1">seamless digital solutions</p>
                        </li>
                        <li>
                            <p>Utilize best practices to <span class="fz_cbs_color"> enhance customer experience </span>across touchpoints</p>
                        </li>
                        <li>
                            <p><span class="fz_cbs_color">Adopt agile delivery</span> or gradual transformation at every interaction</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get In Touch -->
<section class="fz_get_in_touch">
    <div class="container">
        <div class="get_in_touch">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="get_touch_in_robo_img fade-right-hand" id="robot_hand_svg">
                        <!-- <img src="./assets/images/Robot hand.svg" alt="Robot hand"> -->
                    </div>
                    <div class="ripple_effect_robo">
                    </div>
                    <!-- <img src="./assets/images/Glow.svg" alt="" class="ripple_effect_robo"> -->
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="get_touch_in_content">
                        <h2>Get in touch</h2>
                        <p>We help banks to Engage Better with their customers, employees, <br>and partners to drive purposeful growth.</p>
                        <div class="get_touch_btn">
                            <a class="cmn-btn" href="contact-us.php">
                                <span class="text"> Let's connect</span>
                                <div class="icon">
                                    <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                                </div>
                            </a>
                        </div>
                        <img class="get-touch-arrow" src="./assets/images/get_touch_arrow_line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Range -->
<?php include_once('partials/product_range.php'); ?>

<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>
