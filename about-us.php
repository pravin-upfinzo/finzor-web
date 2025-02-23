<!-- Include Header -->
<?php
$page_title = 'About Finzor Payments Empowering Businesses with Advanced Payment Technologies';
$meta_lines = '<meta name="description" content="Finzor Payments is dedicated to providing businesses with state-of-the-art payment solutions, combining security, innovation, and efficiency to streamline payment processing">';
$meta_lines .= '<meta name="keywords" content="Digital payment solutions, Digital payments, Payment gateway, Fast payment Solutions, Fintech innovation,CBS,Corporate banking solutions">';

// to include page specific CSS
$pageStyles = '<link rel="stylesheet" href="./assets/css/about_us.css">';
// $pageStyles .= '<link rel="stylesheet" href="./assets/css/extra.css">';
$pageStyles .= '<style>
        #fz-hero-bg iframe {
            height: 120vh !important;
            transform: scale(0.8);
        }

        @media screen and (max-width: 991px) {
            #fz-hero-bg iframe {
                height: 117vh !important;
                transform: scale(0.5);
            }
        }

        div#loader {
            position: fixed;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #000;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 999999;
        }

        #container {
            width: 600px;
            position: relative;
        }

        div#loader img {
            width: 100%;
        }

        /* #fz-hero-bg .text-content h1{
        display: inline-flex;
        flex-direction: row;
        flex-wrap: wrap;
        line-height: 70px;
       } */

        @media screen and (max-width: 991px) {
            #fz-hero-bg .text-content h1 {
                line-height: 50px;
                font-size: 2rem;
            }
        }

        @media screen and (max-width: 1300px) {
            .video_anim {
                height: 100% !important;
                padding: 40px 0px 20px;
            }
        }

        @media screen and (max-width: 768px) {
            #fz-hero-bg .text-content h1 {
                line-height: 40px;
                font-size: 1.75rem;
                flex-direction: column;
                text-align: center;
            }
        }

        .path {
            fill: none;
            stroke: #3EAB90;
            stroke-width: 5px;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .path-1 {
            stroke-dasharray: 1850;
            stroke-dashoffset: 1850;
            transition: stroke-dashoffset 5s linear;
        }

        .path-2 {
            stroke-dasharray: 260;
            stroke-dashoffset: 260;
            transition: stroke-dashoffset 1.2s linear 5s;
        }

        .path-3 {
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            transition: stroke-dashoffset 1s linear 6.2s;
        }

        .path-4 {
            stroke-width: 0;
            transition: stroke-width 0.1s linear 7.5s;
        }

        #container.fin .path-1 {
            stroke-dashoffset: 0;
        }

        #container.fin .path-2 {
            stroke-dashoffset: 0;
        }

        #container.fin .path-3 {
            stroke-dashoffset: 0;
        }

        #container.fin .path-4 {
            stroke-width: 5px;
        }

        .text-line1 {
            width: auto;
            height: 55px;
        }

        /* Animation Setup */
        .text-line1 .path {
            stroke-dasharray: 1000;
            /* Large number to ensure path length is enough */
            stroke-dashoffset: 1000;
            animation: draws 8s ease forwards;
            animation-iteration-count: infinite;
        }

        /* Staggered Animation */
        .text-line1 .path {
            animation-delay: 1s;
            fill: none;
            stroke: #f7c35f;
            stroke-width: 0.5;
        }

        /* Keyframes for Animation */
        @keyframes draws {
            to {
                stroke-dashoffset: 0;
                /* Animate to reveal the path */
            }
        }

        /* Hash Transition */
        .features_posibilityies .hash_content {
            width: 36px;
            height: 40px;
            position: absolute;
            left: 380px;
        }

        .hash_content {
            position: relative;
            z-index: 1;
            width: 62px;
            height: 90px;
        }

        .features_posibilityies .hash_bar {
            font-size: 45px !important;
        }

        @media (min-width: 769px) and (max-width: 991px) {
            .features_posibilityies .hash_bar {
                font-size: 30px !important;
            }
        }

        @media screen and (min-width: 1400px) {
            .features_posibilityies .hash_content {
                left: 472px;
            }
        }

        @media screen and (max-width: 1200px) {
            .features_posibilityies .hash_content {
                left: 295px;
            }

            .hash_content {
                width: 30px;
                height: 60px;
            }
        }

        /* @media screen and (max-width: 991px) {
            .features_posibilityies .hash_content {
            left: 210px;
            }
        } */

        @media (min-width: 769px) and (max-width: 991px) {
            .features_posibilityies .hash_content {
                left: 247px;
            }
        }

        @media screen and (max-width: 768px) {
            .features_posibilityies .hash_content {
                left: 0px;
            }
        }
    
        /* Styling for the animation container */
        #lottie-animation {
            width: 100%;
            height: 100%;
            margin: auto;
            /* Center it horizontally */
        }

        .visual-desktop {
            position: relative;
            display: block;
            overflow: hidden;
        }

        #lottie-animation1 svg {
            width: 35px !important;
            height: 35px !important;
        }

        div.product-icon {
            width: 70px;
            height: 70px;
            display: inline-flex;
            align-items: center;
            margin-left: -20px;
        }

        div#api-dev {
            width: 100%;
            height: 300px;
        }

        div#faq-animate {
            width: 100%;
            height: 400px;
            display: inline-flex;
            justify-content: start;
        }

        @media screen and (max-width: 991px) {
            div#faq-animate {
                display: block;
            }
        }

        div#faq-animate svg {
            width: auto !important;

        }

        #page-loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background: url("./assets/images/finzor-loading.gif") center no-repeat #000;
        }

        .footer-bg img {
            width: 100%;
        }
    
        .chat-bot {
            position: fixed;
            right: -5px;
            bottom: 5px;
            cursor: pointer;
            display: inline-flex;
            width: 120px;
            z-index: 99;
        }

        .chat-bot img {
            width: 100%;
            height: 100%;
        }

        /* @media screen and (max-width: 1440px) {
        .features_posibilityies .container .inner-text .left img {
            height: 1200px;
        }
        }
        @media screen and (max-width: 1440px) {
        .features_posibilityies .container .inner-text .right img {
            height: 1150px;
        }
        } */
        .fz_product_sec .fz_container .fz_sub_container .fz_img-sec .fz_img img:last-child {
            min-width: 70%;
        }

        .fz-tab-card .animation {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
    </style>';


// to include page specific JS
$pageScripts = '<script></script>';
// $pageScripts .= '<script src="./assets/js/about.js"></script>';
// $pageScripts .= '<script src="./assets/js/extra.js"></script>';

include_once('partials/header.php'); //should be last after all variables
?>

<span class="section_start" active-menu="list-menu-about"></span>

<section class="about_us_section" style="background-color: #000;height: auto;" >

    <div class="about_us_banner_sec">
        <!-- <div class="row"> -->
            <div class="col-lg-12">
                    <!-- <img src="assets/images/about.svg" alt=""> -->
                    <div class="container">
                        <div class="about_us_heading">
                        <h3 class="fade-up">We help every company become a fintech expert</h3>
                            <p class="fade-up">Empowering Banks with Scalable Software as a Service (SaaS) Solutions for Banking, Payments, and Fintech Innovation.</p>
                            <div class="about_us_banner_img">
                                <img src="./assets/images/about.jpg" alt="about_bg">
                            </div>
                        </div>
                        <div class="about_banner_content">
                            <h2 class="fade-up"> About Us</h2>
                            <p class="fade-up">Finzor leads the way in digital banking solutions, partnering with both established and emerging financial institutions to meet the evolving needs of banking, payments, analytics, artificial intelligence (AI), blockchain, and fraud prevention. Our suite of solutions drives innovation, enhances operations, and enables seamless transformation through a flexible, decomposable architecture and a startup mentality.</p>
                                <p class="fade-up">
                                With Software-as-a-Service (SaaS)-powered tools, we help banks innovate faster, enhance customer engagement, and scale effortlessly. Our focus on user interface (UI) and user experience (UX) ensures intuitive interfaces that improve workflows and customer journeys. We also provide Technical Service Provider (TSP) capabilities, application programming interfaces (APIs), and plugin solutions for easy integration into existing systems, keeping banks agile. In an ever-changing financial landscape, Finzor's cutting-edge Fraud and Risk Management (FRM) solutions, AI-powered risk engines, and Anti-Money Laundering (AML) tools ensure security, compliance, and risk mitigation, empowering banks to stay ahead in a rapidly evolving industry.
                                </p>
                        </div>
                    </div>
            </div>
        <!-- </div> -->
    </div>
    <div class="container">
        <div class="developer_section about_card_sec">
            <div class="col-lg-12">
                <div class="dev_left">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dev_card fz_intergration">
                                <div class="dev_card_logo">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="57" height="48" viewBox="0 0 57 48" fill="none">
                                    <path d="M56.0048 7.11111C56.4954 7.11111 56.8937 6.71289 56.8937 6.22222V0.888889C56.8937 0.398222 56.4954 0 56.0048 0H13.3381C12.8474 0 12.4492 0.398222 12.4492 0.888889V6.22222C12.4492 6.71289 12.8474 7.11111 13.3381 7.11111H20.6297L15.6661 17.6498C10.0803 15.5271 3.69456 18.0267 1.11145 23.5138C-0.206776 26.3093 -0.357887 29.4489 0.687446 32.3547C1.73189 35.2587 3.84567 37.5804 6.63767 38.8924C8.203 39.632 9.87678 40.0036 11.5577 40.0036C12.8732 40.0036 14.1941 39.7751 15.4688 39.3173C18.3737 38.2729 20.699 36.1591 22.0163 33.3653C24.5994 27.8782 22.4634 21.3653 17.2732 18.408L22.5941 7.11111H33.7817V28.4969C29.7879 28.9413 26.6706 32.3342 26.6706 36.4444C26.6706 40.8551 30.2599 44.4444 34.6706 44.4444C37.7666 44.4444 40.4528 42.6729 41.7817 40.0924C43.1106 42.672 45.7968 44.4444 48.8928 44.4444C53.3034 44.4444 56.8928 40.8551 56.8928 36.4444C56.8928 32.3342 53.7754 28.9413 49.7817 28.4969V7.11111H56.0048ZM20.4092 32.608C19.2937 34.9724 17.3257 36.7609 14.8688 37.6444C12.411 38.528 9.75767 38.3991 7.39678 37.2844C5.03322 36.1733 3.24567 34.2089 2.36122 31.752C1.47678 29.2933 1.60389 26.6373 2.72034 24.2711C4.38345 20.7387 7.90878 18.6649 11.5817 18.6649C12.9746 18.6649 14.3906 18.9636 15.7319 19.5947C20.6057 21.8969 22.7034 27.7351 20.4092 32.608ZM14.227 1.77778H55.1159V5.33333H14.227V1.77778ZM34.6714 42.6667C31.2403 42.6667 28.4492 39.8756 28.4492 36.4444C28.4492 33.0133 31.2403 30.2222 34.6714 30.2222C38.1026 30.2222 40.8937 33.0133 40.8937 36.4444C40.8937 39.8756 38.1026 42.6667 34.6714 42.6667ZM55.1159 36.4444C55.1159 39.8756 52.3248 42.6667 48.8937 42.6667C45.4626 42.6667 42.6714 39.8756 42.6714 36.4444C42.6714 33.0133 45.4626 30.2222 48.8937 30.2222C52.3248 30.2222 55.1159 33.0133 55.1159 36.4444ZM48.0048 28.4969C45.2883 28.7991 42.9826 30.4667 41.7826 32.7964C40.5826 30.4676 38.2768 28.7991 35.5603 28.4969V7.11111H48.0048V28.4969Z" fill="white"/>
                                    <path d="M16.1487 26.9293L17.0557 27.3331C17.2545 27.4216 17.4113 27.5825 17.4917 27.7803C17.572 27.9781 17.5694 28.1966 17.4842 28.3878C17.3991 28.579 17.2385 28.7273 17.0377 28.7999C16.8369 28.8725 16.6125 28.8636 16.4137 28.7751L15.6463 28.4334C15.1132 29.3758 14.2325 30.0803 13.1765 30.409C12.1204 30.7377 10.9651 30.6669 9.93645 30.2106L8.74837 29.6817L12.0968 35.6744C12.153 35.7674 12.1897 35.87 12.2048 35.976C12.2199 36.082 12.2129 36.1893 12.1845 36.2914C12.156 36.3935 12.1065 36.4884 12.039 36.5704C11.9715 36.6524 11.8874 36.7198 11.7916 36.7687C11.6958 36.8175 11.5903 36.8468 11.4815 36.8548C11.3726 36.8627 11.2626 36.8492 11.158 36.815C11.0533 36.7808 10.9562 36.7266 10.8725 36.6557C10.7887 36.5847 10.7199 36.4985 10.6703 36.4021L6.17111 28.3517C6.08909 28.2046 6.05552 28.0376 6.07509 27.8739C6.09465 27.7102 6.16637 27.558 6.28025 27.4385C6.39412 27.3191 6.54446 27.2384 6.7103 27.2076C6.87614 27.1768 7.0492 27.1976 7.20534 27.2669L10.5784 28.7687C11.2093 29.0495 11.9163 29.1023 12.57 28.9173C13.2237 28.7324 13.7803 28.3222 14.1378 27.7618L8.16833 25.104C7.96953 25.0155 7.81269 24.8546 7.73232 24.6568C7.65194 24.459 7.65462 24.2405 7.73975 24.0493C7.82488 23.8581 7.9855 23.7099 8.18627 23.6372C8.38704 23.5646 8.61152 23.5735 8.81032 23.6621L14.553 26.2189C14.5323 25.6928 14.359 25.179 14.0532 24.737C13.7474 24.295 13.3217 23.943 12.8254 23.7219L9.45231 22.2201C9.25351 22.1316 9.09667 21.9708 9.0163 21.773C8.93592 21.5752 8.9386 21.3566 9.02373 21.1654C9.10886 20.9742 9.26948 20.826 9.47025 20.7534C9.67103 20.6808 9.8955 20.6897 10.0943 20.7782L18.3396 24.4492C18.5384 24.5378 18.6953 24.6986 18.7756 24.8964C18.856 25.0942 18.8534 25.3127 18.7682 25.5039C18.6831 25.6952 18.5225 25.8434 18.3217 25.916C18.1209 25.9886 17.8964 25.9797 17.6976 25.8912L16.0036 25.1369C16.1789 25.7217 16.2283 26.3321 16.1487 26.9293Z" fill="white"/>
                                    <path d="M36.2361 33.6223C35.8904 33.9707 35.8921 34.5334 36.2406 34.8791C36.6601 35.296 36.8912 35.8516 36.8912 36.4445C36.8912 37.0374 36.6601 37.5929 36.2361 38.0142C35.4024 38.8525 33.9392 38.8525 33.1064 38.0142C32.7597 37.6658 32.197 37.6631 31.8495 38.0098C31.501 38.3556 31.4992 38.9182 31.845 39.2667C32.5979 40.0249 33.6015 40.4427 34.6717 40.4427C35.7419 40.4427 36.7455 40.0249 37.4939 39.2711C38.2521 38.5182 38.6699 37.5147 38.6699 36.4445C38.6699 35.3742 38.2521 34.3707 37.4939 33.6178C37.1463 33.2729 36.5828 33.2738 36.2361 33.6223ZM51.1135 36.4445C51.1135 37.0374 50.8824 37.5929 50.4584 38.0142C49.6246 38.8525 48.1615 38.8525 47.3286 38.0142C46.9828 37.6658 46.4192 37.6631 46.0717 38.0098C45.7232 38.3556 45.7215 38.9182 46.0672 39.2667C46.8201 40.0249 47.8237 40.4427 48.8939 40.4427C49.9641 40.4427 50.9677 40.0249 51.7161 39.2711C52.4743 38.5182 52.8921 37.5147 52.8921 36.4445C52.8921 35.3742 52.4743 34.3707 51.7161 33.6178C51.3686 33.2729 50.8059 33.2738 50.4592 33.6223C50.1135 33.9707 50.1152 34.5334 50.4637 34.8791C50.8832 35.296 51.1135 35.8516 51.1135 36.4445ZM29.4699 26.7023C29.7819 26.7023 30.0841 26.5378 30.2477 26.2462L31.4921 24.0151C31.7312 23.5867 31.5775 23.0454 31.1481 22.8063C30.7206 22.568 30.1783 22.7209 29.9392 23.1502L28.6948 25.3814C28.4557 25.8098 28.6095 26.3511 29.0388 26.5903C29.1757 26.6667 29.3241 26.7023 29.4708 26.7023H29.4699ZM26.7064 20.7289C26.7064 20.2382 26.3081 19.84 25.8175 19.84C25.3268 19.84 24.9286 20.2382 24.9286 20.7289V23.5822C24.9286 24.0729 25.3268 24.4711 25.8175 24.4711C26.3081 24.4711 26.7064 24.0729 26.7064 23.5822V20.7289ZM18.9312 41.1494L16.2646 43.816C15.917 44.1636 15.917 44.7254 16.2646 45.0729C16.4379 45.2463 16.6655 45.3334 16.893 45.3334C17.1206 45.3334 17.3481 45.2463 17.5215 45.0729L20.1881 42.4062C20.5357 42.0587 20.5357 41.4969 20.1881 41.1494C19.8406 40.8018 19.2788 40.8018 18.9312 41.1494ZM24.0041 42.6667C23.5135 42.6667 23.1152 43.0649 23.1152 43.5556V47.1111C23.1152 47.6018 23.5135 48 24.0041 48C24.4948 48 24.893 47.6018 24.893 47.1111V43.5556C24.893 43.0649 24.4948 42.6667 24.0041 42.6667Z" fill="white"/>
                                    </svg></span>
                                    <h4 class="fade-up">Impact</h4>
                                </div>
                                <p class="fade-up">We aim to empower enterprise businesses by unlocking access to a comprehensive suite of essential financial services, fostering greater financial inclusion</p>
                            </div>
                        </div>
                    </div>
                    <div class="row dev_card_1">
                        <div class="col-lg-12">
                            <div class="dev_card fz_api">
                                <div class="dev_card_logo">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="69" height="49" viewBox="0 0 69 49" fill="none">
                                    <path d="M26.5781 17.1379C26.5781 12.8556 30.0692 9.36307 34.3487 9.36307C38.6308 9.36307 42.1192 12.8584 42.1192 17.0678C42.1192 21.35 38.6281 24.8426 34.3487 24.8426C30.0665 24.8426 26.5781 21.3473 26.5781 17.1379ZM26.9799 17.0678C26.9799 21.1304 30.2874 24.4401 34.3487 24.4401C38.4099 24.4401 41.7174 21.1304 41.7174 17.0678C41.7174 13.0051 38.4099 9.69545 34.3487 9.69545C30.2874 9.69545 26.9799 13.0051 26.9799 17.0678Z" fill="#010101" stroke="white"/>
                                    <path d="M21.4457 35.403L21.4242 35.6869L21.6574 35.8503C22.9877 36.782 24.4269 37.5756 25.9532 38.2052C25.9216 38.2745 25.8904 38.3279 25.8587 38.3721C25.8159 38.432 25.7637 38.4869 25.687 38.5466C23.9867 37.8392 22.3904 36.93 20.9282 35.8489L21.1729 34.6273L21.1731 34.6274L21.1754 34.6135C21.9767 29.9369 25.9805 26.4037 30.8456 26.4037H37.8545C42.725 26.4037 46.7907 29.9413 47.5235 34.6067L47.5257 34.6207L47.5287 34.6346L47.7663 35.7351C46.0991 36.9385 45.0623 37.6861 43.0128 38.4544C42.9335 38.4008 42.906 38.355 42.8841 38.3135C42.8657 38.2788 42.8489 38.2393 42.8277 38.1839C44.3862 37.5539 45.6158 36.82 46.9764 35.8475L47.2056 35.6838L47.1843 35.403C46.8144 30.5172 42.8152 26.736 37.8545 26.736H30.7755C25.8873 26.736 21.8158 30.5147 21.4457 35.403Z" fill="black" stroke="white"/>
                                    <path d="M48.2646 11.1514C48.2646 7.23751 51.4556 4.04529 55.3669 4.04529C59.2809 4.04529 62.4691 7.24027 62.4691 11.087C62.4691 15.0009 59.2781 18.1931 55.3669 18.1931C51.4528 18.1931 48.2646 14.9982 48.2646 11.1514ZM48.5532 11.087C48.5532 14.8437 51.6115 17.904 55.3669 17.904C59.1222 17.904 62.1806 14.8437 62.1806 11.087C62.1806 7.3303 59.1222 4.27001 55.3669 4.27001C51.6115 4.27001 48.5532 7.3303 48.5532 11.087Z" fill="#010101" stroke="white"/>
                                    <path d="M67.4363 27.2148L67.4385 27.2288L67.4415 27.2427L67.6538 28.2257C64.2546 30.6023 59.7493 32.374 55.3673 32.374C50.7699 32.374 46.5182 30.8725 43.0747 28.3331L43.2946 27.2354L43.2948 27.2354L43.2971 27.2216C44.0305 22.9417 47.6944 19.7087 52.146 19.7087H58.5886C63.0456 19.7087 66.7659 22.946 67.4363 27.2148ZM43.4654 27.9374L43.4439 28.2213L43.6771 28.3847C46.9781 30.6966 51.0074 32.0849 55.3673 32.0849C59.7264 32.0849 63.7575 30.697 66.9969 28.382L67.226 28.2182L67.2047 27.9374C66.8631 23.4256 63.1698 19.9335 58.5886 19.9335H52.0816C47.5673 19.9335 43.8072 23.4231 43.4654 27.9374Z" fill="#010101" stroke="white"/>
                                    <path d="M5.74219 11.1515C5.74219 7.23754 8.93312 4.04532 12.8444 4.04532C16.7584 4.04532 19.9466 7.2403 19.9466 11.087C19.9466 15.0009 16.7557 18.1932 12.8444 18.1932C8.93036 18.1932 5.74219 14.9982 5.74219 11.1515ZM6.0307 11.087C6.0307 14.8437 9.08903 17.904 12.8444 17.904C16.5998 17.904 19.6581 14.8437 19.6581 11.087C19.6581 7.33033 16.5998 4.27004 12.8444 4.27004C9.08903 4.27004 6.0307 7.33033 6.0307 11.087Z" fill="#010101" stroke="white"/>
                                    <path d="M24.9139 27.2148L24.9161 27.2288L24.9191 27.2427L25.1313 28.2257C21.7321 30.6023 17.2269 32.374 12.8448 32.374C8.24746 32.374 3.99577 30.8725 0.552218 28.3331L0.772121 27.2354L0.772313 27.2354L0.77468 27.2216C1.50801 22.9417 5.17198 19.7087 9.62356 19.7087H16.0661C20.5232 19.7087 24.2434 22.946 24.9139 27.2148ZM0.942947 27.9374L0.921447 28.2213L1.15469 28.3847C4.45564 30.6966 8.48489 32.0849 12.8448 32.0849C17.204 32.0849 21.2351 30.697 24.4744 28.382L24.7035 28.2182L24.6823 27.9374C24.3407 23.4256 20.6474 19.9335 16.0661 19.9335H9.55913C5.04481 19.9335 1.28476 23.4231 0.942947 27.9374Z" fill="#010101" stroke="white"/>
                                    <path d="M37.8931 6.48272C37.8835 6.48272 37.877 6.48144 37.8733 6.4804L37.8581 6.45802L37.8348 6.43215C37.747 6.33485 37.747 6.19271 37.8348 6.09541L40.688 2.93206C40.732 2.88327 40.7632 2.88149 40.7707 2.88149C40.7782 2.88149 40.8093 2.88327 40.8533 2.93206L41.2246 2.59718L40.8533 2.93206C40.9411 3.02936 40.9411 3.17151 40.8533 3.26881L38.0001 6.43215C37.9679 6.4678 37.9259 6.48272 37.8931 6.48272ZM34.5885 5.24827C34.5885 5.36485 34.5544 5.41743 34.5389 5.43462C34.5276 5.44713 34.5044 5.46722 34.44 5.46722C34.4117 5.46722 34.3836 5.45758 34.3524 5.42054C34.3164 5.37783 34.2916 5.31276 34.2916 5.24827V0.718942C34.2916 0.602368 34.3257 0.549787 34.3412 0.532596C34.3525 0.52008 34.3756 0.5 34.44 0.5C34.5044 0.5 34.5276 0.52008 34.5389 0.532595C34.5544 0.549786 34.5885 0.602367 34.5885 0.718942V5.24827ZM28.0268 2.93206L27.6555 2.59718L28.0268 2.93206C28.0708 2.88327 28.1019 2.88149 28.1094 2.88149C28.1169 2.88149 28.148 2.88327 28.192 2.93206L31.0453 6.09541C31.133 6.19271 31.133 6.33485 31.0453 6.43215C31.0013 6.48095 30.9701 6.48272 30.9626 6.48272C30.9552 6.48272 30.924 6.48095 30.88 6.43215L28.0268 3.26881C27.939 3.17151 27.939 3.02936 28.0268 2.93206Z" fill="#010101" stroke="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M35.1197 45.9403C34.9224 45.8389 34.703 45.786 34.4803 45.7861C34.2569 45.7848 34.0366 45.8369 33.8383 45.9377L29.8454 48L30.6119 43.6303C30.6496 43.4147 30.6334 43.1933 30.5646 42.9853C30.4959 42.7772 30.3766 42.5887 30.217 42.4361L26.9863 39.344L31.4496 38.7068C31.6696 38.6758 31.8787 38.5928 32.0588 38.4649C32.239 38.3371 32.3848 38.1682 32.4838 37.9728L34.4803 34L36.4853 37.9728C36.5835 38.1683 36.7285 38.3375 36.9079 38.4659C37.0873 38.5944 37.2957 38.6782 37.5153 38.7102L41.9785 39.3473L38.7478 42.4394C38.5883 42.5921 38.469 42.7806 38.4002 42.9887C38.3314 43.1967 38.3152 43.4181 38.353 43.6336L39.1152 48L35.1197 45.9403Z" stroke="white" stroke-width="1.2" stroke-linejoin="round"/>
                                    </svg></span>
                                    <h4 class="fade-up">Ownership</h4>
                                </div>
                                <p class="fade-up">With a strong sense of ownership, we are dedicated to responsibly shaping the future of financial services for businesses of all sizes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dev_card fz_webhook">
                                <div class="dev_card_logo">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M23.9994 14.9091C19.2721 14.9091 15.4176 18.7636 15.4176 23.4909C15.4176 28.1454 19.2721 32 23.9994 32C28.7267 32 32.5812 28.1455 32.5812 23.4182C32.5812 18.7636 28.7267 14.9091 23.9994 14.9091ZM23.9994 30.5455C20.0721 30.5455 16.8721 27.3454 16.8721 23.4182C16.8721 19.4909 20.0721 16.2909 23.9994 16.2909C27.9267 16.2909 31.1267 19.4909 31.1267 23.4182C31.1267 27.3454 27.9267 30.5455 23.9994 30.5455ZM23.4903 13.1636C23.7812 13.4545 24.2176 13.4545 24.5085 13.1636L28.3631 9.30908C28.654 9.01818 28.654 8.58181 28.3631 8.2909C28.0721 7.99999 27.6358 7.99999 27.3449 8.2909L24.7267 10.9091V3.12727C24.7267 2.6909 24.4358 2.39999 23.9994 2.39999C23.5631 2.39999 23.2721 2.6909 23.2721 3.12727V10.9091L20.654 8.2909C20.3631 7.99999 19.9267 7.99999 19.6358 8.2909C19.3449 8.58181 19.3449 9.01818 19.6358 9.30908L23.4903 13.1636ZM44.8721 23.2727H37.0903L39.7085 20.6545C39.9994 20.3636 39.9994 19.9273 39.7085 19.6364C39.4176 19.3454 38.9812 19.3454 38.6903 19.6364L34.8358 23.4909C34.5449 23.7818 34.5449 24.2182 34.8358 24.5091L38.6903 28.3636C38.9812 28.6545 39.4176 28.6545 39.7085 28.3636C39.9994 28.0727 39.9994 27.6364 39.7085 27.3454L37.0903 24.7273H44.8721C45.3085 24.7273 45.5994 24.4364 45.5994 24C45.5994 23.5636 45.2358 23.2727 44.8721 23.2727ZM13.1631 23.4909L9.30851 19.6364C9.0176 19.3454 8.58123 19.3454 8.29032 19.6364C7.99941 19.9273 7.99941 20.3636 8.29032 20.6545L10.9085 23.2727H3.12669C2.69032 23.2727 2.39941 23.5636 2.39941 24C2.39941 24.4364 2.69032 24.7273 3.12669 24.7273H10.9085L8.29032 27.3454C7.99941 27.6364 7.99941 28.0727 8.29032 28.3636C8.58123 28.6545 9.0176 28.6545 9.30851 28.3636L13.1631 24.5091C13.454 24.2182 13.454 23.7818 13.1631 23.4909ZM31.9994 16.7273H37.454C37.8903 16.7273 38.1812 16.4364 38.1812 16C38.1812 15.5636 37.8903 15.2727 37.454 15.2727H33.7449L39.2721 9.74545C39.5631 9.45454 39.5631 9.01818 39.2721 8.72727C38.9812 8.43636 38.5449 8.43636 38.254 8.72727L32.7267 14.2545V10.5454C32.7267 10.1091 32.4358 9.81818 31.9994 9.81818C31.5631 9.81818 31.2721 10.1091 31.2721 10.5454V16C31.2721 16.3636 31.6358 16.7273 31.9994 16.7273ZM14.254 15.2727H10.5449C10.1085 15.2727 9.8176 15.5636 9.8176 16C9.8176 16.4364 10.1085 16.7273 10.5449 16.7273H15.9994C16.4358 16.7273 16.7267 16.3636 16.7267 16V10.5454C16.7267 10.1091 16.4358 9.81818 15.9994 9.81818C15.5631 9.81818 15.2721 10.1091 15.2721 10.5454V14.2545L9.74487 8.72727C9.45396 8.43636 9.0176 8.43636 8.72669 8.72727C8.43578 9.01818 8.43578 9.45454 8.72669 9.74545L14.254 15.2727Z" fill="white"/>
                                    <path d="M48 24C48 10.7636 37.2364 0 24 0C10.7636 0 0 10.7636 0 24C0 37.2364 10.7636 48 24 48C37.2364 48 48 37.2364 48 24ZM11.1273 42.4727C11.4909 37.6727 15.4909 33.9636 20.2909 33.9636H27.6364C32.5091 33.9636 36.4364 37.6727 36.8 42.4727C33.2364 45.0182 28.8 46.5455 24 46.5455C19.2 46.5455 14.7636 45.0182 11.1273 42.4727ZM38.1818 41.5273C37.3818 36.4364 32.9455 32.5818 27.6364 32.5818H20.3636C15.0545 32.5818 10.6909 36.4364 9.81818 41.5273C4.72727 37.3818 1.45455 31.0545 1.45455 24C1.45455 11.5636 11.5636 1.45455 24 1.45455C36.4364 1.45455 46.5455 11.5636 46.5455 24C46.5455 31.0545 43.2727 37.3818 38.1818 41.5273Z" fill="white"/>
                                    </svg></span>
                                    <h4 class="fade-up">Customer Centric</h4>
                                </div>
                                <p class="fade-up">Our commitment extends to everyone we work with, from partners and clients to their end-users, always striving to create lasting value at every touchpoint.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_part">

            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_images">
                        <img src="assets/images/our_mission.png" alt="" class="mission_img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_content">
                        <!-- <h5 class="fade-up">Our Mission</h5> -->
                        <p class="fade-up">
                        To deliver advanced, reliable, and scalable payment and core banking systems that ensure secure, efficient, and user-centric financial transactions, fostering trust and supporting the growth of the financial ecosystem.
                        </p>
                        <a href="./contact-us.php" class="buttons mt-4">
                            <span class="text">Get Started</span>
                            <div class="icon">
                                <img src="./assets/images/fz_button_arrow.svg" alt="">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="about_part">
            <div class="row fz-reverse">
                <div class="col-lg-6">
                    <div class="about_us_content">
                        <!-- <h5 class="fade-up">Our Vision</h5> -->
                        <p class="fade-up">
                        Finzor aims to revolutionize banking with advanced core banking and payment solutions that
                        harness AI, blockchain, and cloud technologies. We empower financial institutions to
                        optimize operations, enhance customer experiences, and drive growth through real-time
                        insights, modular systems, and secure, scalable platforms.
                        </p>
                        <a href="./contact-us.php" class="buttons mt-4">
                            <span class="text">Get Started</span>
                            <div class="icon">
                                <img src="./assets/images/fz_button_arrow.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 about_us_center_col">
                    <div class="about_us_images">
                        <img src="assets/images/our_vision.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="about_part">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_images">
                        <img src="assets/images/our_values.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_content">
                        <!-- <h5 class="fade-up">Core Values</h5> -->
                        <p class="fade-up">
                        With flexibility, scalability, and real-time processing, our Core Banking System (CBS) facilitates the smooth administration of accounts, transactions, and client interactions, resulting in increased operational efficiency and first-rate service.
We increase consumer happiness and encourage digital adoption by enabling safe, quick, and dependable digital transactions across point-of-sale, web, and mobile platforms with Payment Solutions.
                        </p>
                        <a href="./contact-us.php" class="buttons mt-4">
                            <span class="text">Get Started</span>
                            <div class="icon">
                                <img src="./assets/images/fz_button_arrow.svg" alt="">
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="play_store_section">
    <div class="container">
        <div class="play_store_container">
            <div class="row">
                <div class="col-lg-7 play_flex">

                    <div class="play_store_left">
                        <section class="newsletter_section">
                            <div class="container">
                                <h3>Innovate with us</h3>
                                <h5>Let&rsquo;s connect</h5>
                                <p>Finzor: Revolutionizing digital engagement for banks, fintechs, and merchants in the evolving digital landscape</p>
                                <!-- <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Enter email address
                                      " aria-label="Username" aria-describedby="basic-addon1">
                                </div> -->
                                <button class="buttons" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <span class="text">Book a demo</span>
                                    <div class="icon">
                                        <img src="./assets/images/fz_button_arrow.svg" alt="">
                                    </div>
                                </button>
                            </div>
                        </section>
                        <h2 style="display: none;">Discover our app</h2>
                        <ul style="display: none;">
                            <li>Access Anytime, Anywhere</li>
                            <li>Engaging Interactive Dashboard</li>
                            <li>Streamlined Convenience</li>
                        </ul>
                        <p style="display: none;">Our mobile solution is designed to elevate user convenience, enabling real-time financial management and offering a personalized, easy-to-use experience.</p>
                        <div class="start_now_btn" style="display: none;">
                            <div class="hover-box">
                                <a class="dedcription-btn" href="#">
                                    <span class="name-descripeion">Download Now</span>
                                </a>
                            </div>
                        </div>
                        <div class="store_images" style="display: none;">
                            <img src="./assets/images/play_store.svg" alt="">
                            <img src="./assets/images/appstore.svg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="play_store_right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="564" height="613" viewBox="0 0 564 613" fill="none" class="fz_playstore2">
                            <style>
                                svg>g path.dd {
                                    animation: fadeIn .7s infinite linear;

                                }

                                @keyframes fadeIn {
                                    0% {
                                        opacity: .35;
                                    }

                                    50% {
                                        opacity: .5;
                                    }

                                    75% {
                                        opacity: .75;
                                    }

                                    100% {
                                        opacity: 1;

                                    }
                                }
                            </style>
                            <g clip-path="url(#clip0_2258_11066)">
                                <path d="M1343 5.54492H121C99.4609 5.54492 82 23.0058 82 44.5449V778.453C82 799.992 99.4609 817.453 121 817.453H1343C1364.54 817.453 1382 799.992 1382 778.453V44.5449C1382 23.0058 1364.54 5.54492 1343 5.54492Z" fill="#0A0A0A"></path>
                                <path d="M1343 2.94531H121C98.0249 2.94531 79.4 21.5703 79.4 44.5453V778.453C79.4 801.428 98.0249 820.053 121 820.053H1343C1365.98 820.053 1384.6 801.428 1384.6 778.453V44.5453C1384.6 21.5703 1365.98 2.94531 1343 2.94531Z" stroke="white" stroke-opacity="0.07" stroke-width="5.2"></path>
                                <path d="M1343 2.94531H121C98.0249 2.94531 79.4 21.5703 79.4 44.5453V778.453C79.4 801.428 98.0249 820.053 121 820.053H1343C1365.98 820.053 1384.6 801.428 1384.6 778.453V44.5453C1384.6 21.5703 1365.98 2.94531 1343 2.94531Z" stroke="url(#paint0_linear_2258_11066)" stroke-opacity="0.2" stroke-width="5.2"></path>
                                <path d="M729.369 32H128.507C114.385 32 102.938 43.4475 102.938 57.5686V474.337C102.938 488.459 114.385 499.906 128.507 499.906H729.369C743.491 499.906 754.938 488.459 754.938 474.337V57.5686C754.938 43.4475 743.491 32 729.369 32Z" fill="#0A0A0A"></path>
                                <path d="M511.61 300.468V453.88" stroke="#262626" stroke-width="0.852288" stroke-dasharray="3.41 3.41"></path>
                                <path d="M511.61 300.468V453.88" stroke="#262626" stroke-width="0.852288" stroke-dasharray="3.41 3.41"></path>
                                <path d="M415.364 300.468V453.88" stroke="#262626" stroke-width="0.852288" stroke-dasharray="3.41 3.41"></path>
                                <g filter="url(#filter0_f_2258_11066)">
                                    <path d="M153.223 166.661C163.579 166.661 171.973 158.266 171.973 147.91C171.973 137.555 163.579 129.16 153.223 129.16C142.868 129.16 134.473 137.555 134.473 147.91C134.473 158.266 142.868 166.661 153.223 166.661Z" fill="#FE4A23"></path>
                                </g>
                                <path d="M123.391 274.477H734.483" stroke="#262626" stroke-width="0.852288"></path>
                                <path d="M190.146 146.532C190.146 129.077 175.996 114.928 158.542 114.928C141.088 114.928 126.938 129.077 126.938 146.532V146.532C126.938 163.987 141.088 178.136 158.542 178.136C175.996 178.136 190.146 163.987 190.146 146.532V146.532Z" fill="#FE4A23"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M189.635 146.532C189.635 129.359 175.714 115.438 158.541 115.438C141.368 115.438 127.447 129.359 127.447 146.532V146.532C127.447 163.705 141.368 177.627 158.541 177.627C175.714 177.627 189.635 163.705 189.635 146.532V146.532Z" stroke="#1A1A1A" stroke-opacity="0.02" stroke-width="1.01949"></path>
                                <path d="M161.94 147.933L165.339 149.844L158.542 153.667L151.745 149.844L155.144 147.933" stroke="white" stroke-width="1.27436" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M165.338 142.197L158.542 138.374L151.745 142.197L158.542 146.02L165.338 142.197Z" stroke="white" stroke-width="1.27436" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M155.144 144.108L151.745 146.02L158.542 149.843L165.339 146.02L161.94 144.108" stroke="white" stroke-width="1.27436" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M403.096 473.701L404.944 464.156H405.824L408.401 470.933L410.972 464.156H411.851L413.706 473.701H412.54L411.197 466.774L408.776 473.183H408.019L405.599 466.774L404.262 473.701H403.096ZM420.231 466.883H421.376V473.701H420.231L420.183 472.549C419.969 472.944 419.674 473.265 419.297 473.51C418.924 473.756 418.478 473.878 417.96 473.878C417.46 473.878 416.992 473.785 416.556 473.599C416.119 473.408 415.733 473.147 415.397 472.815C415.065 472.478 414.806 472.092 414.619 471.656C414.433 471.219 414.34 470.749 414.34 470.244C414.34 469.758 414.431 469.299 414.612 468.867C414.794 468.435 415.047 468.058 415.369 467.735C415.697 467.408 416.074 467.153 416.501 466.972C416.928 466.785 417.388 466.692 417.878 466.692C418.415 466.692 418.885 466.819 419.29 467.074C419.694 467.324 420.022 467.649 420.272 468.049L420.231 466.883ZM417.94 472.767C418.39 472.767 418.778 472.658 419.106 472.44C419.438 472.217 419.692 471.917 419.869 471.54C420.051 471.162 420.142 470.747 420.142 470.292C420.142 469.828 420.051 469.41 419.869 469.037C419.688 468.66 419.431 468.362 419.099 468.144C418.772 467.922 418.385 467.81 417.94 467.81C417.49 467.81 417.081 467.922 416.713 468.144C416.344 468.367 416.051 468.667 415.833 469.044C415.619 469.417 415.512 469.833 415.512 470.292C415.512 470.751 415.624 471.169 415.847 471.547C416.069 471.919 416.365 472.217 416.733 472.44C417.101 472.658 417.503 472.767 417.94 472.767ZM422.739 473.701V466.883H423.885V467.735C424.125 467.417 424.43 467.165 424.798 466.978C425.166 466.787 425.566 466.692 425.998 466.692C426.262 466.692 426.516 466.726 426.762 466.794L426.298 467.94C426.112 467.881 425.93 467.851 425.753 467.851C425.412 467.851 425.098 467.935 424.812 468.103C424.53 468.267 424.305 468.49 424.137 468.772C423.969 469.053 423.885 469.367 423.885 469.712V473.701H422.739Z" fill="#999999"></path>
                                <path d="M504.118 464.156H505.502L508.972 473.701H507.759L507.049 471.751H502.57L501.868 473.701H500.647L504.118 464.156ZM502.993 470.606H506.627L504.806 465.621L502.993 470.606ZM511.214 477.11H510.069V466.883H511.214V468.049C511.446 467.649 511.755 467.326 512.141 467.081C512.528 466.831 512.987 466.706 513.519 466.706C514.014 466.706 514.478 466.799 514.91 466.985C515.346 467.172 515.728 467.431 516.055 467.762C516.382 468.09 516.639 468.469 516.825 468.901C517.012 469.333 517.105 469.797 517.105 470.292C517.105 470.787 517.012 471.253 516.825 471.69C516.639 472.126 516.382 472.51 516.055 472.842C515.728 473.169 515.346 473.426 514.91 473.613C514.478 473.799 514.014 473.892 513.519 473.892C512.987 473.892 512.528 473.769 512.141 473.524C511.755 473.274 511.446 472.949 511.214 472.549V477.11ZM513.505 467.817C513.064 467.817 512.678 467.928 512.346 468.151C512.014 468.374 511.757 468.672 511.575 469.044C511.398 469.417 511.309 469.833 511.309 470.292C511.309 470.747 511.398 471.162 511.575 471.54C511.757 471.917 512.012 472.217 512.339 472.44C512.671 472.663 513.059 472.774 513.505 472.774C513.946 472.774 514.35 472.665 514.719 472.447C515.087 472.224 515.382 471.926 515.605 471.553C515.828 471.176 515.939 470.756 515.939 470.292C515.939 469.837 515.83 469.424 515.612 469.051C515.394 468.674 515.1 468.374 514.732 468.151C514.364 467.928 513.955 467.817 513.505 467.817ZM518.245 473.701V466.883H519.391V467.735C519.632 467.417 519.936 467.165 520.304 466.978C520.672 466.787 521.072 466.692 521.504 466.692C521.768 466.692 522.023 466.726 522.268 466.794L521.804 467.94C521.618 467.881 521.436 467.851 521.259 467.851C520.918 467.851 520.604 467.935 520.318 468.103C520.036 468.267 519.811 468.49 519.643 468.772C519.475 469.053 519.391 469.367 519.391 469.712V473.701H518.245Z" fill="#999999"></path>
                                <path d="M525.226 80.4531H404.938C396.101 80.4531 388.938 87.6166 388.938 96.4531V179.462C388.938 188.299 396.101 195.462 404.938 195.462H525.226C534.063 195.462 541.226 188.299 541.226 179.462V96.4531C541.226 87.6166 534.063 80.4531 525.226 80.4531Z" fill="#101010"></path>
                                <path d="M525.226 81.4531H404.938C396.654 81.4531 389.938 88.1689 389.938 96.4531V179.462C389.938 187.746 396.654 194.462 404.938 194.462H525.226C533.51 194.462 540.226 187.746 540.226 179.462V96.4531C540.226 88.1689 533.51 81.4531 525.226 81.4531Z" stroke="url(#paint1_linear_2258_11066)" stroke-opacity="0.25" stroke-width="2"></path>
                                <path d="M520.568 129.008H409.524C408.648 129.008 407.938 129.718 407.938 130.594V130.594C407.938 131.47 408.648 132.18 409.524 132.18H520.568C521.444 132.18 522.154 131.47 522.154 130.594C522.154 129.718 521.444 129.008 520.568 129.008Z" fill="#E6E6E6"></path>
                                <path d="M450.853 129.008H409.56C408.684 129.008 407.974 129.718 407.974 130.594V130.594C407.974 131.47 408.684 132.18 409.56 132.18H450.853C451.73 132.18 452.44 131.47 452.44 130.594C452.44 129.718 451.73 129.008 450.853 129.008Z" fill="#2ED98A"></path>
                                <path d="M488.269 157.357V155.213H486.124V154.347H488.269V152.202H489.135V154.347H491.28V155.213H489.135V157.357H488.269ZM492.915 157.873V151.521H492.106L492.348 150.655H493.781V157.873H492.915ZM498.119 157.873V155.924H495.016V155.048L497.903 150.655H498.985V155.058H499.702V155.924H498.985V157.873H498.119ZM496.031 155.048L498.119 155.058L498.104 151.872L496.031 155.048ZM501.199 157.873L505.365 150.655H506.365L502.199 157.873H501.199ZM502.055 153.558C501.811 153.558 501.589 153.499 501.39 153.383C501.194 153.266 501.036 153.108 500.916 152.908C500.795 152.709 500.735 152.487 500.735 152.243C500.735 151.992 500.795 151.769 500.916 151.573C501.036 151.374 501.196 151.215 501.395 151.099C501.594 150.982 501.814 150.923 502.055 150.923C502.296 150.923 502.515 150.983 502.715 151.104C502.914 151.221 503.072 151.379 503.189 151.578C503.309 151.774 503.37 151.996 503.37 152.243C503.37 152.491 503.309 152.714 503.189 152.913C503.069 153.109 502.909 153.266 502.71 153.383C502.51 153.499 502.292 153.558 502.055 153.558ZM502.055 152.924C502.244 152.924 502.404 152.858 502.534 152.728C502.668 152.594 502.735 152.432 502.735 152.243C502.735 152.051 502.668 151.889 502.534 151.759C502.404 151.624 502.244 151.557 502.055 151.557C501.866 151.557 501.704 151.624 501.57 151.759C501.436 151.889 501.369 152.051 501.369 152.243C501.369 152.432 501.436 152.594 501.57 152.728C501.704 152.858 501.866 152.924 502.055 152.924ZM505.514 157.61C505.274 157.61 505.052 157.55 504.849 157.43C504.65 157.306 504.49 157.144 504.37 156.945C504.253 156.742 504.194 156.524 504.194 156.29C504.194 156.043 504.255 155.819 504.375 155.62C504.499 155.421 504.66 155.263 504.86 155.146C505.059 155.029 505.277 154.97 505.514 154.97C505.762 154.97 505.985 155.032 506.185 155.156C506.384 155.276 506.542 155.436 506.659 155.636C506.776 155.835 506.834 156.053 506.834 156.29C506.834 156.534 506.774 156.756 506.654 156.955C506.537 157.155 506.379 157.315 506.179 157.435C505.98 157.552 505.758 157.61 505.514 157.61ZM505.514 156.976C505.703 156.976 505.865 156.909 505.999 156.775C506.133 156.641 506.2 156.479 506.2 156.29C506.2 156.101 506.133 155.94 505.999 155.806C505.865 155.672 505.703 155.605 505.514 155.605C505.325 155.605 505.164 155.672 505.03 155.806C504.896 155.94 504.829 156.101 504.829 156.29C504.829 156.479 504.896 156.641 505.03 156.775C505.164 156.909 505.325 156.976 505.514 156.976Z" fill="#2ED98A"></path>
                                <path d="M485.938 109H410.938C409.281 109 407.938 110.343 407.938 112C407.938 113.657 409.281 115 410.938 115H485.938C487.595 115 488.938 113.657 488.938 112C488.938 110.343 487.595 109 485.938 109Z" fill="#262626"></path>
                                <path d="M416.365 176.699C415.012 176.699 413.779 176.371 412.669 175.715C411.569 175.059 410.697 174.182 410.052 173.082C409.406 171.971 409.084 170.755 409.084 169.433H411.305C411.305 170.353 411.532 171.199 411.987 171.971C412.442 172.733 413.05 173.341 413.811 173.796C414.583 174.25 415.435 174.478 416.365 174.478C417.285 174.478 418.126 174.25 418.887 173.796C419.649 173.341 420.257 172.733 420.712 171.971C421.177 171.199 421.41 170.353 421.41 169.433C421.41 168.503 421.188 167.656 420.744 166.895C420.31 166.123 419.691 165.51 418.887 165.055C418.094 164.59 417.148 164.357 416.048 164.357H410.654L412.748 154.077H423.139V156.298H414.541L413.383 162.136L415.969 162.152C417.481 162.173 418.808 162.496 419.95 163.12C421.103 163.744 422.002 164.6 422.647 165.689C423.303 166.768 423.631 168.016 423.631 169.433C423.631 170.427 423.44 171.363 423.06 172.241C422.689 173.119 422.166 173.896 421.489 174.573C420.823 175.239 420.051 175.763 419.173 176.143C418.306 176.514 417.37 176.699 416.365 176.699ZM433.98 176.699C432.584 176.699 431.305 176.355 430.141 175.667C428.989 174.969 428.063 174.039 427.365 172.876C426.678 171.712 426.334 170.427 426.334 169.021C426.334 168.206 426.429 167.514 426.62 166.943C426.81 166.361 427.09 165.716 427.46 165.007L433.758 154.077H436.344L431.728 162.073C432.658 161.713 433.594 161.554 434.535 161.597C435.477 161.628 436.376 161.835 437.232 162.215C438.089 162.596 438.85 163.12 439.517 163.786C440.183 164.442 440.706 165.214 441.087 166.102C441.478 166.99 441.674 167.963 441.674 169.021C441.674 170.078 441.473 171.072 441.071 172.003C440.669 172.923 440.114 173.737 439.405 174.446C438.707 175.144 437.893 175.694 436.963 176.096C436.032 176.498 435.038 176.699 433.98 176.699ZM433.98 174.478C435.038 174.478 435.979 174.224 436.804 173.716C437.629 173.198 438.274 172.521 438.739 171.686C439.215 170.85 439.453 169.957 439.453 169.005C439.453 168.011 439.21 167.107 438.723 166.292C438.237 165.467 437.581 164.812 436.756 164.325C435.931 163.828 435.017 163.58 434.012 163.58C432.976 163.58 432.045 163.833 431.22 164.341C430.395 164.849 429.745 165.515 429.269 166.34C428.793 167.154 428.555 168.042 428.555 169.005C428.555 170.041 428.803 170.972 429.301 171.797C429.808 172.622 430.474 173.277 431.299 173.764C432.124 174.24 433.018 174.478 433.98 174.478ZM458.777 176.286H455.906L448.625 166.308L446.737 168.577V176.286H444.516V154.077H446.737V165.118L455.985 154.077H458.888L450.084 164.563L458.777 176.286Z" fill="white"></path>
                                <path d="M480.949 154.217C480.949 149.836 477.398 146.285 473.018 146.285C468.637 146.285 465.086 149.836 465.086 154.217C465.086 158.597 468.637 162.148 473.018 162.148C477.398 162.148 480.949 158.597 480.949 154.217Z" fill="#2ED98A"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M473.023 150.506V157.937" stroke="white" stroke-width="0.743594" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M470.055 153.481L473.018 150.499L475.981 153.481" stroke="white" stroke-width="0.743594" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M252.938 67H130.938C128.729 67 126.938 68.7909 126.938 71C126.938 73.2091 128.729 75 130.938 75H252.938C255.147 75 256.938 73.2091 256.938 71C256.938 68.7909 255.147 67 252.938 67Z" fill="#262626"></path>
                                <path d="M212.938 80H130.938C128.729 80 126.938 81.7909 126.938 84C126.938 86.2091 128.729 88 130.938 88H212.938C215.147 88 216.938 86.2091 216.938 84C216.938 81.7909 215.147 80 212.938 80Z" fill="#262626"></path>
                                <path d="M284.938 126H209.938C208.281 126 206.938 127.343 206.938 129C206.938 130.657 208.281 132 209.938 132H284.938C286.595 132 287.938 130.657 287.938 129C287.938 127.343 286.595 126 284.938 126Z" fill="#262626"></path>
                                <path d="M0.9375 243.959C0.9375 235.122 8.10094 227.959 16.9375 227.959H364.938C373.774 227.959 380.938 235.122 380.938 243.959V417.947C380.938 426.784 373.774 433.947 364.938 433.947H16.9375C8.10094 433.947 0.9375 426.784 0.9375 417.947V243.959Z" fill="#101010"></path>
                                <path d="M1.9375 243.959C1.9375 235.675 8.65323 228.959 16.9375 228.959H364.938C373.222 228.959 379.938 235.675 379.938 243.959V417.947C379.938 426.231 373.222 432.947 364.938 432.947H16.9375C8.65323 432.947 1.9375 426.231 1.9375 417.947V243.959Z" stroke="url(#paint2_linear_2258_11066)" stroke-opacity="0.25" stroke-width="2"></path>
                                <path d="M241.751 246.519H225.235C220.023 246.519 215.798 250.744 215.798 255.956V380.41C215.798 385.622 220.023 389.848 225.235 389.848H241.751C246.963 389.848 251.188 385.622 251.188 380.41V255.956C251.188 250.744 246.963 246.519 241.751 246.519Z" fill="#171717"></path>
                                <path d="M24.5553 260.979L20.9597 251.069H22.2196L25.2914 259.528L28.3703 251.069H29.6232L26.0275 260.979H24.5553ZM30.3569 253.901H31.546V260.979H30.3569V253.901ZM30.9656 252.747C30.7769 252.747 30.6188 252.685 30.4914 252.563C30.364 252.44 30.3003 252.287 30.3003 252.103C30.3003 251.919 30.364 251.765 30.4914 251.643C30.6188 251.52 30.7745 251.459 30.9586 251.459C31.1426 251.459 31.2983 251.52 31.4257 251.643C31.5531 251.765 31.6168 251.919 31.6168 252.103C31.6168 252.287 31.5531 252.44 31.4257 252.563C31.303 252.685 31.1497 252.747 30.9656 252.747ZM35.3358 261.113C34.9536 261.099 34.5809 261.028 34.2175 260.901C33.8589 260.769 33.5428 260.592 33.2691 260.37C33.0001 260.143 32.8043 259.884 32.6816 259.591L33.7008 259.152C33.7716 259.313 33.899 259.464 34.083 259.605C34.2671 259.747 34.4794 259.86 34.7201 259.945C34.9607 260.03 35.2037 260.073 35.4491 260.073C35.7086 260.073 35.9516 260.032 36.1781 259.952C36.4046 259.872 36.5886 259.754 36.7302 259.598C36.8765 259.438 36.9496 259.247 36.9496 259.025C36.9496 258.789 36.8694 258.605 36.709 258.473C36.5533 258.336 36.3551 258.23 36.1144 258.154C35.8785 258.074 35.6378 257.999 35.3925 257.928C34.9064 257.805 34.4723 257.659 34.0901 257.489C33.7079 257.314 33.4059 257.095 33.1841 256.831C32.9671 256.562 32.8586 256.22 32.8586 255.805C32.8586 255.366 32.9789 254.986 33.2195 254.665C33.4649 254.344 33.7858 254.096 34.1821 253.922C34.5785 253.747 35.0032 253.66 35.4562 253.66C36.0271 253.66 36.5485 253.783 37.0204 254.028C37.4923 254.273 37.8438 254.606 38.075 255.026L37.1195 255.585C37.0393 255.415 36.9166 255.267 36.7514 255.139C36.5863 255.007 36.3975 254.903 36.1852 254.828C35.9729 254.752 35.7558 254.712 35.534 254.707C35.2603 254.698 35.0032 254.733 34.7625 254.814C34.5266 254.894 34.3355 255.017 34.1892 255.182C34.0477 255.342 33.9769 255.543 33.9769 255.783C33.9769 256.019 34.0524 256.199 34.2034 256.321C34.3591 256.444 34.5596 256.543 34.805 256.618C35.0551 256.689 35.3264 256.772 35.619 256.866C36.0484 257.003 36.4494 257.161 36.8222 257.34C37.195 257.52 37.4946 257.744 37.7211 258.013C37.9523 258.282 38.0656 258.614 38.0609 259.011C38.0609 259.445 37.9311 259.825 37.6716 260.15C37.412 260.471 37.0747 260.717 36.6594 260.887C36.2489 261.056 35.8077 261.132 35.3358 261.113ZM39.1767 253.901H40.3658V260.979H39.1767V253.901ZM39.7854 252.747C39.5967 252.747 39.4386 252.685 39.3112 252.563C39.1838 252.44 39.1201 252.287 39.1201 252.103C39.1201 251.919 39.1838 251.765 39.3112 251.643C39.4386 251.52 39.5943 251.459 39.7784 251.459C39.9624 251.459 40.1181 251.52 40.2455 251.643C40.3729 251.765 40.4366 251.919 40.4366 252.103C40.4366 252.287 40.3729 252.44 40.2455 252.563C40.1228 252.685 39.9695 252.747 39.7854 252.747ZM45.7324 255.09H44.1257L44.1186 260.979H42.9295L42.9366 255.09H41.7192V253.901H42.9366L42.9295 251.678H44.1186L44.1257 253.901H45.7324V255.09ZM52.5607 261.113C52.1785 261.099 51.8057 261.028 51.4424 260.901C51.0838 260.769 50.7676 260.592 50.494 260.37C50.225 260.143 50.0292 259.884 49.9065 259.591L50.9257 259.152C50.9965 259.313 51.1239 259.464 51.3079 259.605C51.492 259.747 51.7043 259.86 51.9449 259.945C52.1856 260.03 52.4286 260.073 52.674 260.073C52.9335 260.073 53.1765 260.032 53.403 259.952C53.6295 259.872 53.8135 259.754 53.9551 259.598C54.1014 259.438 54.1745 259.247 54.1745 259.025C54.1745 258.789 54.0943 258.605 53.9339 258.473C53.7781 258.336 53.58 258.23 53.3393 258.154C53.1034 258.074 52.8627 257.999 52.6174 257.928C52.1313 257.805 51.6972 257.659 51.315 257.489C50.9328 257.314 50.6308 257.095 50.409 256.831C50.192 256.562 50.0834 256.22 50.0834 255.805C50.0834 255.366 50.2038 254.986 50.4444 254.665C50.6898 254.344 51.0107 254.096 51.407 253.922C51.8034 253.747 52.2281 253.66 52.6811 253.66C53.252 253.66 53.7734 253.783 54.2453 254.028C54.7172 254.273 55.0687 254.606 55.2999 255.026L54.3444 255.585C54.2642 255.415 54.1415 255.267 53.9763 255.139C53.8112 255.007 53.6224 254.903 53.4101 254.828C53.1977 254.752 52.9807 254.712 52.7589 254.707C52.4852 254.698 52.2281 254.733 51.9874 254.814C51.7515 254.894 51.5604 255.017 51.4141 255.182C51.2725 255.342 51.2018 255.543 51.2018 255.783C51.2018 256.019 51.2773 256.199 51.4283 256.321C51.584 256.444 51.7845 256.543 52.0299 256.618C52.28 256.689 52.5513 256.772 52.8439 256.866C53.2732 257.003 53.6743 257.161 54.0471 257.34C54.4199 257.52 54.7195 257.744 54.946 258.013C55.1772 258.282 55.2905 258.614 55.2857 259.011C55.2857 259.445 55.156 259.825 54.8965 260.15C54.6369 260.471 54.2996 260.717 53.8843 260.887C53.4738 261.056 53.0326 261.132 52.5607 261.113ZM60.1648 255.09H58.5581L58.551 260.979H57.3619L57.369 255.09H56.1516V253.901H57.369L57.3619 251.678H58.551L58.5581 253.901H60.1648V255.09ZM66.9446 253.901H68.1337V260.979H66.9446L66.8951 259.782C66.6733 260.193 66.3666 260.526 65.9749 260.78C65.588 261.035 65.1256 261.163 64.5876 261.163C64.0686 261.163 63.5826 261.066 63.1296 260.872C62.6766 260.674 62.2755 260.403 61.9263 260.058C61.5819 259.709 61.3129 259.308 61.1194 258.855C60.926 258.402 60.8292 257.914 60.8292 257.39C60.8292 256.885 60.9236 256.409 61.1124 255.96C61.3011 255.512 61.563 255.12 61.898 254.785C62.2377 254.446 62.6294 254.181 63.0729 253.993C63.5165 253.799 63.9931 253.702 64.5027 253.702C65.0595 253.702 65.5479 253.834 65.9678 254.099C66.3878 254.358 66.7275 254.696 66.9871 255.111L66.9446 253.901ZM64.5664 260.009C65.0335 260.009 65.437 259.896 65.7767 259.669C66.1212 259.438 66.3854 259.126 66.5695 258.735C66.7582 258.343 66.8526 257.911 66.8526 257.44C66.8526 256.958 66.7582 256.524 66.5695 256.137C66.3807 255.746 66.1141 255.436 65.7697 255.21C65.4299 254.979 65.0288 254.863 64.5664 254.863C64.0993 254.863 63.6746 254.979 63.2924 255.21C62.9102 255.441 62.6058 255.753 62.3793 256.144C62.1575 256.531 62.0466 256.963 62.0466 257.44C62.0466 257.916 62.1623 258.35 62.3935 258.742C62.6247 259.129 62.9314 259.438 63.3136 259.669C63.6958 259.896 64.1134 260.009 64.5664 260.009ZM73.2148 255.09H71.6081L71.601 260.979H70.4119L70.419 255.09H69.2016V253.901H70.419L70.4119 251.678H71.601L71.6081 253.901H73.2148V255.09ZM74.4145 253.901H75.6036V260.979H74.4145V253.901ZM75.0232 252.747C74.8345 252.747 74.6764 252.685 74.549 252.563C74.4216 252.44 74.3579 252.287 74.3579 252.103C74.3579 251.919 74.4216 251.765 74.549 251.643C74.6764 251.52 74.8321 251.459 75.0161 251.459C75.2002 251.459 75.3559 251.52 75.4833 251.643C75.6107 251.765 75.6744 251.919 75.6744 252.103C75.6744 252.287 75.6107 252.44 75.4833 252.563C75.3606 252.685 75.2072 252.747 75.0232 252.747ZM79.3934 261.113C79.0112 261.099 78.6384 261.028 78.2751 260.901C77.9165 260.769 77.6003 260.592 77.3266 260.37C77.0577 260.143 76.8619 259.884 76.7392 259.591L77.7584 259.152C77.8292 259.313 77.9566 259.464 78.1406 259.605C78.3246 259.747 78.537 259.86 78.7776 259.945C79.0183 260.03 79.2613 260.073 79.5067 260.073C79.7662 260.073 80.0092 260.032 80.2357 259.952C80.4622 259.872 80.6462 259.754 80.7878 259.598C80.934 259.438 81.0072 259.247 81.0072 259.025C81.0072 258.789 80.927 258.605 80.7665 258.473C80.6108 258.336 80.4126 258.23 80.172 258.154C79.9361 258.074 79.6954 257.999 79.45 257.928C78.964 257.805 78.5299 257.659 78.1477 257.489C77.7655 257.314 77.4635 257.095 77.2417 256.831C77.0246 256.562 76.9161 256.22 76.9161 255.805C76.9161 255.366 77.0364 254.986 77.2771 254.665C77.5225 254.344 77.8433 254.096 78.2397 253.922C78.6361 253.747 79.0607 253.66 79.5137 253.66C80.0847 253.66 80.6061 253.783 81.078 254.028C81.5498 254.273 81.9014 254.606 82.1326 255.026L81.1771 255.585C81.0968 255.415 80.9742 255.267 80.809 255.139C80.6438 255.007 80.4551 254.903 80.2428 254.828C80.0304 254.752 79.8134 254.712 79.5916 254.707C79.3179 254.698 79.0607 254.733 78.8201 254.814C78.5842 254.894 78.3931 255.017 78.2468 255.182C78.1052 255.342 78.0344 255.543 78.0344 255.783C78.0344 256.019 78.1099 256.199 78.2609 256.321C78.4166 256.444 78.6172 256.543 78.8626 256.618C79.1126 256.689 79.384 256.772 79.6765 256.866C80.1059 257.003 80.507 257.161 80.8798 257.34C81.2526 257.52 81.5522 257.744 81.7787 258.013C82.0099 258.282 82.1231 258.614 82.1184 259.011C82.1184 259.445 81.9887 259.825 81.7291 260.15C81.4696 260.471 81.1322 260.717 80.717 260.887C80.3065 261.056 79.8653 261.132 79.3934 261.113ZM86.9975 255.09H85.3908L85.3837 260.979H84.1946L84.2017 255.09H82.9843V253.901H84.2017L84.1946 251.678H85.3837L85.3908 253.901H86.9975V255.09ZM88.1972 253.901H89.3863V260.979H88.1972V253.901ZM88.8059 252.747C88.6171 252.747 88.4591 252.685 88.3317 252.563C88.2043 252.44 88.1406 252.287 88.1406 252.103C88.1406 251.919 88.2043 251.765 88.3317 251.643C88.4591 251.52 88.6148 251.459 88.7988 251.459C88.9828 251.459 89.1385 251.52 89.266 251.643C89.3934 251.765 89.4571 251.919 89.4571 252.103C89.4571 252.287 89.3934 252.44 89.266 252.563C89.1433 252.685 88.9899 252.747 88.8059 252.747ZM95.8664 259.11L96.9281 259.683C96.6072 260.132 96.199 260.49 95.7036 260.759C95.2128 261.028 94.6796 261.163 94.104 261.163C93.4528 261.163 92.8582 260.995 92.3203 260.66C91.7871 260.325 91.3601 259.877 91.0392 259.315C90.7231 258.749 90.565 258.124 90.565 257.44C90.565 256.92 90.657 256.437 90.841 255.989C91.0251 255.536 91.2775 255.139 91.5984 254.799C91.924 254.455 92.3014 254.186 92.7308 253.993C93.1602 253.799 93.6179 253.702 94.104 253.702C94.6796 253.702 95.2128 253.837 95.7036 254.106C96.199 254.375 96.6072 254.736 96.9281 255.189L95.8664 255.762C95.6399 255.484 95.3709 255.269 95.0595 255.118C94.7481 254.967 94.4296 254.891 94.104 254.891C93.6651 254.891 93.2664 255.009 92.9078 255.245C92.5539 255.477 92.2731 255.786 92.0655 256.173C91.8579 256.56 91.7541 256.982 91.7541 257.44C91.7541 257.897 91.8579 258.32 92.0655 258.706C92.2778 259.089 92.561 259.395 92.9149 259.627C93.2735 259.858 93.6698 259.973 94.104 259.973C94.4531 259.973 94.7811 259.893 95.0878 259.733C95.3945 259.572 95.654 259.365 95.8664 259.11ZM100.365 261.113C99.9824 261.099 99.6097 261.028 99.2463 260.901C98.8877 260.769 98.5716 260.592 98.2979 260.37C98.0289 260.143 97.8331 259.884 97.7104 259.591L98.7296 259.152C98.8004 259.313 98.9278 259.464 99.1118 259.605C99.2959 259.747 99.5082 259.86 99.7489 259.945C99.9895 260.03 100.233 260.073 100.478 260.073C100.737 260.073 100.98 260.032 101.207 259.952C101.433 259.872 101.617 259.754 101.759 259.598C101.905 259.438 101.978 259.247 101.978 259.025C101.978 258.789 101.898 258.605 101.738 258.473C101.582 258.336 101.384 258.23 101.143 258.154C100.907 258.074 100.667 257.999 100.421 257.928C99.9352 257.805 99.5011 257.659 99.1189 257.489C98.7367 257.314 98.4347 257.095 98.2129 256.831C97.9959 256.562 97.8874 256.22 97.8874 255.805C97.8874 255.366 98.0077 254.986 98.2483 254.665C98.4937 254.344 98.8146 254.096 99.2109 253.922C99.6073 253.747 100.032 253.66 100.485 253.66C101.056 253.66 101.577 253.783 102.049 254.028C102.521 254.273 102.873 254.606 103.104 255.026L102.148 255.585C102.068 255.415 101.945 255.267 101.78 255.139C101.615 255.007 101.426 254.903 101.214 254.828C101.002 254.752 100.785 254.712 100.563 254.707C100.289 254.698 100.032 254.733 99.7913 254.814C99.5554 254.894 99.3643 255.017 99.218 255.182C99.0765 255.342 99.0057 255.543 99.0057 255.783C99.0057 256.019 99.0812 256.199 99.2322 256.321C99.3879 256.444 99.5884 256.543 99.8338 256.618C100.084 256.689 100.355 256.772 100.648 256.866C101.077 257.003 101.478 257.161 101.851 257.34C102.224 257.52 102.523 257.744 102.75 258.013C102.981 258.282 103.094 258.614 103.09 259.011C103.09 259.445 102.96 259.825 102.7 260.15C102.441 260.471 102.103 260.717 101.688 260.887C101.278 261.056 100.837 261.132 100.365 261.113Z" fill="white"></path>
                                <path d="M21.3844 405.684C21.1642 405.684 20.9487 405.646 20.7379 405.571C20.5272 405.499 20.3353 405.389 20.1623 405.241L20.6672 404.627C20.7584 404.706 20.8638 404.77 20.9833 404.821C21.106 404.868 21.2397 404.891 21.3844 404.891C21.592 404.891 21.7808 404.836 21.9506 404.726C22.1205 404.616 22.2558 404.472 22.3564 404.292C22.4602 404.113 22.5121 403.921 22.5121 403.717V398.955H23.3049V403.717C23.3049 404.069 23.2184 404.394 23.0453 404.693C22.8723 404.989 22.6411 405.228 22.3517 405.411C22.0623 405.593 21.7399 405.684 21.3844 405.684ZM28.2319 400.843H29.0247V405.562H28.2319L28.1989 404.764C28.0511 405.038 27.8466 405.26 27.5855 405.429C27.3275 405.599 27.0193 405.684 26.6606 405.684C26.3146 405.684 25.9906 405.62 25.6886 405.491C25.3866 405.359 25.1192 405.178 24.8864 404.948C24.6568 404.715 24.4775 404.448 24.3485 404.146C24.2195 403.844 24.155 403.518 24.155 403.169C24.155 402.833 24.218 402.515 24.3438 402.216C24.4696 401.917 24.6442 401.656 24.8676 401.433C25.0941 401.206 25.3551 401.03 25.6509 400.904C25.9466 400.775 26.2643 400.711 26.604 400.711C26.9752 400.711 27.3008 400.799 27.5808 400.975C27.8607 401.148 28.0872 401.373 28.2603 401.65L28.2319 400.843ZM26.6465 404.915C26.9579 404.915 27.2269 404.84 27.4534 404.689C27.683 404.534 27.8592 404.327 27.9819 404.066C28.1077 403.805 28.1706 403.517 28.1706 403.202C28.1706 402.881 28.1077 402.592 27.9819 402.334C27.856 402.073 27.6783 401.867 27.4487 401.716C27.2222 401.562 26.9548 401.485 26.6465 401.485C26.3351 401.485 26.0519 401.562 25.7971 401.716C25.5423 401.87 25.3394 402.078 25.1884 402.339C25.0406 402.597 24.9666 402.884 24.9666 403.202C24.9666 403.52 25.0437 403.809 25.1979 404.07C25.352 404.328 25.5565 404.534 25.8113 404.689C26.0661 404.84 26.3445 404.915 26.6465 404.915ZM34.1391 402.627V405.562H33.3464V402.801C33.3464 402.562 33.2882 402.345 33.1718 402.15C33.0554 401.955 32.8997 401.801 32.7046 401.688C32.5096 401.571 32.2925 401.513 32.0535 401.513C31.8175 401.513 31.6005 401.571 31.4023 401.688C31.2073 401.801 31.0515 401.955 30.9351 402.15C30.8187 402.345 30.7606 402.562 30.7606 402.801V405.562H29.9678V400.843H30.7606V401.433C30.9273 401.213 31.138 401.038 31.3929 400.909C31.6477 400.777 31.9245 400.711 32.2233 400.711C32.5757 400.711 32.8965 400.797 33.1859 400.97C33.4785 401.14 33.7097 401.37 33.8796 401.659C34.0526 401.949 34.1391 402.271 34.1391 402.627Z" fill="#999999"></path>
                                <path d="M61.2463 405.562V398.955H65.1203V399.748H62.039V401.626H64.6673V402.419H62.039V405.562H61.2463ZM67.4236 405.684C66.9895 405.684 66.5932 405.573 66.2345 405.349C65.8791 405.126 65.5944 404.827 65.3805 404.453C65.1697 404.075 65.0643 403.658 65.0643 403.202C65.0643 402.856 65.1257 402.534 65.2483 402.235C65.371 401.933 65.5393 401.669 65.7532 401.442C65.9703 401.213 66.222 401.033 66.5082 400.904C66.7945 400.775 67.0996 400.711 67.4236 400.711C67.7791 400.711 68.1047 400.783 68.4004 400.928C68.6993 401.069 68.9541 401.268 69.1648 401.522C69.3787 401.777 69.5376 402.073 69.6414 402.409C69.7484 402.746 69.7877 403.106 69.7594 403.49H65.909C65.9467 403.757 66.0348 403.997 66.1732 404.207C66.3116 404.415 66.4878 404.58 66.7017 404.703C66.9187 404.825 67.1594 404.888 67.4236 404.891C67.7068 404.891 67.9631 404.819 68.1928 404.674C68.4224 404.527 68.608 404.325 68.7496 404.07L69.5565 404.259C69.3677 404.678 69.083 405.02 68.7024 405.288C68.3218 405.552 67.8955 405.684 67.4236 405.684ZM65.8854 402.867H68.9619C68.9368 402.603 68.8518 402.362 68.7071 402.145C68.5624 401.925 68.3784 401.749 68.155 401.617C67.9317 401.485 67.6879 401.419 67.4236 401.419C67.1594 401.419 66.9172 401.483 66.697 401.612C66.4768 401.741 66.2943 401.916 66.1496 402.136C66.0081 402.353 65.92 402.597 65.8854 402.867ZM72.8961 400.711C73.3554 400.711 73.7722 400.822 74.1465 401.046C74.524 401.269 74.8244 401.57 75.0478 401.947C75.2711 402.321 75.3828 402.738 75.3828 403.197C75.3828 403.54 75.3183 403.863 75.1894 404.165C75.0604 404.464 74.8811 404.728 74.6514 404.958C74.4249 405.184 74.1607 405.362 73.8587 405.491C73.5598 405.62 73.239 405.684 72.8961 405.684C72.5312 405.684 72.2135 405.599 71.9429 405.429C71.6755 405.256 71.4616 405.031 71.3012 404.755V405.562H70.5085V398.484H71.3012V401.64C71.4616 401.364 71.6755 401.14 71.9429 400.97C72.2135 400.797 72.5312 400.711 72.8961 400.711ZM72.8867 404.91C73.1981 404.91 73.4812 404.833 73.736 404.679C73.9908 404.525 74.1937 404.319 74.3447 404.061C74.4957 403.8 74.5712 403.512 74.5712 403.197C74.5712 402.877 74.4941 402.587 74.34 402.329C74.1859 402.068 73.9814 401.862 73.7266 401.711C73.4718 401.557 73.1918 401.48 72.8867 401.48C72.5784 401.48 72.3094 401.557 72.0798 401.711C71.8533 401.865 71.6771 402.073 71.5513 402.334C71.4286 402.595 71.3673 402.883 71.3673 403.197C71.3673 403.515 71.4286 403.805 71.5513 404.066C71.6771 404.324 71.8548 404.53 72.0845 404.684C72.3141 404.835 72.5815 404.91 72.8867 404.91Z" fill="#999999"></path>
                                <path d="M102.422 405.562L103.701 398.955H104.309L106.093 403.646L107.872 398.955H108.481L109.764 405.562H108.957L108.028 400.767L106.352 405.203H105.829L104.154 400.767L103.229 405.562H102.422ZM114.28 400.843H115.072V405.562H114.28L114.247 404.764C114.099 405.038 113.894 405.26 113.633 405.429C113.375 405.599 113.067 405.684 112.708 405.684C112.362 405.684 112.038 405.62 111.736 405.491C111.434 405.359 111.167 405.178 110.934 404.948C110.705 404.715 110.525 404.448 110.396 404.146C110.267 403.844 110.203 403.518 110.203 403.169C110.203 402.833 110.266 402.515 110.392 402.216C110.517 401.917 110.692 401.656 110.915 401.433C111.142 401.206 111.403 401.03 111.699 400.904C111.994 400.775 112.312 400.711 112.652 400.711C113.023 400.711 113.349 400.799 113.629 400.975C113.908 401.148 114.135 401.373 114.308 401.65L114.28 400.843ZM112.694 404.915C113.006 404.915 113.275 404.84 113.501 404.689C113.731 404.534 113.907 404.327 114.03 404.066C114.155 403.805 114.218 403.517 114.218 403.202C114.218 402.881 114.155 402.592 114.03 402.334C113.904 402.073 113.726 401.867 113.496 401.716C113.27 401.562 113.003 401.485 112.694 401.485C112.383 401.485 112.1 401.562 111.845 401.716C111.59 401.87 111.387 402.078 111.236 402.339C111.088 402.597 111.014 402.884 111.014 403.202C111.014 403.52 111.091 403.809 111.246 404.07C111.4 404.328 111.604 404.534 111.859 404.689C112.114 404.84 112.392 404.915 112.694 404.915ZM116.016 405.562V400.843H116.808V401.433C116.975 401.213 117.186 401.038 117.441 400.909C117.695 400.777 117.972 400.711 118.271 400.711C118.454 400.711 118.63 400.734 118.8 400.782L118.479 401.574C118.35 401.533 118.224 401.513 118.101 401.513C117.865 401.513 117.648 401.571 117.45 401.688C117.255 401.801 117.099 401.955 116.983 402.15C116.866 402.345 116.808 402.562 116.808 402.801V405.562H116.016Z" fill="#999999"></path>
                                <path d="M146.03 398.955H146.988L149.39 405.562H148.55L148.059 404.212H144.959L144.473 405.562H143.628L146.03 398.955ZM145.252 403.419H147.767L146.507 399.97L145.252 403.419ZM150.941 407.921H150.149V400.843H150.941V401.65C151.102 401.373 151.316 401.15 151.583 400.98C151.85 400.807 152.168 400.72 152.536 400.72C152.879 400.72 153.2 400.785 153.499 400.914C153.801 401.043 154.065 401.222 154.292 401.452C154.518 401.678 154.696 401.941 154.825 402.24C154.954 402.538 155.018 402.859 155.018 403.202C155.018 403.545 154.954 403.868 154.825 404.17C154.696 404.472 154.518 404.737 154.292 404.967C154.065 405.193 153.801 405.371 153.499 405.5C153.2 405.629 152.879 405.694 152.536 405.694C152.168 405.694 151.85 405.609 151.583 405.439C151.316 405.266 151.102 405.041 150.941 404.764V407.921ZM152.527 401.489C152.222 401.489 151.954 401.566 151.725 401.721C151.495 401.875 151.317 402.081 151.191 402.339C151.069 402.597 151.007 402.884 151.007 403.202C151.007 403.517 151.069 403.805 151.191 404.066C151.317 404.327 151.493 404.534 151.72 404.689C151.95 404.843 152.218 404.92 152.527 404.92C152.832 404.92 153.112 404.844 153.367 404.693C153.621 404.539 153.826 404.333 153.98 404.075C154.134 403.814 154.211 403.523 154.211 403.202C154.211 402.888 154.136 402.601 153.985 402.343C153.834 402.082 153.631 401.875 153.376 401.721C153.121 401.566 152.838 401.489 152.527 401.489ZM155.807 405.562V400.843H156.6V401.433C156.767 401.213 156.977 401.038 157.232 400.909C157.487 400.777 157.764 400.711 158.063 400.711C158.245 400.711 158.421 400.734 158.591 400.782L158.27 401.574C158.141 401.533 158.016 401.513 157.893 401.513C157.657 401.513 157.44 401.571 157.242 401.688C157.047 401.801 156.891 401.955 156.775 402.15C156.658 402.345 156.6 402.562 156.6 402.801V405.562H155.807Z" fill="#999999"></path>
                                <path d="M183.337 405.562L184.615 398.955H185.224L187.008 403.646L188.787 398.955H189.395L190.679 405.562H189.872L188.942 400.767L187.267 405.203H186.743L185.068 400.767L184.144 405.562H183.337ZM195.195 400.843H195.987V405.562H195.195L195.161 404.764C195.014 405.038 194.809 405.26 194.548 405.429C194.29 405.599 193.982 405.684 193.623 405.684C193.277 405.684 192.953 405.62 192.651 405.491C192.349 405.359 192.082 405.178 191.849 404.948C191.619 404.715 191.44 404.448 191.311 404.146C191.182 403.844 191.118 403.518 191.118 403.169C191.118 402.833 191.181 402.515 191.306 402.216C191.432 401.917 191.607 401.656 191.83 401.433C192.057 401.206 192.318 401.03 192.613 400.904C192.909 400.775 193.227 400.711 193.567 400.711C193.938 400.711 194.263 400.799 194.543 400.975C194.823 401.148 195.05 401.373 195.223 401.65L195.195 400.843ZM193.609 404.915C193.92 404.915 194.189 404.84 194.416 404.689C194.646 404.534 194.822 404.327 194.944 404.066C195.07 403.805 195.133 403.517 195.133 403.202C195.133 402.881 195.07 402.592 194.944 402.334C194.819 402.073 194.641 401.867 194.411 401.716C194.185 401.562 193.917 401.485 193.609 401.485C193.298 401.485 193.014 401.562 192.76 401.716C192.505 401.87 192.302 402.078 192.151 402.339C192.003 402.597 191.929 402.884 191.929 403.202C191.929 403.52 192.006 403.809 192.16 404.07C192.315 404.328 192.519 404.534 192.774 404.689C193.029 404.84 193.307 404.915 193.609 404.915ZM200.015 400.843H200.855L198.274 407.921H197.434L198.288 405.562L196.594 400.843H197.462L198.685 404.472L200.015 400.843Z" fill="#999999"></path>
                                <path d="M227.83 405.684C227.61 405.684 227.394 405.646 227.183 405.571C226.973 405.499 226.781 405.389 226.608 405.241L227.113 404.627C227.204 404.706 227.309 404.77 227.429 404.821C227.551 404.868 227.685 404.891 227.83 404.891C228.038 404.891 228.226 404.836 228.396 404.726C228.566 404.616 228.701 404.472 228.802 404.292C228.906 404.113 228.958 403.921 228.958 403.717V398.955H229.75V403.717C229.75 404.069 229.664 404.394 229.491 404.693C229.318 404.989 229.087 405.228 228.797 405.411C228.508 405.593 228.185 405.684 227.83 405.684ZM230.695 403.768V400.843H231.488V403.594C231.488 403.833 231.546 404.05 231.662 404.245C231.779 404.44 231.934 404.596 232.129 404.712C232.328 404.825 232.545 404.882 232.781 404.882C233.02 404.882 233.235 404.825 233.427 404.712C233.622 404.596 233.778 404.44 233.894 404.245C234.011 404.05 234.069 403.833 234.069 403.594V400.843H234.861L234.866 405.562H234.073L234.069 404.962C233.902 405.182 233.691 405.359 233.436 405.491C233.182 405.62 232.906 405.684 232.611 405.684C232.258 405.684 231.936 405.599 231.643 405.429C231.354 405.256 231.123 405.025 230.95 404.736C230.78 404.446 230.695 404.124 230.695 403.768ZM239.986 402.627V405.562H239.193V402.801C239.193 402.562 239.135 402.345 239.018 402.15C238.902 401.955 238.746 401.801 238.551 401.688C238.356 401.571 238.139 401.513 237.9 401.513C237.664 401.513 237.447 401.571 237.249 401.688C237.054 401.801 236.898 401.955 236.782 402.15C236.665 402.345 236.607 402.562 236.607 402.801V405.562H235.814V400.843H236.607V401.433C236.774 401.213 236.984 401.038 237.239 400.909C237.494 400.777 237.771 400.711 238.07 400.711C238.422 400.711 238.743 400.797 239.032 400.97C239.325 401.14 239.556 401.37 239.726 401.659C239.899 401.949 239.986 402.271 239.986 402.627Z" fill="#1A1A1A"></path>
                                <path d="M270.888 405.684C270.668 405.684 270.453 405.646 270.242 405.571C270.031 405.499 269.839 405.389 269.666 405.241L270.171 404.627C270.262 404.706 270.368 404.77 270.487 404.821C270.61 404.868 270.744 404.891 270.888 404.891C271.096 404.891 271.285 404.836 271.455 404.726C271.624 404.616 271.76 404.472 271.86 404.292C271.964 404.113 272.016 403.921 272.016 403.717V398.955H272.809V403.717C272.809 404.069 272.722 404.394 272.549 404.693C272.376 404.989 272.145 405.228 271.856 405.411C271.566 405.593 271.244 405.684 270.888 405.684ZM273.753 403.768V400.843H274.546V403.594C274.546 403.833 274.604 404.05 274.721 404.245C274.837 404.44 274.993 404.596 275.188 404.712C275.386 404.825 275.603 404.882 275.839 404.882C276.078 404.882 276.294 404.825 276.485 404.712C276.68 404.596 276.836 404.44 276.953 404.245C277.069 404.05 277.127 403.833 277.127 403.594V400.843H277.92L277.925 405.562H277.132L277.127 404.962C276.96 405.182 276.75 405.359 276.495 405.491C276.24 405.62 275.965 405.684 275.669 405.684C275.317 405.684 274.994 405.599 274.702 405.429C274.412 405.256 274.181 405.025 274.008 404.736C273.838 404.446 273.753 404.124 273.753 403.768ZM278.928 405.562V398.484H279.721V405.562H278.928Z" fill="#999999"></path>
                                <path d="M310.589 398.955H311.547L313.948 405.562H313.108L312.618 404.212H309.518L309.032 405.562H308.187L310.589 398.955ZM309.81 403.419H312.325L311.065 399.97L309.81 403.419ZM314.38 403.768V400.843H315.173V403.594C315.173 403.833 315.231 404.05 315.347 404.245C315.464 404.44 315.62 404.596 315.815 404.712C316.013 404.825 316.23 404.882 316.466 404.882C316.705 404.882 316.92 404.825 317.112 404.712C317.307 404.596 317.463 404.44 317.579 404.245C317.696 404.05 317.754 403.833 317.754 403.594V400.843H318.547L318.551 405.562H317.759L317.754 404.962C317.587 405.182 317.376 405.359 317.122 405.491C316.867 405.62 316.592 405.684 316.296 405.684C315.944 405.684 315.621 405.599 315.329 405.429C315.039 405.256 314.808 405.025 314.635 404.736C314.465 404.446 314.38 404.124 314.38 403.768ZM323.139 400.843H323.931V405.713C323.931 406.024 323.864 406.313 323.729 406.581C323.596 406.851 323.417 407.086 323.191 407.284C322.964 407.485 322.706 407.641 322.417 407.751C322.127 407.864 321.825 407.921 321.511 407.921C321.184 407.921 320.867 407.847 320.562 407.699C320.257 407.554 319.99 407.359 319.76 407.114C319.534 406.872 319.37 406.6 319.269 406.298L319.996 405.967C320.056 406.184 320.163 406.379 320.317 406.552C320.474 406.729 320.657 406.867 320.864 406.968C321.075 407.071 321.291 407.123 321.511 407.123C321.718 407.123 321.918 407.087 322.11 407.015C322.305 406.943 322.48 406.842 322.634 406.713C322.791 406.587 322.914 406.438 323.002 406.265C323.093 406.095 323.139 405.911 323.139 405.713V404.774C322.978 405.044 322.766 405.264 322.502 405.434C322.241 405.601 321.935 405.684 321.586 405.684C321.253 405.684 320.94 405.62 320.647 405.491C320.355 405.362 320.098 405.184 319.878 404.958C319.658 404.728 319.485 404.464 319.359 404.165C319.233 403.866 319.17 403.545 319.17 403.202C319.17 402.859 319.233 402.538 319.359 402.24C319.485 401.938 319.658 401.673 319.878 401.447C320.098 401.217 320.355 401.038 320.647 400.909C320.94 400.78 321.253 400.715 321.586 400.715C321.935 400.715 322.241 400.799 322.502 400.966C322.766 401.132 322.978 401.352 323.139 401.626V400.843ZM321.591 404.915C321.896 404.915 322.16 404.836 322.384 404.679C322.61 404.522 322.785 404.313 322.907 404.052C323.03 403.79 323.092 403.507 323.092 403.202C323.092 402.888 323.029 402.601 322.903 402.343C322.78 402.082 322.605 401.875 322.379 401.721C322.156 401.563 321.893 401.485 321.591 401.485C321.295 401.485 321.025 401.562 320.779 401.716C320.534 401.87 320.339 402.078 320.194 402.339C320.053 402.597 319.982 402.884 319.982 403.202C319.982 403.52 320.054 403.809 320.199 404.07C320.347 404.328 320.542 404.534 320.784 404.689C321.029 404.84 321.298 404.915 321.591 404.915Z" fill="#999999"></path>
                                <path d="M27.3505 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M68.6386 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M109.927 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M151.215 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M192.503 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M233.791 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M275.079 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path d="M316.367 275.521V371.664" stroke="#404040" stroke-width="0.58983" stroke-dasharray="2.36 2.36"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M68.3445 359.867C70.299 359.867 71.8835 358.283 71.8835 356.328C71.8835 354.374 70.299 352.789 68.3445 352.789C66.39 352.789 64.8055 354.374 64.8055 356.328C64.8055 358.283 66.39 359.867 68.3445 359.867Z" fill="#FFCF27"></path>
                                <path d="M68.3445 362.227C71.6021 362.227 74.2428 359.587 74.2428 356.329C74.2428 353.071 71.6021 350.431 68.3445 350.431C65.087 350.431 62.4462 353.071 62.4462 356.329C62.4462 359.587 65.087 362.227 68.3445 362.227Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="4.71864"></path>
                                <path d="M91.3484 326.838C93.3029 326.838 94.8874 325.253 94.8874 323.299C94.8874 321.344 93.3029 319.76 91.3484 319.76C89.3939 319.76 87.8094 321.344 87.8094 323.299C87.8094 325.253 89.3939 326.838 91.3484 326.838Z" fill="#FFCF27"></path>
                                <path d="M91.3484 328.016C93.9545 328.016 96.0671 325.904 96.0671 323.298C96.0671 320.692 93.9545 318.579 91.3484 318.579C88.7424 318.579 86.6298 320.692 86.6298 323.298C86.6298 325.904 88.7424 328.016 91.3484 328.016Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="2.35932"></path>
                                <path d="M127.915 324.477C129.87 324.477 131.454 322.893 131.454 320.938C131.454 318.984 129.87 317.399 127.915 317.399C125.96 317.399 124.376 318.984 124.376 320.938C124.376 322.893 125.96 324.477 127.915 324.477Z" fill="#FFCF27"></path>
                                <path d="M127.915 325.658C130.521 325.658 132.633 323.545 132.633 320.939C132.633 318.333 130.521 316.221 127.915 316.221C125.309 316.221 123.196 318.333 123.196 320.939C123.196 323.545 125.309 325.658 127.915 325.658Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="2.35932"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M151.512 296.167C153.467 296.167 155.051 294.582 155.051 292.628C155.051 290.673 153.467 289.089 151.512 289.089C149.557 289.089 147.973 290.673 147.973 292.628C147.973 294.582 149.557 296.167 151.512 296.167Z" fill="#FFCF27"></path>
                                <path d="M151.512 298.525C154.77 298.525 157.411 295.885 157.411 292.628C157.411 289.37 154.77 286.729 151.512 286.729C148.255 286.729 145.614 289.37 145.614 292.628C145.614 295.885 148.255 298.525 151.512 298.525Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="4.71864"></path>
                                <path d="M192.208 312.092C194.163 312.092 195.747 310.507 195.747 308.553C195.747 306.598 194.163 305.014 192.208 305.014C190.253 305.014 188.669 306.598 188.669 308.553C188.669 310.507 190.253 312.092 192.208 312.092Z" fill="#FFCF27"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M192.208 313.27C194.814 313.27 196.926 311.158 196.926 308.552C196.926 305.946 194.814 303.833 192.208 303.833C189.602 303.833 187.489 305.946 187.489 308.552C187.489 311.158 189.602 313.27 192.208 313.27Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="2.35932"></path>
                                <path xmlns="http://www.w3.org/2000/svg" d="M274.485 294.986C276.44 294.986 278.024 293.402 278.024 291.447C278.024 289.493 276.44 287.908 274.485 287.908C272.53 287.908 270.946 289.493 270.946 291.447C270.946 293.402 272.53 294.986 274.485 294.986Z" fill="#FFCF27"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M274.485 296.166C277.091 296.166 279.204 294.053 279.204 291.447C279.204 288.841 277.091 286.729 274.485 286.729C271.879 286.729 269.767 288.841 269.767 291.447C269.767 294.053 271.879 296.166 274.485 296.166Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="2.35932"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M234.087 294.396C236.042 294.396 237.626 292.812 237.626 290.857C237.626 288.903 236.042 287.318 234.087 287.318C232.132 287.318 230.548 288.903 230.548 290.857C230.548 292.812 232.132 294.396 234.087 294.396Z" fill="#FFCF27"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M234.087 296.756C237.344 296.756 239.985 294.115 239.985 290.857C239.985 287.6 237.344 284.959 234.087 284.959C230.829 284.959 228.188 287.6 228.188 290.857C228.188 294.115 230.829 296.756 234.087 296.756Z" stroke="#FFCF27" stroke-opacity="0.25" stroke-width="4.71864"></path>
                                <path d="M27.6453 366.945C29.5998 366.945 31.1843 365.361 31.1843 363.406C31.1843 361.452 29.5998 359.867 27.6453 359.867C25.6908 359.867 24.1063 361.452 24.1063 363.406C24.1063 365.361 25.6908 366.945 27.6453 366.945Z" fill="#FFCF27"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M316.661 279.06C318.616 279.06 320.2 277.476 320.2 275.521C320.2 273.567 318.616 271.982 316.661 271.982C314.706 271.982 313.122 273.567 313.122 275.521C313.122 277.476 314.706 279.06 316.661 279.06Z" fill="#FFCF27"></path>
                                <path d="M27.6415 363.406L68.5371 356.617L91.4104 321.916H128.232L151.323 292.014L192.339 309.71L233.879 290.472L275.364 291.652L316.659 275.521" stroke="#FFCF27" stroke-width="1.76949"></path>
                                <path d="M347.22 329.292H238.811C230.915 329.292 224.513 335.694 224.513 343.591V397.918C224.513 405.815 230.915 412.216 238.811 412.216H347.22C355.117 412.216 361.519 405.815 361.519 397.918V343.591C361.519 335.694 355.117 329.292 347.22 329.292Z" fill="#1B76FF"></path>
                                <path d="M242.486 356.591V347.082H245.827C246.334 347.082 246.792 347.207 247.199 347.456C247.611 347.705 247.937 348.042 248.177 348.468C248.422 348.889 248.544 349.36 248.544 349.881C248.544 350.338 248.454 350.754 248.272 351.13C248.091 351.506 247.842 351.821 247.525 352.074C247.213 352.323 246.857 352.495 246.459 352.59L248.768 356.591H247.451L245.182 352.686H243.627V356.591H242.486ZM243.627 351.545H245.712C246.02 351.545 246.303 351.47 246.561 351.32C246.819 351.166 247.023 350.96 247.172 350.702C247.326 350.44 247.403 350.145 247.403 349.819C247.403 349.489 247.326 349.195 247.172 348.936C247.023 348.674 246.819 348.468 246.561 348.318C246.303 348.164 246.02 348.088 245.712 348.088H243.627V351.545ZM255.348 349.799H256.489V356.591H255.348L255.301 355.443C255.088 355.837 254.794 356.156 254.418 356.401C254.047 356.645 253.603 356.767 253.087 356.767C252.589 356.767 252.122 356.675 251.688 356.489C251.253 356.299 250.868 356.038 250.533 355.708C250.202 355.373 249.944 354.988 249.759 354.553C249.573 354.119 249.48 353.65 249.48 353.147C249.48 352.663 249.571 352.206 249.752 351.775C249.933 351.345 250.184 350.969 250.506 350.648C250.832 350.322 251.208 350.068 251.633 349.887C252.059 349.702 252.516 349.609 253.005 349.609C253.539 349.609 254.008 349.736 254.411 349.989C254.814 350.238 255.14 350.562 255.389 350.96L255.348 349.799ZM253.066 355.66C253.515 355.66 253.902 355.552 254.228 355.334C254.558 355.112 254.812 354.814 254.988 354.438C255.17 354.062 255.26 353.648 255.26 353.195C255.26 352.733 255.17 352.317 254.988 351.945C254.807 351.569 254.551 351.273 254.221 351.056C253.895 350.834 253.51 350.723 253.066 350.723C252.618 350.723 252.211 350.834 251.844 351.056C251.477 351.277 251.185 351.576 250.968 351.952C250.755 352.323 250.648 352.738 250.648 353.195C250.648 353.652 250.759 354.069 250.981 354.445C251.203 354.816 251.497 355.112 251.864 355.334C252.231 355.552 252.632 355.66 253.066 355.66ZM261.365 350.94H259.823L259.817 356.591H258.675L258.682 350.94H257.514V349.799H258.682L258.675 347.666H259.817L259.823 349.799H261.365V350.94ZM265.399 356.767C264.774 356.767 264.203 356.607 263.687 356.285C263.175 355.964 262.766 355.534 262.458 354.995C262.154 354.451 262.003 353.851 262.003 353.195C262.003 352.697 262.091 352.233 262.267 351.803C262.444 351.368 262.686 350.988 262.994 350.662C263.307 350.331 263.669 350.073 264.081 349.887C264.493 349.702 264.932 349.609 265.399 349.609C265.91 349.609 266.379 349.713 266.804 349.921C267.235 350.125 267.601 350.41 267.905 350.777C268.213 351.144 268.441 351.569 268.591 352.054C268.745 352.538 268.801 353.057 268.76 353.609H263.218C263.273 353.994 263.399 354.338 263.599 354.642C263.798 354.94 264.051 355.178 264.359 355.355C264.672 355.531 265.018 355.622 265.399 355.626C265.806 355.626 266.175 355.522 266.506 355.314C266.836 355.101 267.103 354.811 267.307 354.445L268.468 354.716C268.197 355.318 267.787 355.812 267.239 356.197C266.691 356.577 266.078 356.767 265.399 356.767ZM263.184 352.713H267.613C267.576 352.332 267.454 351.986 267.246 351.674C267.038 351.357 266.773 351.103 266.451 350.913C266.13 350.723 265.779 350.628 265.399 350.628C265.018 350.628 264.67 350.72 264.353 350.906C264.036 351.092 263.773 351.343 263.565 351.66C263.361 351.972 263.234 352.323 263.184 352.713Z" fill="white"></path>
                                <path d="M246.775 393.89V389.586H242.471V388.185H246.775V383.881H248.177V388.185H252.48V389.586H248.177V393.89H246.775ZM264.969 395.262C263.748 395.262 262.638 394.967 261.637 394.376C260.646 393.785 259.859 392.994 259.278 392.002C258.696 391.001 258.406 389.905 258.406 388.714H260.407C260.407 389.543 260.612 390.306 261.022 391.001C261.432 391.688 261.98 392.236 262.667 392.646C263.362 393.056 264.13 393.261 264.969 393.261C265.798 393.261 266.556 393.056 267.242 392.646C267.928 392.236 268.477 391.688 268.886 391.001C269.306 390.306 269.516 389.543 269.516 388.714C269.516 387.875 269.315 387.112 268.915 386.426C268.524 385.73 267.967 385.177 267.242 384.767C266.527 384.348 265.674 384.138 264.683 384.138H259.821L261.709 374.873H271.074V376.875H263.324L262.28 382.136L264.611 382.151C265.974 382.17 267.171 382.46 268.2 383.023C269.239 383.585 270.049 384.357 270.631 385.339C271.222 386.312 271.517 387.436 271.517 388.714C271.517 389.61 271.346 390.453 271.003 391.245C270.669 392.036 270.197 392.736 269.587 393.346C268.986 393.947 268.291 394.419 267.499 394.762C266.718 395.096 265.874 395.262 264.969 395.262ZM280.76 395.262C279.588 395.262 278.515 394.995 277.543 394.462C276.58 393.928 275.813 393.213 275.241 392.317C274.669 391.421 274.383 390.425 274.383 389.329C274.383 388.261 274.679 387.289 275.27 386.412C275.861 385.525 276.628 384.839 277.572 384.353C276.79 383.905 276.147 383.295 275.641 382.522C275.136 381.741 274.883 380.883 274.883 379.949C274.883 378.948 275.146 378.037 275.67 377.218C276.204 376.388 276.914 375.731 277.8 375.244C278.696 374.749 279.683 374.501 280.76 374.501C281.837 374.501 282.819 374.749 283.706 375.244C284.602 375.731 285.312 376.388 285.836 377.218C286.37 378.037 286.637 378.948 286.637 379.949C286.637 380.883 286.384 381.741 285.879 382.522C285.383 383.295 284.74 383.905 283.949 384.353C284.912 384.839 285.684 385.525 286.265 386.412C286.856 387.289 287.152 388.261 287.152 389.329C287.152 390.415 286.861 391.411 286.279 392.317C285.707 393.213 284.94 393.928 283.977 394.462C283.015 394.995 281.942 395.262 280.76 395.262ZM280.76 393.261C281.551 393.261 282.266 393.084 282.905 392.732C283.544 392.379 284.054 391.907 284.435 391.316C284.816 390.715 285.007 390.053 285.007 389.329C285.007 388.604 284.816 387.946 284.435 387.355C284.054 386.764 283.544 386.292 282.905 385.94C282.266 385.587 281.551 385.411 280.76 385.411C279.988 385.411 279.278 385.587 278.63 385.94C277.991 386.292 277.476 386.764 277.085 387.355C276.704 387.946 276.514 388.604 276.514 389.329C276.514 390.053 276.704 390.715 277.085 391.316C277.476 391.907 277.991 392.379 278.63 392.732C279.278 393.084 279.988 393.261 280.76 393.261ZM280.76 383.409C281.456 383.409 282.085 383.256 282.648 382.951C283.21 382.637 283.658 382.217 283.992 381.693C284.335 381.169 284.506 380.587 284.506 379.949C284.506 379.31 284.335 378.733 283.992 378.219C283.658 377.694 283.21 377.28 282.648 376.975C282.085 376.66 281.456 376.503 280.76 376.503C280.074 376.503 279.445 376.66 278.873 376.975C278.31 377.28 277.858 377.694 277.514 378.219C277.181 378.733 277.014 379.31 277.014 379.949C277.014 380.587 277.181 381.169 277.514 381.693C277.858 382.217 278.31 382.637 278.873 382.951C279.445 383.256 280.074 383.409 280.76 383.409ZM290.508 394.891L302.061 374.873H304.377L292.824 394.891H290.508ZM292.853 382.694C292.224 382.694 291.652 382.541 291.137 382.236C290.622 381.931 290.208 381.522 289.893 381.007C289.588 380.483 289.436 379.906 289.436 379.277C289.436 378.628 289.588 378.047 289.893 377.532C290.208 377.018 290.622 376.608 291.137 376.303C291.661 375.998 292.233 375.845 292.853 375.845C293.482 375.845 294.054 376.002 294.569 376.317C295.083 376.622 295.493 377.032 295.798 377.547C296.113 378.061 296.27 378.638 296.27 379.277C296.27 379.915 296.113 380.492 295.798 381.007C295.493 381.522 295.079 381.931 294.554 382.236C294.04 382.541 293.472 382.694 292.853 382.694ZM292.853 381.164C293.387 381.164 293.835 380.983 294.197 380.621C294.559 380.249 294.74 379.801 294.74 379.277C294.74 378.743 294.559 378.295 294.197 377.933C293.835 377.561 293.387 377.375 292.853 377.375C292.329 377.375 291.881 377.561 291.509 377.933C291.147 378.295 290.965 378.743 290.965 379.277C290.965 379.801 291.147 380.249 291.509 380.621C291.881 380.983 292.329 381.164 292.853 381.164ZM302.061 393.933C301.432 393.933 300.855 393.775 300.331 393.461C299.816 393.137 299.402 392.717 299.087 392.203C298.782 391.678 298.629 391.111 298.629 390.501C298.629 389.862 298.787 389.286 299.101 388.771C299.416 388.247 299.831 387.832 300.345 387.527C300.87 387.222 301.442 387.069 302.061 387.069C302.7 387.069 303.277 387.227 303.791 387.541C304.306 387.856 304.716 388.275 305.021 388.799C305.326 389.314 305.478 389.881 305.478 390.501C305.478 391.13 305.326 391.707 305.021 392.231C304.716 392.746 304.301 393.161 303.777 393.475C303.262 393.78 302.69 393.933 302.061 393.933ZM302.061 392.403C302.576 392.403 303.019 392.217 303.391 391.845C303.763 391.473 303.949 391.025 303.949 390.501C303.949 389.977 303.763 389.529 303.391 389.157C303.019 388.785 302.576 388.599 302.061 388.599C301.537 388.599 301.084 388.785 300.703 389.157C300.331 389.529 300.145 389.977 300.145 390.501C300.145 391.025 300.331 391.473 300.703 391.845C301.084 392.217 301.537 392.403 302.061 392.403Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M341.407 345.774L344.503 351.135C344.822 351.689 344.822 352.37 344.503 352.923L341.407 358.285C341.088 358.838 340.497 359.178 339.859 359.178H333.668C333.029 359.178 332.439 358.838 332.12 358.285L329.025 352.923C328.706 352.37 328.706 351.689 329.025 351.135L332.12 345.774C332.439 345.22 333.03 344.88 333.668 344.88H339.86C340.498 344.88 341.088 345.22 341.407 345.774Z" stroke="white" stroke-width="1.07239" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M334.976 348.455L338.551 355.604" stroke="white" stroke-width="1.07239" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M120 490C120 481.163 127.163 474 136 474H309.698C318.534 474 325.698 481.163 325.698 490V576.889C325.698 585.725 318.534 592.889 309.698 592.889H136C127.163 592.889 120 585.725 120 576.889V490Z" fill="#101010"></path>
                                <path d="M121 490C121 481.716 127.716 475 136 475H309.698C317.982 475 324.698 481.716 324.698 490V576.889C324.698 585.173 317.982 591.889 309.698 591.889H136C127.716 591.889 121 585.173 121 576.889V490Z" stroke="url(#paint3_linear_2258_11066)" stroke-opacity="0.25" stroke-width="2"></path>
                                <path d="M295.74 550.927H277.481C272.143 550.927 267.816 555.254 267.816 560.591C267.816 565.929 272.143 570.256 277.481 570.256H295.74C301.078 570.256 305.405 565.929 305.405 560.591C305.405 555.254 301.078 550.927 295.74 550.927Z" fill="#2ED98A"></path>
                                <path d="M275.935 559.739C275.993 559.685 276.088 559.685 276.146 559.739L277.782 561.248C277.876 561.335 277.809 561.484 277.676 561.484H274.405C274.272 561.484 274.205 561.335 274.299 561.248L275.935 559.739Z" fill="white"></path>
                                <path d="M279.889 563.365V562.777L281.798 560.831C282.308 560.321 282.563 559.882 282.563 559.516C282.563 559.213 282.47 558.977 282.285 558.807C282.099 558.637 281.873 558.552 281.605 558.552C281.095 558.552 280.724 558.793 280.492 559.277L279.889 558.922C280.059 558.572 280.294 558.306 280.593 558.126C280.897 557.945 281.231 557.855 281.597 557.855C282.05 557.855 282.444 558.005 282.779 558.303C283.114 558.602 283.281 559.004 283.281 559.509C283.281 560.055 282.959 560.65 282.316 561.294L280.933 562.669H283.382V563.365H279.889ZM287.582 562.701C287.216 563.211 286.704 563.466 286.044 563.466C285.385 563.466 284.872 563.211 284.507 562.701C284.141 562.191 283.958 561.51 283.958 560.66C283.958 559.81 284.141 559.13 284.507 558.62C284.872 558.11 285.385 557.855 286.044 557.855C286.704 557.855 287.216 558.11 287.582 558.62C287.948 559.13 288.13 559.81 288.13 560.66C288.13 561.51 287.948 562.191 287.582 562.701ZM285.032 562.214C285.269 562.58 285.606 562.763 286.044 562.763C286.482 562.763 286.82 562.58 287.056 562.214C287.299 561.848 287.42 561.33 287.42 560.66C287.42 559.99 287.299 559.473 287.056 559.107C286.82 558.736 286.482 558.552 286.044 558.552C285.606 558.552 285.269 558.733 285.032 559.099C284.795 559.465 284.677 559.985 284.677 560.66C284.677 561.33 284.795 561.848 285.032 562.214ZM289.178 563.449C289.039 563.449 288.921 563.4 288.823 563.302C288.725 563.205 288.676 563.087 288.676 562.948C288.676 562.809 288.725 562.689 288.823 562.592C288.921 562.494 289.039 562.445 289.178 562.445C289.322 562.445 289.441 562.494 289.534 562.592C289.632 562.689 289.68 562.809 289.68 562.948C289.68 563.087 289.632 563.205 289.534 563.302C289.441 563.4 289.322 563.449 289.178 563.449ZM291.652 557.956H292.27V563.365H291.559V558.729L290.408 559.068L290.23 558.451L291.652 557.956ZM294.522 560.25C294.172 560.25 293.881 560.136 293.649 559.904C293.417 559.672 293.301 559.388 293.301 559.053C293.301 558.723 293.417 558.442 293.649 558.211C293.886 557.974 294.177 557.855 294.522 557.855C294.872 557.855 295.163 557.971 295.395 558.203C295.627 558.435 295.743 558.718 295.743 559.053C295.743 559.388 295.627 559.672 295.395 559.904C295.168 560.136 294.877 560.25 294.522 560.25ZM294.074 559.509C294.192 559.627 294.342 559.686 294.522 559.686C294.702 559.686 294.849 559.625 294.962 559.501C295.081 559.377 295.14 559.228 295.14 559.053C295.14 558.878 295.081 558.731 294.962 558.612C294.849 558.489 294.702 558.427 294.522 558.427C294.342 558.427 294.192 558.489 294.074 558.612C293.961 558.731 293.904 558.878 293.904 559.053C293.904 559.233 293.961 559.385 294.074 559.509ZM293.664 562.599L297.257 558.582L297.636 558.79L294.035 562.816L293.664 562.599ZM297.729 563.109C297.497 563.341 297.206 563.457 296.855 563.457C296.505 563.457 296.214 563.341 295.982 563.109C295.751 562.877 295.635 562.594 295.635 562.259C295.635 561.925 295.751 561.641 295.982 561.409C296.214 561.178 296.505 561.062 296.855 561.062C297.206 561.062 297.497 561.178 297.729 561.409C297.96 561.641 298.076 561.925 298.076 562.259C298.076 562.594 297.96 562.877 297.729 563.109ZM296.407 562.708C296.526 562.826 296.675 562.885 296.855 562.885C297.036 562.885 297.183 562.826 297.296 562.708C297.414 562.584 297.474 562.434 297.474 562.259C297.474 562.084 297.414 561.937 297.296 561.819C297.183 561.695 297.036 561.634 296.855 561.634C296.675 561.634 296.526 561.695 296.407 561.819C296.294 561.937 296.237 562.084 296.237 562.259C296.237 562.434 296.294 562.584 296.407 562.708Z" fill="white"></path>
                                <path xmlns="http://www.w3.org/2000/svg" class="dd" d="M246.199 534.069C247.15 533.999 250.407 529.304 251.067 527.51C252.414 523.849 254.097 515.262 256.209 517.057C258.321 518.852 258.377 526.775 261.229 526.775C264.08 526.775 265.498 525.104 266.448 523.837C267.399 522.57 269.828 521.619 270.778 523.837C271.729 526.055 272.86 523.959 273.282 523.115C273.704 522.27 273.422 519.415 275.308 518.328C277.512 517.057 279.214 522.231 279.742 520.964C280.27 519.697 281.538 516.423 282.171 514.733C282.805 513.044 283.307 510.737 284.98 510.737C287.792 510.737 287.546 511.671 288.286 514.734C289.025 517.796 290.303 521.703 292.309 521.809C294.316 521.915 296.217 521.175 296.956 519.486C297.695 517.796 299.694 509.834 304.446 508.778C308.248 507.933 311.67 517.057 311.67 514.734" stroke="white" stroke-width="0.892688" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M147.258 503.286C147.258 499.019 150.717 495.56 154.984 495.56H167.237C171.505 495.56 174.964 499.019 174.964 503.286V515.539C174.964 519.806 171.505 523.266 167.237 523.266H154.984C150.717 523.266 147.258 519.806 147.258 515.539V503.286Z" fill="white" fill-opacity="0.08"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M164.336 506.516C164.336 505.982 164.769 505.55 165.302 505.55C165.835 505.55 166.268 505.982 166.268 506.516V513.598C166.268 514.132 165.835 514.564 165.302 514.564C164.769 514.564 164.336 514.132 164.336 513.598V506.516ZM160.477 509.736C160.477 509.203 160.909 508.771 161.443 508.771C161.976 508.771 162.408 509.203 162.408 509.736V513.6C162.408 514.133 161.976 514.565 161.443 514.565C160.909 514.565 160.477 514.133 160.477 513.6V509.736ZM157.575 511.347C157.042 511.347 156.61 511.779 156.61 512.313V513.6C156.61 514.134 157.042 514.566 157.575 514.566C158.109 514.566 158.541 514.134 158.541 513.6V512.313C158.541 511.779 158.109 511.347 157.575 511.347Z" fill="white"></path>
                                <path d="M189.203 512.652H187.824L186.204 509.861H184.715V512.652H183.457V504.99H186.522C187.208 504.99 187.788 505.231 188.262 505.713C188.744 506.18 188.984 506.76 188.984 507.453C188.984 507.942 188.842 508.391 188.558 508.799C188.28 509.201 187.915 509.493 187.463 509.675L189.203 512.652ZM186.522 506.172H184.715V508.734H186.522C186.857 508.734 187.142 508.61 187.375 508.362C187.609 508.113 187.726 507.811 187.726 507.453C187.726 507.095 187.609 506.793 187.375 506.545C187.142 506.296 186.857 506.172 186.522 506.172ZM196.629 511.645C195.863 512.412 194.925 512.795 193.816 512.795C192.707 512.795 191.765 512.412 190.992 511.645C190.226 510.872 189.843 509.93 189.843 508.821C189.843 507.712 190.226 506.774 190.992 506.008C191.765 505.235 192.707 504.848 193.816 504.848C194.925 504.848 195.863 505.235 196.629 506.008C197.403 506.774 197.789 507.712 197.789 508.821C197.789 509.93 197.403 510.872 196.629 511.645ZM191.878 510.792C192.411 511.31 193.057 511.569 193.816 511.569C194.582 511.569 195.224 511.31 195.742 510.792C196.268 510.266 196.531 509.609 196.531 508.821C196.531 508.033 196.268 507.38 195.742 506.862C195.224 506.337 194.582 506.074 193.816 506.074C193.05 506.074 192.404 506.337 191.878 506.862C191.36 507.38 191.101 508.033 191.101 508.821C191.101 509.602 191.36 510.259 191.878 510.792ZM199.047 512.652V504.99H200.306V512.652H199.047Z" fill="white"></path>
                                <path d="M153.835 547.131C154.963 547.343 155.886 547.829 156.605 548.591C157.324 549.352 157.684 550.318 157.684 551.488C157.684 552.926 157.19 554.061 156.203 554.892C155.216 555.724 154.018 556.14 152.608 556.14C151.48 556.14 150.48 555.886 149.605 555.379C148.731 554.857 148.111 554.11 147.744 553.137L149.394 552.164C149.831 553.532 150.902 554.216 152.608 554.216C153.525 554.216 154.272 553.976 154.85 553.497C155.428 553.017 155.717 552.348 155.717 551.488C155.717 550.628 155.428 549.958 154.85 549.479C154.272 548.985 153.525 548.739 152.608 548.739H152.101L151.318 547.533L154.744 542.902H148.167V541.062H157.049V542.796L153.835 547.131ZM162.388 541.062H164.08V555.865H162.134V543.177L158.983 544.107L158.497 542.416L162.388 541.062ZM166.5 555.865V554.258L171.723 548.929C173.119 547.533 173.817 546.335 173.817 545.334C173.817 544.502 173.563 543.854 173.056 543.388C172.548 542.923 171.928 542.691 171.195 542.691C169.799 542.691 168.784 543.353 168.15 544.678L166.5 543.706C166.965 542.747 167.607 542.021 168.424 541.527C169.256 541.034 170.173 540.787 171.174 540.787C172.414 540.787 173.493 541.196 174.409 542.014C175.325 542.832 175.784 543.931 175.784 545.313C175.784 546.807 174.903 548.436 173.14 550.198L169.355 553.962H176.059V555.865H166.5ZM181.188 547.343C180.23 547.343 179.433 547.026 178.799 546.391C178.164 545.757 177.847 544.981 177.847 544.065C177.847 543.163 178.164 542.394 178.799 541.76C179.447 541.112 180.244 540.787 181.188 540.787C182.147 540.787 182.944 541.104 183.578 541.739C184.212 542.373 184.53 543.149 184.53 544.065C184.53 544.981 184.212 545.757 183.578 546.391C182.958 547.026 182.161 547.343 181.188 547.343ZM179.962 545.313C180.286 545.637 180.695 545.799 181.188 545.799C181.682 545.799 182.084 545.63 182.394 545.292C182.718 544.953 182.88 544.544 182.88 544.065C182.88 543.586 182.718 543.184 182.394 542.86C182.084 542.521 181.682 542.352 181.188 542.352C180.695 542.352 180.286 542.521 179.962 542.86C179.652 543.184 179.497 543.586 179.497 544.065C179.497 544.559 179.652 544.974 179.962 545.313ZM178.841 553.772L188.675 542.775L189.711 543.346L179.856 554.364L178.841 553.772ZM189.965 555.167C189.33 555.802 188.534 556.119 187.575 556.119C186.616 556.119 185.82 555.802 185.185 555.167C184.551 554.533 184.234 553.758 184.234 552.841C184.234 551.925 184.551 551.149 185.185 550.515C185.82 549.881 186.616 549.563 187.575 549.563C188.534 549.563 189.33 549.881 189.965 550.515C190.599 551.149 190.916 551.925 190.916 552.841C190.916 553.758 190.599 554.533 189.965 555.167ZM186.348 554.068C186.673 554.392 187.081 554.554 187.575 554.554C188.068 554.554 188.47 554.392 188.78 554.068C189.105 553.729 189.267 553.321 189.267 552.841C189.267 552.362 189.105 551.96 188.78 551.636C188.47 551.297 188.068 551.128 187.575 551.128C187.081 551.128 186.673 551.297 186.348 551.636C186.038 551.96 185.883 552.362 185.883 552.841C185.883 553.321 186.038 553.729 186.348 554.068Z" fill="white"></path>
                                <path d="M150.927 570.576L149.713 568.505H148.263V570.576H147.744V565.396H149.817C150.246 565.396 150.611 565.548 150.912 565.854C151.218 566.155 151.371 566.52 151.371 566.949C151.371 567.3 151.265 567.613 151.053 567.889C150.846 568.161 150.579 568.344 150.254 568.438L151.519 570.576H150.927ZM148.263 565.884V568.016H149.817C150.103 568.016 150.347 567.912 150.55 567.704C150.752 567.492 150.853 567.241 150.853 566.949C150.853 566.653 150.752 566.402 150.55 566.194C150.347 565.987 150.103 565.884 149.817 565.884H148.263ZM153.71 566.787C154.258 566.787 154.699 566.981 155.035 567.371C155.375 567.756 155.545 568.214 155.545 568.742C155.545 568.796 155.54 568.871 155.531 568.97H152.281C152.331 569.345 152.489 569.645 152.755 569.867C153.026 570.084 153.359 570.191 153.754 570.191C154.035 570.191 154.277 570.135 154.48 570.021C154.687 569.903 154.842 569.75 154.946 569.562L155.375 569.815C155.212 570.076 154.99 570.283 154.709 570.436C154.428 570.589 154.107 570.665 153.747 570.665C153.165 570.665 152.691 570.482 152.326 570.117C151.961 569.752 151.778 569.289 151.778 568.727C151.778 568.174 151.958 567.712 152.318 567.342C152.679 566.972 153.142 566.787 153.71 566.787ZM153.71 567.26C153.325 567.26 153.002 567.376 152.74 567.608C152.484 567.835 152.331 568.131 152.281 568.496H155.042C154.993 568.107 154.842 567.803 154.591 567.586C154.339 567.369 154.045 567.26 153.71 567.26ZM158.175 567.349H157.11V569.592C157.11 569.794 157.149 569.941 157.228 570.029C157.307 570.113 157.425 570.157 157.583 570.162C157.741 570.162 157.939 570.157 158.175 570.147V570.576C157.657 570.655 157.267 570.619 157.006 570.466C156.749 570.313 156.621 570.021 156.621 569.592V567.349H155.844V566.875H156.621V565.987L157.11 565.839V566.875H158.175V567.349ZM161.595 566.875H162.083V570.576H161.595V570C161.319 570.444 160.904 570.665 160.351 570.665C159.902 570.665 159.547 570.529 159.286 570.258C159.029 569.982 158.901 569.612 158.901 569.148V566.875H159.389V569.148C159.389 569.478 159.476 569.735 159.648 569.917C159.826 570.1 160.075 570.191 160.396 570.191C160.751 570.191 161.04 570.08 161.262 569.858C161.484 569.631 161.595 569.283 161.595 568.815V566.875ZM163.605 567.49C163.832 567.041 164.222 566.816 164.775 566.816V567.29C164.439 567.29 164.16 567.389 163.938 567.586C163.716 567.783 163.605 568.094 163.605 568.519V570.576H163.117V566.875H163.605V567.49ZM167.176 566.787C167.625 566.787 167.978 566.925 168.235 567.201C168.496 567.472 168.627 567.841 168.627 568.305V570.576H168.138V568.305C168.138 567.974 168.05 567.717 167.872 567.534C167.699 567.352 167.453 567.26 167.132 567.26C166.776 567.26 166.488 567.375 166.266 567.602C166.044 567.824 165.933 568.169 165.933 568.638V570.576H165.444V566.875H165.933V567.453C166.209 567.009 166.624 566.787 167.176 566.787ZM174.523 570.11C174.148 570.48 173.689 570.665 173.146 570.665C172.604 570.665 172.142 570.48 171.762 570.11C171.387 569.735 171.2 569.275 171.2 568.727C171.2 568.179 171.387 567.719 171.762 567.349C172.142 566.974 172.604 566.787 173.146 566.787C173.689 566.787 174.148 566.974 174.523 567.349C174.903 567.719 175.093 568.179 175.093 568.727C175.093 569.275 174.903 569.735 174.523 570.11ZM172.11 569.769C172.391 570.051 172.737 570.191 173.146 570.191C173.556 570.191 173.901 570.051 174.183 569.769C174.464 569.483 174.604 569.136 174.604 568.727C174.604 568.317 174.464 567.971 174.183 567.69C173.901 567.403 173.556 567.26 173.146 567.26C172.737 567.26 172.391 567.403 172.11 567.69C171.829 567.971 171.688 568.317 171.688 568.727C171.688 569.136 171.829 569.483 172.11 569.769ZM177.642 566.787C178.091 566.787 178.444 566.925 178.701 567.201C178.962 567.472 179.093 567.841 179.093 568.305V570.576H178.605V568.305C178.605 567.974 178.516 567.717 178.338 567.534C178.165 567.352 177.919 567.26 177.598 567.26C177.243 567.26 176.954 567.375 176.732 567.602C176.51 567.824 176.399 568.169 176.399 568.638V570.576H175.91V566.875H176.399V567.453C176.675 567.009 177.09 566.787 177.642 566.787ZM181.962 565.396H182.48V570.576H181.962V565.396ZM185.326 566.787C185.775 566.787 186.128 566.925 186.384 567.201C186.646 567.472 186.777 567.841 186.777 568.305V570.576H186.288V568.305C186.288 567.974 186.199 567.717 186.022 567.534C185.849 567.352 185.602 567.26 185.281 567.26C184.926 567.26 184.637 567.375 184.415 567.602C184.193 567.824 184.082 568.169 184.082 568.638V570.576H183.594V566.875H184.082V567.453C184.359 567.009 184.773 566.787 185.326 566.787ZM190.349 566.875H190.868L189.35 570.576H188.758L187.241 566.875H187.759L189.054 570.065L190.349 566.875ZM193.023 566.787C193.571 566.787 194.013 566.981 194.348 567.371C194.689 567.756 194.859 568.214 194.859 568.742C194.859 568.796 194.854 568.871 194.844 568.97H191.595C191.644 569.345 191.802 569.645 192.068 569.867C192.34 570.084 192.673 570.191 193.068 570.191C193.349 570.191 193.591 570.135 193.793 570.021C194 569.903 194.156 569.75 194.259 569.562L194.689 569.815C194.526 570.076 194.304 570.283 194.022 570.436C193.741 570.589 193.42 570.665 193.06 570.665C192.478 570.665 192.004 570.482 191.639 570.117C191.274 569.752 191.091 569.289 191.091 568.727C191.091 568.174 191.271 567.712 191.632 567.342C191.992 566.972 192.456 566.787 193.023 566.787ZM193.023 567.26C192.638 567.26 192.315 567.376 192.054 567.608C191.797 567.835 191.644 568.131 191.595 568.496H194.355C194.306 568.107 194.156 567.803 193.904 567.586C193.652 567.369 193.359 567.26 193.023 567.26ZM195.876 567.845C195.876 568.013 195.95 568.146 196.098 568.245C196.246 568.343 196.426 568.42 196.638 568.474C196.851 568.528 197.063 568.59 197.275 568.659C197.487 568.723 197.667 568.834 197.815 568.992C197.963 569.145 198.037 569.348 198.037 569.599C198.037 569.915 197.912 570.173 197.66 570.37C197.413 570.567 197.092 570.665 196.698 570.665C196.342 570.665 196.039 570.586 195.787 570.428C195.541 570.27 195.368 570.066 195.269 569.815L195.684 569.57C195.753 569.762 195.876 569.916 196.054 570.029C196.236 570.138 196.451 570.191 196.698 570.191C196.939 570.191 197.142 570.145 197.305 570.052C197.467 569.953 197.549 569.801 197.549 569.599C197.549 569.431 197.475 569.298 197.327 569.199C197.179 569.101 196.999 569.024 196.786 568.97C196.574 568.916 196.362 568.857 196.15 568.792C195.938 568.723 195.758 568.612 195.61 568.459C195.462 568.301 195.388 568.097 195.388 567.845C195.388 567.544 195.506 567.293 195.743 567.091C195.985 566.889 196.288 566.787 196.653 566.787C196.954 566.787 197.218 566.857 197.445 566.995C197.672 567.128 197.84 567.31 197.949 567.542L197.541 567.779C197.398 567.434 197.102 567.26 196.653 567.26C196.441 567.26 196.259 567.313 196.106 567.417C195.953 567.515 195.876 567.658 195.876 567.845ZM200.669 567.349H199.603V569.592C199.603 569.794 199.643 569.941 199.722 570.029C199.801 570.113 199.919 570.157 200.077 570.162C200.235 570.162 200.432 570.157 200.669 570.147V570.576C200.151 570.655 199.761 570.619 199.5 570.466C199.243 570.313 199.115 570.021 199.115 569.592V567.349H198.338V566.875H199.115V565.987L199.603 565.839V566.875H200.669V567.349ZM205.428 566.787C205.843 566.787 206.176 566.92 206.428 567.186C206.684 567.453 206.812 567.814 206.812 568.268V570.576H206.324V568.268C206.324 567.947 206.24 567.699 206.072 567.527C205.909 567.349 205.692 567.26 205.421 567.26C205.115 567.26 204.866 567.364 204.673 567.571C204.486 567.773 204.392 568.092 204.392 568.526V570.576H203.904V568.268C203.904 567.942 203.825 567.692 203.667 567.519C203.514 567.347 203.304 567.26 203.038 567.26C202.742 567.26 202.49 567.364 202.283 567.571C202.075 567.778 201.972 568.097 201.972 568.526V570.576H201.483V566.875H201.972V567.417C202.238 566.997 202.616 566.787 203.104 566.787C203.637 566.787 204.012 567.012 204.229 567.461C204.496 567.012 204.895 566.787 205.428 566.787ZM209.467 566.787C210.015 566.787 210.456 566.981 210.792 567.371C211.132 567.756 211.303 568.214 211.303 568.742C211.303 568.796 211.298 568.871 211.288 568.97H208.038C208.088 569.345 208.246 569.645 208.512 569.867C208.784 570.084 209.117 570.191 209.511 570.191C209.793 570.191 210.034 570.135 210.237 570.021C210.444 569.903 210.599 569.75 210.703 569.562L211.132 569.815C210.969 570.076 210.747 570.283 210.466 570.436C210.185 570.589 209.864 570.665 209.504 570.665C208.922 570.665 208.448 570.482 208.083 570.117C207.718 569.752 207.535 569.289 207.535 568.727C207.535 568.174 207.715 567.712 208.075 567.342C208.436 566.972 208.9 566.787 209.467 566.787ZM209.467 567.26C209.082 567.26 208.759 567.376 208.497 567.608C208.241 567.835 208.088 568.131 208.038 568.496H210.799C210.75 568.107 210.599 567.803 210.348 567.586C210.096 567.369 209.803 567.26 209.467 567.26ZM213.812 566.787C214.261 566.787 214.613 566.925 214.87 567.201C215.132 567.472 215.262 567.841 215.262 568.305V570.576H214.774V568.305C214.774 567.974 214.685 567.717 214.507 567.534C214.335 567.352 214.088 567.26 213.767 567.26C213.412 567.26 213.123 567.375 212.901 567.602C212.679 567.824 212.568 568.169 212.568 568.638V570.576H212.08V566.875H212.568V567.453C212.844 567.009 213.259 566.787 213.812 566.787ZM218.168 567.349H217.102V569.592C217.102 569.794 217.142 569.941 217.221 570.029C217.3 570.113 217.418 570.157 217.576 570.162C217.734 570.162 217.931 570.157 218.168 570.147V570.576C217.65 570.655 217.26 570.619 216.999 570.466C216.742 570.313 216.614 570.021 216.614 569.592V567.349H215.837V566.875H216.614V565.987L217.102 565.839V566.875H218.168V567.349Z" fill="white"></path>
                                <path d="M217.47 174L209.43 165.87V163.8H215.85C216.95 163.8 217.82 163.51 218.46 162.93C219.12 162.35 219.53 161.55 219.69 160.53H209.43V158.73H219.72C219.62 157.71 219.27 156.91 218.67 156.33C218.07 155.75 217.18 155.46 216 155.46H209.43V153.42H225.03V155.22H220.74C221.18 155.68 221.51 156.21 221.73 156.81C221.95 157.41 222.08 158.05 222.12 158.73H225.03V160.53H222.09C221.95 161.57 221.63 162.5 221.13 163.32C220.65 164.12 219.99 164.75 219.15 165.21C218.31 165.65 217.28 165.87 216.06 165.87H212.76L220.77 174H217.47ZM235.331 174C235.331 171.768 235.619 169.62 236.195 167.556C236.771 165.492 237.515 163.536 238.427 161.688C239.363 159.84 240.383 158.124 241.487 156.54C242.591 154.956 243.671 153.528 244.727 152.256H231.515V149.304H248.903V151.284C248.015 152.316 247.091 153.468 246.131 154.74C245.195 155.988 244.295 157.32 243.431 158.736C242.567 160.128 241.787 161.58 241.091 163.092C240.395 164.604 239.843 166.14 239.435 167.7C239.027 169.236 238.823 170.772 238.823 172.308V174H235.331ZM260.341 174.432C258.301 174.432 256.645 174.108 255.373 173.46C254.101 172.812 253.165 171.948 252.565 170.868C251.989 169.788 251.701 168.588 251.701 167.268C251.701 165.924 252.037 164.736 252.709 163.704C253.381 162.672 254.437 161.88 255.877 161.328C254.725 160.728 253.849 159.936 253.249 158.952C252.673 157.968 252.385 156.876 252.385 155.676C252.385 154.404 252.673 153.264 253.249 152.256C253.849 151.224 254.737 150.408 255.913 149.808C257.113 149.184 258.589 148.872 260.341 148.872C262.093 148.872 263.557 149.184 264.733 149.808C265.909 150.408 266.797 151.224 267.397 152.256C267.997 153.264 268.297 154.404 268.297 155.676C268.297 156.876 267.997 157.968 267.397 158.952C266.797 159.936 265.921 160.728 264.769 161.328C266.233 161.88 267.289 162.672 267.937 163.704C268.609 164.736 268.945 165.924 268.945 167.268C268.945 168.588 268.645 169.788 268.045 170.868C267.469 171.948 266.545 172.812 265.273 173.46C264.025 174.108 262.381 174.432 260.341 174.432ZM260.341 171.804C262.093 171.804 263.413 171.396 264.301 170.58C265.189 169.764 265.633 168.648 265.633 167.232C265.633 165.84 265.189 164.736 264.301 163.92C263.413 163.104 262.093 162.696 260.341 162.696C258.589 162.696 257.257 163.104 256.345 163.92C255.457 164.736 255.013 165.84 255.013 167.232C255.013 168.648 255.457 169.764 256.345 170.58C257.257 171.396 258.589 171.804 260.341 171.804ZM260.341 160.068C261.805 160.068 262.957 159.696 263.797 158.952C264.637 158.184 265.057 157.116 265.057 155.748C265.057 154.404 264.637 153.36 263.797 152.616C262.957 151.872 261.805 151.5 260.341 151.5C258.877 151.5 257.725 151.872 256.885 152.616C256.045 153.36 255.625 154.404 255.625 155.748C255.625 157.116 256.045 158.184 256.885 158.952C257.725 159.696 258.877 160.068 260.341 160.068ZM281.481 174.432C280.065 174.432 278.793 174.228 277.665 173.82C276.561 173.412 275.613 172.752 274.821 171.84C274.053 170.928 273.465 169.704 273.057 168.168C272.649 166.608 272.445 164.676 272.445 162.372C272.445 159.828 272.649 157.704 273.057 156C273.465 154.272 274.041 152.892 274.785 151.86C275.553 150.804 276.489 150.048 277.593 149.592C278.721 149.112 279.993 148.872 281.409 148.872C283.185 148.872 284.613 149.208 285.693 149.88C286.797 150.552 287.601 151.464 288.105 152.616C288.609 153.744 288.861 155.04 288.861 156.504H285.621C285.621 155.4 285.465 154.476 285.153 153.732C284.841 152.988 284.349 152.436 283.677 152.076C283.029 151.716 282.213 151.536 281.229 151.536C279.789 151.536 278.661 151.92 277.845 152.688C277.053 153.432 276.501 154.524 276.189 155.964C275.901 157.404 275.745 159.12 275.721 161.112C276.057 160.56 276.525 160.056 277.125 159.6C277.749 159.144 278.481 158.784 279.321 158.52C280.161 158.232 281.049 158.088 281.985 158.088C283.761 158.088 285.225 158.448 286.377 159.168C287.529 159.864 288.381 160.824 288.933 162.048C289.485 163.272 289.761 164.64 289.761 166.152C289.761 167.808 289.401 169.26 288.681 170.508C287.961 171.756 286.977 172.728 285.729 173.424C284.481 174.096 283.065 174.432 281.481 174.432ZM281.265 171.768C282.441 171.768 283.413 171.516 284.181 171.012C284.949 170.484 285.513 169.8 285.873 168.96C286.257 168.096 286.449 167.148 286.449 166.116C286.449 165.132 286.269 164.232 285.909 163.416C285.549 162.6 284.985 161.952 284.217 161.472C283.473 160.968 282.513 160.716 281.337 160.716C280.161 160.716 279.177 160.968 278.385 161.472C277.593 161.976 277.005 162.648 276.621 163.488C276.237 164.304 276.045 165.24 276.045 166.296C276.045 167.28 276.237 168.192 276.621 169.032C277.005 169.872 277.581 170.544 278.349 171.048C279.117 171.528 280.089 171.768 281.265 171.768ZM294.414 174V149.304H297.834V162.372L310.398 149.304H314.646L305.25 159.168L314.97 174H310.902L302.874 161.616L297.834 166.368V174H294.414Z" fill="white"></path>
                            </g>
                            <defs>
                                <filter id="filter0_f_2258_11066" x="112.414" y="107.101" width="81.619" height="81.6194" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                    <feGaussianBlur stdDeviation="11.0296" result="effect1_foregroundBlur_2258_11066"></feGaussianBlur>
                                </filter>
                                <linearGradient id="paint0_linear_2258_11066" x1="99.6271" y1="27.1962" x2="215.187" y2="454.711" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint1_linear_2258_11066" x1="388.938" y1="83.6159" x2="451.305" y2="170.171" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint2_linear_2258_11066" x1="0.937503" y1="233.624" x2="97.038" y2="419.434" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="paint3_linear_2258_11066" x1="120" y1="477.269" x2="177.479" y2="581.502" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white"></stop>
                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                </linearGradient>
                                <clipPath id="clip0_2258_11066">
                                    <rect width="564" height="613" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
 const fadeElements = document.querySelectorAll(".fade-up");

const observer_about_fadeup = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
            entry.target.classList.remove("show"); // Remove class when out of view
        }
    });
}, { threshold: 0.2 });

fadeElements.forEach(el => observer_about_fadeup.observe(el));

});


</script>

<!-- Include footer -->
<?php include_once('partials/footer.php'); ?>
