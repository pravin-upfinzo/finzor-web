<?php
    require_once __DIR__ . '/../routes/config/constant.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo (isset($page_title) && $page_title != '') ? $page_title : 'Finzor - The Zor of Fintech Innovations'; ?></title>
    <?php echo isset($meta_lines) ? $meta_lines . "\n" : ''; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= BASE_URL; ?>assets/images/finzor-fav.png" type="image/png">
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.15.10/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.9/codemirror.min.css"> -->
    <?php
        // Include page-header-specific JS
        if (isset($pageHeaderScripts)) {
            echo $pageHeaderScripts;
        }
       
    ?>

    <style>
        #subsEmailError{
            font-size: 11px;
            color: red;
            margin-left: 15px;
        }

        .subscribe .subscribe-title{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .button-loader {
            display: none;
            width: 18px;
            height: 18px;
            padding: 2px;
            aspect-ratio: 1;
            border-radius: 50%;
            background: #11eac9;
                margin-right:5px;
            --_m: 
                conic-gradient(#0000 10%,#000),
                linear-gradient(#000 0 0) content-box;
            -webkit-mask: var(--_m);
                    mask: var(--_m);
            -webkit-mask-composite: source-out;
                    mask-composite: subtract;
            animation: l3 1s infinite linear;
        }
        @keyframes l3 {to{transform: rotate(1turn)}}

        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(50%); /* Change color (adjust as needed) */
            opacity: 1;
            position: relative;
            left: -10px; 
            top: 0px; 
            cursor:pointer
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            filter: invert(50%); /* Change color (adjust as needed) */
            opacity: 1;
            position: relative;
            left: -10px; 
            top: 0px; 
            cursor:pointer
        }
    </style>

    <?php
    // Include page-specific CSS
    if (isset($pageStyles)) {
        echo $pageStyles;
    }
    ?>
</head>

<body>
    <span id="page-loader-span"><div id="page-loader"></div></span>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= BASE_URL; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" viewBox="0 0 120 40" fill="none">
                        <path d="M117.062 30.2616H113.239L110.065 24.7143H107.902V30.2616H104.344V14.4773H111.196C114.754 14.4773 116.942 16.4165 116.942 19.5737C116.942 21.8511 115.74 23.5877 113.648 24.3319V24.3547L117.062 30.2623L117.062 30.2616ZM110.763 21.6699C112.47 21.6699 113.383 20.9258 113.383 19.5502C113.383 18.1746 112.517 17.5204 110.763 17.5204H107.902V21.6693H110.763V21.6699Z" fill="#2D4949"></path>
                        <path d="M38.1836 14.4766H49.0263V17.5431H41.7415V21.3988H48.5213V24.3304H41.7415V30.2609H38.1836V14.4766Z" fill="#2D4949"></path>
                        <path d="M51.5 14.4766H55.0579V30.2609H51.5V14.4766Z" fill="#2D4949"></path>
                        <path d="M58.3984 14.4766H62.0529L67.7503 24.511H67.7986V14.4766H71.3565V30.2609H67.702L62.0046 20.2265H61.9564V30.2609H58.3984V14.4766Z" fill="#2D4949"></path>
                        <path d="M73.8561 27.5105L81.7418 17.5888V17.5438H74.0962V14.4773H86.1891V17.2285L78.3033 27.1501V27.1951H86.165V30.2616H73.8555V27.5105H73.8561Z" fill="#2D4949"></path>
                        <path d="M94.795 13.8049C90.3268 13.8049 86.6914 17.6405 86.6914 22.3604C86.6914 26.559 89.5658 30.0536 93.3429 30.775V27.0394C91.4785 26.3952 90.1293 24.5385 90.1293 22.3597C90.1293 19.6455 92.2217 17.4351 94.7957 17.4351C97.3696 17.4351 99.4576 19.6455 99.4576 22.3597C99.4576 24.5385 98.1084 26.3946 96.244 27.0394V30.775C100.021 30.0529 102.895 26.5583 102.895 22.3604C102.895 17.6405 99.2607 13.8049 94.7963 13.8049H94.795Z" fill="#2D4949"></path>
                        <path d="M94.7933 24.6137C95.9713 24.6137 96.9264 23.6049 96.9264 22.3605C96.9264 21.116 95.9713 20.1072 94.7933 20.1072C93.6152 20.1072 92.6602 21.116 92.6602 22.3605C92.6602 23.6049 93.6152 24.6137 94.7933 24.6137Z" fill="#2D4949"></path>
                        <path d="M22.6948 24.7437L20.5439 28.502C20.5439 28.502 20.5401 28.5087 20.5382 28.5114C20.5216 28.5409 20.5058 28.5705 20.488 28.6C20.488 28.6 20.488 28.6007 20.488 28.6013C19.962 29.4918 19.0263 30.0849 17.9591 30.0849H10.3694L7.08653 35.8215L7.0319 35.9174C6.19276 37.3427 4.70442 38.2982 3.00391 38.323L10.7734 24.7443H22.6954L22.6948 24.7437Z" fill="#2D4949"></path>
                        <path d="M23.9545 22.5435L23.0385 24.1445H11.1172L11.4716 23.5245L11.5098 23.4581C11.835 22.9092 12.4137 22.5441 13.0724 22.5441H23.9539L23.9545 22.5435Z" fill="#2D4949"></path>
                        <path d="M31.8418 8.75684L26.2283 18.5658C26.213 18.5926 26.1984 18.6201 26.1825 18.647C25.6585 19.5461 24.7177 20.146 23.6442 20.146H13.4023L17.6546 12.7158C19.0241 10.3418 21.4977 8.75684 24.3213 8.75684H31.8412H31.8418Z" fill="#2D4949"></path>
                        <path d="M35.4469 2.46265L35.4196 2.51029C34.038 4.82261 31.5974 6.35924 28.817 6.35924H23.0447C20.2332 6.35924 17.7685 7.93077 16.3957 10.288L5.06641 30.0851V23.9312C5.07403 22.9736 5.33193 22.0785 5.77469 21.3155L5.78168 21.3035L12.8537 8.94467C15.0605 5.0615 19.0859 2.46265 23.6856 2.46265H35.4475H35.4469Z" fill="#2D4949"></path>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand-mobile" href="<?= BASE_URL; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="120" height="40" viewBox="0 0 120 40" fill="none">
                                <path d="M117.062 30.2616H113.239L110.065 24.7143H107.902V30.2616H104.344V14.4773H111.196C114.754 14.4773 116.942 16.4165 116.942 19.5737C116.942 21.8511 115.74 23.5877 113.648 24.3319V24.3547L117.062 30.2623L117.062 30.2616ZM110.763 21.6699C112.47 21.6699 113.383 20.9258 113.383 19.5502C113.383 18.1746 112.517 17.5204 110.763 17.5204H107.902V21.6693H110.763V21.6699Z" fill="#2D4949"></path>
                                <path d="M38.1836 14.4766H49.0263V17.5431H41.7415V21.3988H48.5213V24.3304H41.7415V30.2609H38.1836V14.4766Z" fill="#2D4949"></path>
                                <path d="M51.5 14.4766H55.0579V30.2609H51.5V14.4766Z" fill="#2D4949"></path>
                                <path d="M58.3984 14.4766H62.0529L67.7503 24.511H67.7986V14.4766H71.3565V30.2609H67.702L62.0046 20.2265H61.9564V30.2609H58.3984V14.4766Z" fill="#2D4949"></path>
                                <path d="M73.8561 27.5105L81.7418 17.5888V17.5438H74.0962V14.4773H86.1891V17.2285L78.3033 27.1501V27.1951H86.165V30.2616H73.8555V27.5105H73.8561Z" fill="#2D4949"></path>
                                <path d="M94.795 13.8049C90.3268 13.8049 86.6914 17.6405 86.6914 22.3604C86.6914 26.559 89.5658 30.0536 93.3429 30.775V27.0394C91.4785 26.3952 90.1293 24.5385 90.1293 22.3597C90.1293 19.6455 92.2217 17.4351 94.7957 17.4351C97.3696 17.4351 99.4576 19.6455 99.4576 22.3597C99.4576 24.5385 98.1084 26.3946 96.244 27.0394V30.775C100.021 30.0529 102.895 26.5583 102.895 22.3604C102.895 17.6405 99.2607 13.8049 94.7963 13.8049H94.795Z" fill="#2D4949"></path>
                                <path d="M94.7933 24.6137C95.9713 24.6137 96.9264 23.6049 96.9264 22.3605C96.9264 21.116 95.9713 20.1072 94.7933 20.1072C93.6152 20.1072 92.6602 21.116 92.6602 22.3605C92.6602 23.6049 93.6152 24.6137 94.7933 24.6137Z" fill="#2D4949"></path>
                                <path d="M22.6948 24.7437L20.5439 28.502C20.5439 28.502 20.5401 28.5087 20.5382 28.5114C20.5216 28.5409 20.5058 28.5705 20.488 28.6C20.488 28.6 20.488 28.6007 20.488 28.6013C19.962 29.4918 19.0263 30.0849 17.9591 30.0849H10.3694L7.08653 35.8215L7.0319 35.9174C6.19276 37.3427 4.70442 38.2982 3.00391 38.323L10.7734 24.7443H22.6954L22.6948 24.7437Z" fill="#2D4949"></path>
                                <path d="M23.9545 22.5435L23.0385 24.1445H11.1172L11.4716 23.5245L11.5098 23.4581C11.835 22.9092 12.4137 22.5441 13.0724 22.5441H23.9539L23.9545 22.5435Z" fill="#2D4949"></path>
                                <path d="M31.8418 8.75684L26.2283 18.5658C26.213 18.5926 26.1984 18.6201 26.1825 18.647C25.6585 19.5461 24.7177 20.146 23.6442 20.146H13.4023L17.6546 12.7158C19.0241 10.3418 21.4977 8.75684 24.3213 8.75684H31.8412H31.8418Z" fill="#2D4949"></path>
                                <path d="M35.4469 2.46265L35.4196 2.51029C34.038 4.82261 31.5974 6.35924 28.817 6.35924H23.0447C20.2332 6.35924 17.7685 7.93077 16.3957 10.288L5.06641 30.0851V23.9312C5.07403 22.9736 5.33193 22.0785 5.77469 21.3155L5.78168 21.3035L12.8537 8.94467C15.0605 5.0615 19.0859 2.46265 23.6856 2.46265H35.4475H35.4469Z" fill="#2D4949"></path>
                            </svg>
                        </a>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                            <li class="nav-item">
                                <a class="nav-link list-menu list-menu-home" href="<?= BASE_URL; ?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link list-menu list-menu-service" href="#" id="menu1" role="button">What we offer <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" width="15px"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path></svg></a>
                                <div class="submenu-wrapper">
                                <ul class="submenu">
                                <div class="upward-arrow"></div>
                                    <li id="finbankz">
                                    <a href="<?= BASE_URL; ?>finbankz">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                            <svg class="normal__svg" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.833 11.4253C29.833 9.83036 29.1898 8.85293 27.8588 8.11221L22.3798 5.06309C19.5089 3.46537 18.0734 2.6665 16.4997 2.66651C14.9259 2.66651 13.4905 3.46537 10.6195 5.06309L5.14047 8.11221C3.80954 8.85293 3.16634 9.83037 3.16634 11.4253C3.16634 11.8577 3.16634 12.074 3.21354 12.2518C3.46168 13.1858 4.30807 13.3332 5.12541 13.3332L27.874 13.3332C28.6913 13.3332 29.5376 13.1858 29.7858 12.2518C29.833 12.074 29.833 11.8577 29.833 11.4253Z" stroke="#E7E7E7" stroke-width="2"></path>
                                                <path d="M16.5059 9.3335L16.4939 9.3335" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M27.167 13.3335L27.167 24.6668M21.8337 13.3335L21.8337 24.6668" stroke="#E7E7E7" stroke-width="2"></path>
                                                <path d="M11.167 13.3335L11.167 24.6668M5.83366 13.3335L5.83366 24.6668" stroke="#E7E7E7" stroke-width="2"></path>
                                                <path d="M7.16634 24.6665L25.833 24.6665C28.0421 24.6665 29.833 26.4573 29.833 28.6665C29.833 29.0346 29.5345 29.3332 29.1663 29.3332L3.83301 29.3332C3.46487 29.3332 3.16634 29.0346 3.16634 28.6665C3.16634 26.4573 4.95714 24.6665 7.16634 24.6665Z" stroke="#E7E7E7" stroke-width="2"></path>
                                            </svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>FinbankZ</h3>
                                            <p>Core Banking and Digital Platform</p>
                                        </div>
                                        </div>
                                    </a>
                                    <ul class="inner-submenu">
                                        <li id="finbankz-corebanking">
                                        <a href="<?= BASE_URL; ?>core-banking-solution">
                                            <h3>CoreNexus</h3>
                                            <p>Core Banking Solution</p>
                                        </a>
                                        </li>
                                        <li id="finbankz-mobbanking">
                                        <a href="<?= BASE_URL; ?>mobile-banking">
                                            <h3>MobfinZ</h3>
                                            <p>Mobile Banking</p>
                                        </a>
                                        </li>
                                        <li id="finbankz-neobanking">
                                        <a href="<?= BASE_URL; ?>neo-banking">
                                            <h3>NeoPulse</h3>
                                            <p>Neo Banking</p>
                                        </a>
                                        </li>
                                        <li id="finbankz-intbanking">
                                        <a href="<?= BASE_URL; ?>internet-banking">
                                            <h3>WebVault</h3>
                                            <p>Internet Banking</p>
                                        </a>
                                        </li>
                                    </ul>
                                    </li>
                                    <li id="upizor">
                                    <a href="<?= BASE_URL; ?>upizor">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                            <svg class="normal__svg" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M28.0391 21.597L10.9337 4.4917M7.65786 14.741L10.5905 17.6736M13.0935 20.1467L14.3984 21.4516" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round"></path>
                                            <path d="M28.2668 21.5213C30.3551 19.433 30.3551 16.0472 28.2668 13.9589L18.5406 4.23273C16.4523 2.14443 13.0665 2.14443 10.9782 4.23274L4.73261 10.4784C2.64421 12.5667 2.64421 15.9525 4.73261 18.0408L14.4587 27.7669C16.547 29.8553 19.9328 29.8553 22.0211 27.7669L28.2668 21.5213Z" stroke="#E7E7E7" stroke-width="2"></path>
                                            <path d="M27.167 29.3335L5.83366 29.3335" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>UPIZor</h3>
                                            <p>Payment Solutions</p>
                                        </div>
                                        </div>
                                    </a>
                                    <ul class="inner-submenu">
                                        <li id="upizor-upi">
                                        <a href="<?= BASE_URL; ?>upi">
                                            <h3>PayUnity</h3>
                                            <p>UPI</p>
                                        </a>
                                        </li>
                                        <li id="upizor-switch">
                                        <a href="<?= BASE_URL; ?>upi-switch">
                                            <h3>FinzSwitch</h3>
                                            <p>UPI Switch</p>
                                        </a>
                                        </li>
                                        <li id="payment-gateway">
                                        <a href="<?= BASE_URL; ?>payment-gateways">
                                            <h3>FlowGate</h3>
                                            <p>Payment Gateways</p>
                                        </a>
                                        </li>
                                    </ul>
                                    </li>
                                    <li id="finopz">
                                    <a href="<?= BASE_URL; ?>finopz">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                            <svg class="normal__svg" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 12L12.5 20L20.5 20L20.5 12L12.5 12Z" stroke="#E7E7E7" stroke-width="2" stroke-linejoin="round"></path>
                                            <path d="M12.5 20L8.5 20C6.2908 20 4.5 21.7908 4.5 24C4.5 26.2092 6.2908 28 8.5 28C10.7092 28 12.5 26.2092 12.5 24L12.5 20Z" stroke="#E7E7E7" stroke-width="2" stroke-linejoin="round"></path>
                                            <path d="M20.5 20.0024L24.5 20.0024C26.7091 20.0024 28.5 21.7932 28.5 24.0024C28.5 26.2115 26.7091 28.0024 24.5 28.0024C22.2909 28.0024 20.5 26.2115 20.5 24.0024L20.5 20.0024Z" stroke="#E7E7E7" stroke-width="2" stroke-linejoin="round"></path>
                                            <path d="M12.5 12L12.5 8C12.5 5.79087 10.7092 4 8.5 4C6.2908 4 4.5 5.79087 4.5 8C4.5 10.2091 6.2908 12 8.5 12L12.5 12Z" stroke="#E7E7E7" stroke-width="2" stroke-linejoin="round"></path>
                                            <path d="M20.5 12L20.5 8C20.5 5.79087 22.2909 4 24.5 4C26.7091 4 28.5 5.79087 28.5 8C28.5 10.2091 26.7091 12 24.5 12L20.5 12Z" stroke="#E7E7E7" stroke-width="2" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>FinOpZ 360°</h3>
                                            <p>End to End Operational Suite</p>
                                        </div>
                                        </div>
                                    </a>
                                    <ul class="inner-submenu">
                                        <li id="finopz-invest">
                                        <a href="<?= BASE_URL; ?>investment-management">
                                            <h3>FinInvezt</h3>
                                            <p>Investment Management</p>
                                        </a>
                                        </li>
                                        <li id="finopz-settlement">
                                        <a href="<?= BASE_URL; ?>settlements">
                                            <h3>Finlease</h3>
                                            <p>Settlements</p>
                                        </a>
                                        </li>
                                        <li id="finopz-reconciliation">
                                        <a href="<?= BASE_URL; ?>reconciliation" >
                                            <h3>FinzRec</h3>
                                            <p>Reconciliation</p>
                                        </a>
                                        </li>
                                    </ul>
                                    </li>
                                    <li id="finzro">
                                    <a href="<?= BASE_URL; ?>finzro">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                            <svg class="normal__svg" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M29.833 21.3335C29.833 18.215 29.833 16.6558 29.1177 15.5174C28.7447 14.9238 28.2428 14.4218 27.6492 14.0488C26.5108 13.3335 24.9515 13.3335 21.833 13.3335L11.1663 13.3335C8.04781 13.3335 6.48861 13.3335 5.35021 14.0488C4.75661 14.4218 4.25461 14.9238 3.88168 15.5174C3.16634 16.6558 3.16634 18.215 3.16634 21.3335C3.16634 24.452 3.16634 26.0112 3.88168 27.1496C4.25461 27.7432 4.75661 28.2452 5.35021 28.6182C6.48861 29.3335 8.04781 29.3335 11.1663 29.3335L21.833 29.3335C24.9515 29.3335 26.5108 29.3335 27.6492 28.6182C28.2428 28.2452 28.7447 27.7432 29.1177 27.1496C29.833 26.0112 29.833 24.452 29.833 21.3335Z" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83366 13.3333C5.83366 11.4665 5.83366 10.5331 6.19699 9.82003C6.51659 9.19283 7.02646 8.6829 7.65366 8.36331C8.36673 8 9.30019 8 11.167 8L21.8337 8C23.7005 8 24.6339 8 25.347 8.36331C25.9742 8.68289 26.4841 9.19283 26.8037 9.82003C27.167 10.5331 27.167 11.4665 27.167 13.3333" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.5 7.99984C8.5 5.48568 8.5 4.2286 9.28107 3.44756C10.0621 2.66651 11.3192 2.66651 13.8333 2.6665L19.1667 2.6665C21.6808 2.6665 22.9379 2.6665 23.7189 3.44756C24.5 4.2286 24.5 5.48568 24.5 7.99984" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12.5 18.6665C12.5 20.1393 13.6939 21.3332 15.1667 21.3332L17.8333 21.3332C19.3061 21.3332 20.5 20.1393 20.5 18.6665" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round"></path>
                                        </svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>FinZro</h3>
                                            <p>Merchant Solution</p>
                                        </div>
                                        </div>
                                    </a>
                                    </li>
                                    <li id="finlyticz">
                                    <a href="<?= BASE_URL; ?>finlyticz">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                            <svg class="normal__svg" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.9438 4.14795H20.0549C25.9808 4.14795 28.3512 6.51832 28.3512 12.4442V19.5554C28.3512 25.4813 25.9808 27.8517 20.0549 27.8517H12.9438C7.01783 27.8517 4.64746 25.4813 4.64746 19.5554V12.4442C4.64746 6.51832 7.01783 4.14795 12.9438 4.14795Z" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12.4355 19.8756L20.1866 12.1245" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12.9207 14.0684C13.7258 14.0684 14.3784 13.4157 14.3784 12.6106C14.3784 11.8055 13.7258 11.1528 12.9207 11.1528C12.1156 11.1528 11.4629 11.8055 11.4629 12.6106C11.4629 13.4157 12.1156 14.0684 12.9207 14.0684Z" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.6726 20.8477C21.4777 20.8477 22.1304 20.195 22.1304 19.3899C22.1304 18.5848 21.4777 17.9321 20.6726 17.9321C19.8675 17.9321 19.2148 18.5848 19.2148 19.3899C19.2148 20.195 19.8675 20.8477 20.6726 20.8477Z" stroke="#E7E7E7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>FinlyticZ</h3>
                                            <p>Data & Analytics </p>
                                        </div>
                                        </div>
                                    </a>
                                    </li>
                                    <li id="finbridge">
                                    <a href="<?= BASE_URL; ?>connected-banking">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" class="normal__svg">
                                        <path d="M10.0006 5.87504C10.4608 5.87504 10.8339 5.50194 10.8339 5.04171C10.8339 4.58147 10.4608 4.20837 10.0006 4.20837C9.54033 4.20837 9.16724 4.58147 9.16724 5.04171C9.16724 5.50194 9.54033 5.87504 10.0006 5.87504ZM3.50024 17H8.33682C8.18915 16.6891 8.08595 16.3531 8.03544 16H4.00024V15.1667C4.00024 14.5223 4.52258 14 5.16691 14H8.33682C8.51486 13.6252 8.75757 13.2871 9.05051 13H8.00024L8.00024 8H9.50024L9.50024 12.6272C9.80225 12.4166 10.139 12.2523 10.5002 12.1449L10.5002 8H12.0002L12.0002 12H13.0002L13.0002 8H15.0002V12H15.5C15.6698 12 15.8369 12.0121 16.0002 12.0355V8H16.0932C16.9865 8 17.3522 6.85258 16.6236 6.33571L10.772 2.18429C10.31 1.85646 9.69115 1.85646 9.22906 2.18428L3.37727 6.3357C2.64871 6.85256 3.01439 8 3.90766 8H4.00024V13.3406C3.39886 13.7256 3.00024 14.3996 3.00024 15.1667V16.5C3.00024 16.7761 3.2241 17 3.50024 17ZM9.80767 2.99988C9.92319 2.91793 10.0779 2.91793 10.1934 2.99988L15.8317 7H12.5023L12.5002 7L12.4981 7H4.16915L9.80767 2.99988ZM5.00024 13.0063V8H7.00024L7.00024 13H5.16691C5.11083 13 5.05525 13.0021 5.00024 13.0063ZM11.5 13C10.1193 13 9 14.1193 9 15.5C9 16.8807 10.1193 18 11.5 18H12C12.2761 18 12.5 17.7761 12.5 17.5C12.5 17.2239 12.2761 17 12 17H11.5C10.6716 17 10 16.3284 10 15.5C10 14.6716 10.6716 14 11.5 14H12C12.2761 14 12.5 13.7761 12.5 13.5C12.5 13.2239 12.2761 13 12 13H11.5ZM15 13C14.7239 13 14.5 13.2239 14.5 13.5C14.5 13.7761 14.7239 14 15 14H15.5C16.3284 14 17 14.6716 17 15.5C17 16.3284 16.3284 17 15.5 17H15C14.7239 17 14.5 17.2239 14.5 17.5C14.5 17.7761 14.7239 18 15 18H15.5C16.8807 18 18 16.8807 18 15.5C18 14.1193 16.8807 13 15.5 13H15ZM11 15.5C11 15.2239 11.2239 15 11.5 15H15.5C15.7761 15 16 15.2239 16 15.5C16 15.7761 15.7761 16 15.5 16H11.5C11.2239 16 11 15.7761 11 15.5Z" fill="#E7E7E7"/>
                                        </svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>Finbridge</h3>
                                            <p>Connected Banking</p>
                                        </div>
                                        </div>
                                    </a>
                                    </li>
                                    <li id="finvigil">
                                    <a href="<?= BASE_URL; ?>fraud-and-risk-management">
                                        <div class="image-text">
                                        <div class="fz_header_svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="normal__svg" viewBox="0 0 32 32"><title></title><g data-name="Layer 2" id="Layer_2"><path d="M26.08,7S22,6.28,20.84,5.88A12.85,12.85,0,0,1,16.33,3.6.5.5,0,0,0,16,3.46h0a.51.51,0,0,0-.36.14,12.38,12.38,0,0,1-4.49,2.28C10,6.28,6,7,5.92,7a.5.5,0,0,0-.42.49c0,8.1.1,11.84,2.58,15.65,2.12,3.26,7.5,5.24,7.73,5.33a.47.47,0,0,0,.17,0l.17,0c.23-.09,5.65-2.07,7.77-5.33,2.48-3.81,2.58-7.55,2.58-15.65A.5.5,0,0,0,26.08,7Zm-3,15.6c-1.74,2.67-6.18,4.5-7.1,4.86-.92-.36-5.32-2.19-7.06-4.86-2.2-3.38-2.41-6.4-2.42-14.69a47.94,47.94,0,0,0,5-1A16,16,0,0,0,16,4.61a16.1,16.1,0,0,0,4.53,2.22h0a48,48,0,0,0,5,1C25.49,16.16,25.28,19.18,23.08,22.56Z" style="
    fill: #fff;
"></path><path d="M11.32,16.47a.49.49,0,0,0-.7.05.51.51,0,0,0,.06.71l5,4.27a.47.47,0,0,0,.32.12h.07a.51.51,0,0,0,.35-.22l5.82-8.54a.5.5,0,0,0-.83-.57l-5.51,8.09Z" fill="#E7E7E7" stroke="#E7E7E7"></path></g></svg>
                                        </div>
                                        <div class="fz_text">
                                            <h3>FinVigil</h3>
                                            <p>Fraud and Risk Management</p>
                                        </div>
                                        </div>
                                    </a>
                                    </li>
                                </ul>
                                </div>
                                
                                </li>
                           
                            <li class="nav-item">
                                <a class="nav-link list-menu list-menu-about" href="<?= BASE_URL; ?>about-us">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-menu list-menu-contact" href="<?= BASE_URL; ?>contact-us">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex fz_sigin">
                            <ul>
                                <li><a href="#"><img class="flag-img" src="<?= BASE_URL; ?>assets/images/flag.gif" alt="Country" width="40px"></a></li>
                               
                                <li>
                                    <a href="<?= BASE_URL; ?>login" class="onboard_btn">
                                        <button class="buttons">
                                            <span class="text">Onboard</span>
                                            <div class="icon">
                                                <img src="<?= BASE_URL; ?>assets/images/telegram.svg" alt="" class="tele_img">
                                                <img src="<?= BASE_URL; ?>assets/images/telegram.svg" alt="" class="tele_img">
                                            </div>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
