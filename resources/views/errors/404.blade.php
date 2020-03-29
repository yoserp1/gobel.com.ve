<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Multi Purpose Html5 Landing Page">
    <meta name="keywords" content="agency, bootstrap, business, corporate, creative, landing page, marketing, multipurpose, product, product launch, responsive, software, startup, startup landing page">
    <meta name="author" content="ParExcellence">
    <!-- Site Title -->
    <title>Gobel | Desarrollo de Software</title>
    <!-- Site Favicon -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <!-- Material Icon -->
    <link rel="stylesheet" href="{{ asset('/css/materialdesignicons.min.css') }}">
    <!-- Carousel Slider -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <!-- Custom  CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/colors/theme01.css') }}" id="option-color">
</head>

<body>
    <!--Start Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand brand-logo mr-4" href="{{ url('/') }}">
                <img src="{{ asset('images/gobel.png') }}" class="img-fluid logo-light" alt="">
                <img src="{{ asset('images/gobel-dark.png') }}" class="img-fluid logo-dark" alt="">
            </a>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-- Start Content -->
    <div class="main-wrapper">   
    <style>
    .nav-item {
        display: none !important;
    }
    </style>
        <div class="no-img-block">
            <div class="row">
                <div class="text-center col-md-12 col-sm-12 col-xs-12">
                    <div class="pageerror">
                            <img src="{{ asset('images/404.png') }}" />
                            <div class="m-b-md"><a href="{{ url('/') }}" class="page-scroll mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent service-btn">Back to Home</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Content -->
    <!-- Start Footer -->
    <footer class="footer theme-bg overflow-hidden pb-4">
        <div class="container footer-top mb-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="text-white">Download App Now</h2>
                        <p class="text-white section_subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="apps-btns">
                        <a class="btn store-icon-box" href="#">
                            <i class="mdi mdi-apple" aria-hidden="true"></i><p>App Store</p>
                        </a>
                        <a class="btn store-icon-box" href="#">
                            <i class="mdi mdi-google-play" aria-hidden="true"></i><p>GOOGLE PLAY</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-bottom">
            <div class="row">
                <div class="col-lg-4">
                    <div class="foot_logo">
                        <img src="images/logo.png" class="img-fluid d-block"  alt="">
                    </div>
                    <p class="mt-4 text-left ftr-about">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="mt-4">
                        <ul class="fot_social list-inline mt-4">
                            <li class="list-inline-item"><a href="#" class="social-icon"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon"><i class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer_menu_list list-unstyled mb-0 mt-4">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Client</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4">
                    <h5 class="footer-title">Support</h5>
                    <ul class="footer_menu_list list-unstyled mb-0 mt-4">
                        <li><a href="#">Help & Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <h5 class="footer-title">Quick Contact</h5>
                    <ul class="footer_menu_list list-unstyled mb-0 mt-4 contact-menu-list">
                        <li>
                            <i class="md-icon mdi mdi-map-marker"></i>
                            <a href="https://www.google.com/maps" target="_blank">
                                555 NOrth Orchard Street
                                Kings Mountain, NY 28086
                            </a>
                        </li>
                        <li><i class="md-icon mdi mdi-email-outline"></i><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                        <li><i class="md-icon mdi mdi-phone-in-talk"></i><a href="tel:+12453698741">+1 245 369 8741</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="foot_desc mt-4 pt-4">
                        <p class="mb-0 text-center">2020 &copy; <span class="text-white font-weight-bold">Gobel.</span> Design by ParExcellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Back To Top -->
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"></i></a>
    <!-- Javascript -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/parallax.js') }}"></script>
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <script src="{{ asset('/js/particles.js') }}"></script>
    <!-- Main Js   -->
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>