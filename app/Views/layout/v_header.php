<!doctype html>
<html lang="en" dir="ltr" class="landing-pages">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BANK & ATM Locator</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('hopeui') ?>/assets/images/favicon.ico">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/css/core/libs.min.css">


    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/css/hope-ui.min.css?v=4.0.0">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/css/custom.min.css?v=4.0.0">

    <!-- Dark Css -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/css/dark.min.css">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/css/customizer.min.css">

    <!-- RTL Css -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/css/rtl.min.css">


    <!-- SwiperSlider css -->
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/assets/vendor/swiperSlider/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= base_url('hopeui') ?>/landing-pages/assets/css/landing-pages.min.css">
    <style>
        /* Custom styling for the map container */
        #map {
            width: 100%;
            height: 580px;
            margin-bottom: 20px;
        }
    </style>
    <!-- Use the latest version of Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha384-1tYtGFTiE/ctZB4RL1PbTw5dznBkR8uIXZP7b8BYA6Qfu71uhhfA35VRdNy4L+5C" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha384-yniwT20kGPBPoetHLWq5rtST2g2Dw2rZx4BFMTIrJSqLsqitF5dNBLlmWywR0E0R" crossorigin=""></script>

</head>

<body class=" body-bg landing-pages">
    <span class="screen-darken"></span>
    <!-- Wrapper-start -->
    <main class="main-content">
        <div class="position-relative">
            <!-- Nav-Start -->
            <nav class="nav navbar navbar-expand-xl navbar-light bg-secondary iq-navbar header-hover-menu">
                <div class="container-fluid navbar-inner">
                    <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                        <a href="../landing-pages/index.html" class="navbar-brand m-0 d-xl-flex d-none text-white">
                            <h5 class="logo-title text-white">BANK & ATM Locator</h5>
                        </a>
                        <div class="d-flex align-items-center d-xl-none">
                            <button data-trigger="navbar_main" class="d-xl-none btn btn-primary rounded-pill p-1 pt-0" type="button">
                                <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                </svg>
                            </button>
                        </div>
                        <ul class="d-block d-xl-none list-unstyled m-0">
                            <li class="nav-item dropdown iq-responsive-menu">
                                <div class="btn btn-sm bg-body" id="navbarDropdown-search-11" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown-search-11" style="width: 18rem;">
                                    <li class="px-3 py-0">
                                        <div class="form-group input-group mb-0">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-text">
                                                <svg class="icon-20" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                                    <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Horizontal Menu Start -->
                        <nav id="navbar_main" class="mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav">
                            <div class="container-fluid p-lg-0">
                                <div class="offcanvas-header px-0">
                                    <a href="../landing-pages/index.html" class="navbar-brand ms-3 d-xl-none text-white">
                                        <!--Logo start-->
                                        <svg class="icon-30 text-primary" width="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"></rect>
                                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"></rect>
                                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"></rect>
                                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"></rect>
                                        </svg>
                                        <!--logo End-->
                                        <h5 class="logo-title">Hope UI</h5>
                                    </a>
                                    <button class="btn-close float-end px-3"></button>
                                </div>
                                <ul class="navbar-nav iq-nav-menu list-unstyled" id="header-menu">
                                    <li class="nav-item"><a class="nav-link text-white <?= $menu == 'peta' ? 'active' : '' ?> " href="<?= base_url('/') ?>">Peta</a></li>
                                    <li class="nav-item"><a class="nav-link text-white <?= $menu == 'marker' ? 'active' : '' ?> " href="<?= base_url('marker') ?>">Kelola Marker</a></li>
                                    <li class="nav-item"><a class="nav-link text-white <?= $menu == 'polygon' ? 'active' : '' ?> " href="<?= base_url('polygon') ?>">Kelola Polygon</a></li>
                                </ul>
                            </div> <!-- container-fluid.// -->
                        </nav>
                        <!-- Sidebar Menu End -->
                    </div>
                </div>
            </nav> <!--Nav-End-->
        </div>