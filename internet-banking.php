<?php
$page_title = 'Internet Banking';
$meta_lines = '<meta name="description" content="">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/products_list.css">' . "\n";
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">'. "\n";
$pageStyles .= '<style></style>' . "\n";


// to include page specific JS
$pageScripts = '<script src="./assets/js/spotlight_effect.js"></script>' . "\n";
$pageScripts .= '<script src="./assets/js/product_list.js"></script>' . "\n";
$pageScripts .= '<script></script>' . "\n";

include_once('partials/header.php'); //should be last after all variables
?>

<!-- product_hero_section -->
<section id="fz_product_list_hero_sec">
    <canvas class="hero_sec_dot" id="hero_sec_dot"></canvas>
    <div class="container">
        <div class="product_list_hero">
            <h2 class="product_list_hero_title">Elevating Your Business
                with <span>CoreNexus</span> </h2>
            <a class="cmn-btn" href="contact-us.php">
                <span class="text"> Let's connect</span>
                <div class="icon">
                    <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Banner Section -->
<section id="fz_product_list_banner_sec">
    <div class="container">
        <img src="./assets/images/product_banner.svg" alt="product-banner" class="fz_product_list_banner_img">
    </div>
</section>

<!-- Cloud Based Solutions -->
<section class="fz_ai_enhance_sec cbs_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 fz_enhance_col">
                <div class="fz_ai_enhance_text">
                    <h2>Cloud Based Solutions</h2>
                    <p class="fz_enhance_para">Lorem ipsum is a dummy or placeholder text commonly used in graphic design, publishing, and web development to fill empty spaces in a layout that does not yet have content.
                    </p>
                    <ul>
                        <li>
                            <img src="./assets/images/Tick mark.svg" alt="Tick Mark"><span class="fz_cbs_color">Improves</span><span class="normal_text">Success Rates of Transactions</span>
                        </li>
                        <li>
                            <img src="./assets/images/Tick mark.svg" alt="Tick Mark"><span class="fz_cbs_color">Ensures</span><span class="normal_text">Smooth and Reliable Payment Processes</span>
                        </li>
                        <li>
                            <img src="./assets/images/Tick mark.svg" alt="Tick Mark"><span class="fz_cbs_color">Better Efficiency</span><span class="normal_text">with Smart Routing</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 fz_enhance_img_col">
                <div class="fz_ai_enhance_img zoom-in-cbs">
                    <img src="./assets/images/cbs_image.png" alt="CBS">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_feature_section -->
<section id="fz_product_list_feature">
    <div class="container">
        <div class="product_list_feature_head">
            <h3>FinbankZ’</h3>
            <h4>Features</h4>
        </div>
        <div class="product_list_feature_cards spotlight-effect">
            <div></div>
            <div class="product_list_feature_card fade-down">
                <div class="product_list_feature_cont">
                    <img src="./assets/images/product_feature_digital.svg" alt="digital payment">
                    <h4>Payout dashboard</h4>
                    <p>Cash management refers to a broad area of finance involving the collection, handdivng, and usage of cash.</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-left">
                <div class="product_list_feature_cont">
                    <img src="./assets/images/product_feature_digital.svg" alt="digital payment">
                    <h4> Automated Payment Analytics </h4>
                    <p>Cash management refers to a broad area of finance involving the collection, handdivng, and usage of cash.</p>
                </div>
            </div>
            <div class="product_list_feature_card fade-right">
                <div class="product_list_feature_cont">
                    <img src="./assets/images/product_feature_digital.svg" alt="digital payment">
                    <h4>Blockchain-Based Payment Security</h4>
                    <p>Cash management refers to a broad area of finance involving the collection, handdivng, and usage of cash.</p>
                </div>
            </div>
            <div class="product_list_feature_card zoom-in product_center">
                <div class="product_list_feature_cont">
                    <img src="./assets/images/product_feature_digital.svg" alt="digital payment">
                    <h4>Seamless E-commerce Integration</h4>
                    <p>Cash management refers to a broad area of finance involving the collection, handdivng, and usage of cash.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Super Feature -->
<section class="fz_features_sec">
    <div class="container">
        <h2>Finzor’s Super Features</h2>
        <p class="fz_features_heading_para">You can view your account balances, transaction history, and statements, and even set up custom alerts to help you stay on <br> top of your finances.</p>
        <div class="row">
            <div class="col-lg-6">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true" onclick="onTabClick('v-pills-home')">
                        <div class="fz_feature_tab_heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none">
                                <path d="M24 1V18C24 18.5304 23.8238 19.0391 23.5103 19.4142C23.1967 19.7893 22.7714 20 22.328 20H3.93545C3.49199 20 3.0667 19.7893 2.75313 19.4142C2.43956 19.0391 2.2634 18.5304 2.2634 18V13C2.2634 12.7348 2.35148 12.4804 2.50827 12.2929C2.66505 12.1054 2.8777 12 3.09943 12C3.32115 12 3.5338 12.1054 3.69058 12.2929C3.84737 12.4804 3.93545 12.7348 3.93545 13V18H16.4758V14H8.11556C7.89384 14 7.68119 13.8946 7.52441 13.7071C7.36762 13.5196 7.27954 13.2652 7.27954 13C7.27954 12.7348 7.36762 12.4804 7.52441 12.2929C7.68119 12.1054 7.89384 12 8.11556 12H16.4758V8H10.6236C10.4019 8 10.1893 7.89464 10.0325 7.70711C9.87569 7.51957 9.78761 7.26522 9.78761 7C9.78761 6.73478 9.87569 6.48043 10.0325 6.29289C10.1893 6.10536 10.4019 6 10.6236 6H22.328V2H9.78761C9.56588 2 9.35324 1.89464 9.19645 1.70711C9.03967 1.51957 8.95159 1.26522 8.95159 1C8.95159 0.734783 9.03967 0.48043 9.19645 0.292894C9.35324 0.105357 9.56588 0 9.78761 0H23.164C23.3857 0 23.5984 0.105357 23.7551 0.292894C23.9119 0.48043 24 0.734783 24 1ZM18.1478 12H22.328V8H18.1478V12ZM22.328 18V14H18.1478V18H22.328Z" fill="white" />
                                <path d="M7.52421 2.77136C7.52421 2.89385 7.48017 3.01133 7.40177 3.09794C7.32338 3.18455 7.21706 3.23321 7.1062 3.23321H5.42631C5.43101 3.30942 5.43415 3.3862 5.43415 3.46414C5.43318 4.38249 5.10257 5.26292 4.51483 5.91229C3.9271 6.56167 3.13024 6.92695 2.29906 6.92802H1.49909L5.29725 10.7429C5.33863 10.7835 5.37231 10.8327 5.39635 10.8877C5.42038 10.9428 5.43428 11.0026 5.43725 11.0636C5.44023 11.1246 5.43221 11.1857 5.41366 11.2433C5.39511 11.3009 5.3664 11.3538 5.3292 11.399C5.292 11.4443 5.24704 11.4809 5.19693 11.5068C5.14682 11.5327 5.09256 11.5473 5.0373 11.5499C4.98203 11.5524 4.92685 11.5428 4.87497 11.5216C4.82308 11.5004 4.77551 11.4681 4.73502 11.4265L0.136899 6.80794C0.0744657 6.74524 0.0306651 6.66314 0.0112559 6.57242C-0.0081533 6.4817 -0.00226273 6.38662 0.0281527 6.29967C0.0585682 6.21272 0.112086 6.13798 0.181668 6.08526C0.251251 6.03255 0.333643 6.00433 0.418012 6.00432H2.29906C2.9086 6.00356 3.49297 5.73569 3.92398 5.25947C4.35499 4.78326 4.59743 4.1376 4.59813 3.46414C4.59813 3.3862 4.59447 3.30942 4.5882 3.23321H0.418012C0.307148 3.23321 0.200825 3.18455 0.122433 3.09794C0.0440402 3.01133 0 2.89385 0 2.77136C0 2.64887 0.0440402 2.5314 0.122433 2.44478C0.200825 2.35817 0.307148 2.30951 0.418012 2.30951H4.34575C4.15322 1.89267 3.86022 1.54269 3.49906 1.29819C3.1379 1.0537 2.72262 0.924191 2.29906 0.923958H0.418012C0.307148 0.923958 0.200825 0.875299 0.122433 0.788685C0.0440402 0.702071 0 0.584598 0 0.462107C0 0.339617 0.0440402 0.222143 0.122433 0.135529C0.200825 0.0489156 0.307148 0.000256348 0.418012 0.000256348H7.1062C7.21706 0.000256348 7.32338 0.0489156 7.40177 0.135529C7.48017 0.222143 7.52421 0.339617 7.52421 0.462107C7.52421 0.584598 7.48017 0.702071 7.40177 0.788685C7.32338 0.875299 7.21706 0.923958 7.1062 0.923958H4.42779C4.80066 1.30518 5.0843 1.78061 5.2544 2.30951H7.1062C7.21706 2.30951 7.32338 2.35817 7.40177 2.44478C7.48017 2.5314 7.52421 2.64887 7.52421 2.77136Z" fill="white" />
                            </svg>
                            <h4>Income and expenses Tracker</h4>
                        </div>
                        <p class="fz_feature_para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod amet a
                            fugiat iusto ab vitae. Enim, possimus culpa deleniti doloremque voluptatem assumenda
                            ex libero sed et repudiandae, nostrum provident. Amet.
                        </p>
                    </button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" onclick="onTabClick('v-pills-profile')">
                        <div class="fz_feature_tab_heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M10 0C8.02219 0 6.08879 0.58649 4.4443 1.6853C2.79981 2.78412 1.51809 4.3459 0.761209 6.17316C0.00433284 8.00042 -0.1937 10.0111 0.192152 11.9509C0.578004 13.8907 1.53041 15.6725 2.92894 17.0711C4.32746 18.4696 6.10929 19.422 8.0491 19.8078C9.98891 20.1937 11.9996 19.9957 13.8268 19.2388C15.6541 18.4819 17.2159 17.2002 18.3147 15.5557C19.4135 13.9112 20 11.9778 20 10C19.9972 7.34869 18.9427 4.80678 17.068 2.93202C15.1932 1.05727 12.6513 0.00279983 10 0ZM10 18.4615C8.32647 18.4615 6.69052 17.9653 5.29902 17.0355C3.90753 16.1057 2.823 14.7842 2.18256 13.2381C1.54213 11.6919 1.37456 9.99061 1.70105 8.34923C2.02754 6.70786 2.83343 5.20016 4.01679 4.01679C5.20016 2.83342 6.70786 2.02754 8.34924 1.70105C9.99062 1.37456 11.6919 1.54212 13.2381 2.18256C14.7842 2.82299 16.1057 3.90753 17.0355 5.29902C17.9653 6.69051 18.4615 8.32646 18.4615 10C18.459 12.2434 17.5667 14.3941 15.9804 15.9804C14.3941 17.5667 12.2434 18.459 10 18.4615ZM7.02596 7.33269C7.46068 8.15457 7.68793 9.07024 7.68793 10C7.68793 10.9298 7.46068 11.8454 7.02596 12.6673C6.97999 12.7588 6.91622 12.8401 6.8384 12.9066C6.76058 12.9731 6.67027 13.0234 6.57277 13.0545C6.47526 13.0857 6.37252 13.0971 6.27057 13.088C6.16861 13.0789 6.06949 13.0496 5.97901 13.0017C5.88853 12.9539 5.80851 12.8884 5.74365 12.8093C5.67878 12.7301 5.63037 12.6387 5.60125 12.5406C5.57213 12.4425 5.56289 12.3395 5.57407 12.2378C5.58525 12.136 5.61662 12.0375 5.66635 11.9481C5.98827 11.3492 6.15676 10.6799 6.15676 10C6.15676 9.32009 5.98827 8.65079 5.66635 8.05192C5.57595 7.87211 5.55962 7.66404 5.62086 7.47233C5.6821 7.28063 5.81603 7.12055 5.99392 7.02645C6.17181 6.93234 6.3795 6.9117 6.57244 6.96895C6.76538 7.0262 6.92819 7.15679 7.02596 7.33269ZM12.4106 4.25577C13.3567 6.02364 13.8517 7.99775 13.8517 10.0029C13.8517 12.008 13.3567 13.9821 12.4106 15.75C12.3082 15.9182 12.1452 16.0407 11.9551 16.0922C11.7651 16.1438 11.5625 16.1206 11.3891 16.0273C11.2157 15.934 11.0847 15.7778 11.0231 15.5908C10.9614 15.4038 10.9738 15.2002 11.0577 15.0221C11.8851 13.4774 12.318 11.7523 12.318 10C12.318 8.24771 11.8851 6.52255 11.0577 4.97788C10.9616 4.79784 10.9409 4.58698 11.0002 4.39169C11.0595 4.1964 11.194 4.03268 11.374 3.93654C11.5541 3.8404 11.7649 3.81971 11.9602 3.87904C12.1555 3.93837 12.3192 4.07284 12.4154 4.25288L12.4106 4.25577ZM9.71827 5.79423C10.4088 7.08923 10.7701 8.5343 10.7701 10.0019C10.7701 11.4695 10.4088 12.9146 9.71827 14.2096C9.67182 14.3006 9.60772 14.3813 9.52971 14.4473C9.4517 14.5132 9.36135 14.5629 9.26393 14.5935C9.1665 14.6242 9.06395 14.6351 8.96226 14.6257C8.86057 14.6162 8.76178 14.5867 8.67164 14.5387C8.5815 14.4907 8.50182 14.4252 8.43725 14.3461C8.37268 14.2669 8.32452 14.1757 8.29556 14.0778C8.26661 13.9799 8.25744 13.8771 8.26861 13.7756C8.27977 13.6741 8.31104 13.5758 8.36058 13.4865C8.93263 12.4141 9.23186 11.2174 9.23186 10.0019C9.23186 8.78647 8.93263 7.58972 8.36058 6.51731C8.31104 6.428 8.27977 6.32973 8.26861 6.22821C8.25744 6.1267 8.26661 6.02398 8.29556 5.92604C8.32452 5.82811 8.37268 5.73692 8.43725 5.65779C8.50182 5.57867 8.5815 5.51319 8.67164 5.46519C8.76178 5.41718 8.86057 5.3876 8.96226 5.37818C9.06395 5.36876 9.1665 5.37968 9.26393 5.41031C9.36135 5.44094 9.4517 5.49066 9.52971 5.55658C9.60772 5.62249 9.67182 5.70328 9.71827 5.79423Z" fill="#E4F1F2" />
                            </svg>
                            <h4>Simplified Payments</h4>
                        </div>
                        <p class="fz_feature_para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod amet a
                            fugiat iusto ab vitae. Enim, possimus culpa deleniti doloremque voluptatem assumenda
                            ex libero sed et repudiandae, nostrum provident. Amet.
                        </p>
                    </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" onclick="onTabClick('v-pills-messages')">
                        <div class="fz_feature_tab_heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M16.9231 4.79727H15.3846V3.19698C15.3839 2.54718 15.1931 1.91299 14.8375 1.37874C14.4819 0.844486 13.9784 0.435472 13.3939 0.206076C12.8095 -0.0233207 12.1717 -0.0622313 11.5655 0.0945173C10.9592 0.251266 10.4132 0.596247 10 1.0836C9.60621 0.619333 9.09142 0.283842 8.51801 0.117781C7.94461 -0.0482796 7.33721 -0.0377804 6.76943 0.148006C6.20164 0.333793 5.69785 0.686891 5.31911 1.16451C4.94037 1.64213 4.70293 2.22376 4.63558 2.83891C4.16826 2.55332 3.6367 2.40119 3.0947 2.39794C2.5527 2.39468 2.01949 2.5404 1.54903 2.82036C1.07857 3.10032 0.687545 3.50458 0.415535 3.99223C0.143525 4.47988 0.000177894 5.03362 0 5.59741V9.59813C0 12.3569 1.05357 15.0026 2.92893 16.9534C4.8043 18.9041 7.34784 20 10 20C12.6522 20 15.1957 18.9041 17.0711 16.9534C18.9464 15.0026 20 12.3569 20 9.59813V7.99784C20 7.149 19.6758 6.33492 19.0988 5.73469C18.5218 5.13447 17.7391 4.79727 16.9231 4.79727ZM12.3077 1.59669C12.7157 1.59669 13.107 1.76529 13.3955 2.0654C13.6841 2.36551 13.8462 2.77255 13.8462 3.19698V4.79727H10.7692V3.19698C10.7692 2.77255 10.9313 2.36551 11.2198 2.0654C11.5084 1.76529 11.8997 1.59669 12.3077 1.59669ZM6.15385 3.19698C6.15385 2.77255 6.31593 2.36551 6.60445 2.0654C6.89297 1.76529 7.28428 1.59669 7.69231 1.59669C8.10033 1.59669 8.49165 1.76529 8.78016 2.0654C9.06868 2.36551 9.23077 2.77255 9.23077 3.19698V7.1977C9.23077 7.62212 9.06868 8.02916 8.78016 8.32927C8.49165 8.62938 8.10033 8.79799 7.69231 8.79799C7.28428 8.79799 6.89297 8.62938 6.60445 8.32927C6.31593 8.02916 6.15385 7.62212 6.15385 7.1977V3.19698ZM1.53846 5.59741C1.53846 5.17299 1.70055 4.76595 1.98907 4.46584C2.27758 4.16572 2.6689 3.99712 3.07692 3.99712C3.48495 3.99712 3.87626 4.16572 4.16478 4.46584C4.4533 4.76595 4.61538 5.17299 4.61538 5.59741V7.1977C4.61538 7.62212 4.4533 8.02916 4.16478 8.32927C3.87626 8.62938 3.48495 8.79799 3.07692 8.79799C2.6689 8.79799 2.27758 8.62938 1.98907 8.32927C1.70055 8.02916 1.53846 7.62212 1.53846 7.1977V5.59741ZM18.4615 9.59813C18.4615 11.8999 17.5946 14.1102 16.0466 15.755C14.4986 17.3999 12.3927 18.3485 10.1803 18.3976C7.96795 18.4466 5.82512 17.5922 4.21115 16.0174C2.59717 14.4427 1.64049 12.2729 1.54615 9.9732C2.16101 10.341 2.87935 10.4761 3.57909 10.3554C4.27883 10.2347 4.91681 9.86567 5.38462 9.31108C5.91476 9.93943 6.66065 10.3265 7.46211 10.3891C8.26356 10.4518 9.05668 10.185 9.67115 9.64614C9.94788 10.1232 10.3388 10.5174 10.8058 10.7903C10.3108 11.2401 9.91422 11.7948 9.64255 12.4172C9.37089 13.0397 9.23048 13.7154 9.23077 14.399C9.23077 14.6112 9.31181 14.8147 9.45607 14.9648C9.60033 15.1148 9.79599 15.1991 10 15.1991C10.204 15.1991 10.3997 15.1148 10.5439 14.9648C10.6882 14.8147 10.7692 14.6112 10.7692 14.399C10.7692 13.5501 11.0934 12.7361 11.6704 12.1358C12.2475 11.5356 13.0301 11.1984 13.8462 11.1984C14.0502 11.1984 14.2458 11.1141 14.3901 10.9641C14.5343 10.814 14.6154 10.6105 14.6154 10.3983C14.6154 10.1861 14.5343 9.98254 14.3901 9.83249C14.2458 9.68243 14.0502 9.59813 13.8462 9.59813H12.3077C11.8997 9.59813 11.5084 9.42953 11.2198 9.12941C10.9313 8.8293 10.7692 8.42226 10.7692 7.99784V6.39755H16.9231C17.3311 6.39755 17.7224 6.56615 18.0109 6.86627C18.2995 7.16638 18.4615 7.57342 18.4615 7.99784V9.59813Z" fill="#E4F1F2" />
                            </svg>
                            <h4>Complete control on your money</h4>
                        </div>
                        <p class="fz_feature_para">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod amet a
                            fugiat iusto ab vitae. Enim, possimus culpa deleniti doloremque voluptatem assumenda
                            ex libero sed et repudiandae, nostrum provident. Amet.
                        </p>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 fz_tab_images_features">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="fz_features_img zoom-in-fe">
                            <img src="./assets/images/features.svg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="fz_features_img zoom-in-fe">
                            <img src="./assets/images/features.svg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="fz_features_img zoom-in-fe">
                            <img src="./assets/images/features.svg" alt="">
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
            <div class="col-lg-6">
                <div class="fz_ai_enhance_img zoom-in_ai_enhance">
                    <img src="./assets/images/ai_enhance_img.webp" alt="">
                </div>
            </div>
            <div class="col-lg-6 fz_enhance_col">
                <div class="fz_ai_enhance_text">
                    <h2>AI enhancement make your work seamless</h2>
                    <p class="fz_enhance_para">Lorem ipsum is a dummy or placeholder text commonly used in graphic design, publishing, and web development to fill empty spaces in a layout that does not yet have content.
                    </p>
                    <p class="fz_enhance_para">
                        Lorem ipsum is a dummy or placeholder text commonly used in graphic design, publishing, and web development to fill empty spaces in a layout that does not yet have content.
                    </p>
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
                    <div class="get_touch_in_robo_img fade-right-hand">
                        <img src="./assets/images/Robot hand.svg" alt="Robot hand">
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
<section id="fz_product_range">
    <div class="container">
        <h2>Take a look at our range of products</h2>
        <div class="owl-carousel" id="product-range">
            <div class="item">
                <div class="fz_product-content">
                    <img src="./assets/images/product-icon.svg" alt="icon" style="width: 94px; margin: 0 auto;" />
                    <h3>UpiZor</h3>
                    <p>Empowering seamless, secure, and instant transactions for a connected world</p>
                    <a class="cmn-btn" href="#">
                        <span class="text"> View Product</span>
                        <div class="icon">
                            <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                        </div>
                    </a>
                </div>
                <img src="./assets/images/product-glow.svg" alt="iconglow" />
            </div>
            <div class="item">
                <div class="fz_product-content">
                    <img src="./assets/images/product-icon.svg" alt="icon" style="width: 94px; margin: 0 auto;" />
                    <h3>FinOpz360°</h3>
                    <p>Streamlining and optimising
                        processes to enhance
                        efficiency and accuracy</p>
                    <a class="cmn-btn" href="#">
                        <span class="text"> View Product</span>
                        <div class="icon">
                            <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                        </div>
                    </a>
                </div>
                <img src="./assets/images/product-glow.svg" alt="iconglow" />
            </div>
            <div class="item">
                <div class="fz_product-content">
                    <img src="./assets/images/product-icon.svg" alt="icon" style="width: 94px; margin: 0 auto;" />
                    <h3>FinZro</h3>
                    <p>Fuelling business growth with
                        smart, scalable payment<br> tools</p>
                    <a class="cmn-btn" href="#">
                        <span class="text"> View Product</span>
                        <div class="icon">
                            <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                        </div>
                    </a>
                </div>
                <img src="./assets/images/product-glow.svg" alt="iconglow" />
            </div>
            <div class="item">
                <div class="fz_product-content">
                    <img src="./assets/images/product-icon.svg" alt="icon" style="width: 94px;margin: 0 auto;" />
                    <h3>UpiZor</h3>
                    <p>Empowering seamless, secure, and instant transactions for a connected world</p>
                    <a class="cmn-btn" href="#">
                        <span class="text"> View Product</span>
                        <div class="icon">
                            <img src="./assets/images/right_arrow.svg" alt="Button Arrow" class="tele_img">
                        </div>
                    </a>
                </div>
                <img src="./assets/images/product-glow.svg" alt="iconglow" />
            </div>
        </div>
    </div>
</section>

<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>