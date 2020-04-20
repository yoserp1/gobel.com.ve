<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ $portal->de_description }}">
    <meta name="keywords" content="{{ $portal->de_keywords }}">
    <meta name="author" content="{{ $portal->de_author }}">
    <meta name="robots" content="{{ $portal->de_robots }}">
    <meta property="og:title" content="{{ $portal->de_og_title }}">
    <meta property="og:site_name" content="{{ $portal->de_og_site_name }}">
    <meta property="og:description" content="{{ $portal->de_og_description }}">
    <meta property="og:type" content="{{ $portal->de_og_type }}">
    <meta property="og:url" content="{{ $portal->de_og_url }}">
    <meta property="og:image" content="{{ $portal->de_og_image }}">
    <!-- Site Title -->
    <title>{{ $portal->nb_portal }}</title>
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
            <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    @foreach($item as $key => $value)
                    <li class="nav-item active">
                        <a href="#{{ $value->de_item_formato }}" class="nav-link">{{ $value->de_item }}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a href="#price" class="nav-link">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faq" class="nav-link">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
            <div class="contact_btn">
                <a href="#contact" class="btn btn-sm">CONTACTANOS</a>
                <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    @foreach($item as $key => $value)

        @switch( $value->id_tab_item_formato)
        @case(1)

            @include('seccion.home', ['contenido' => $hijo->detalle( $value->id) ])

            @breakswitch

        @case(2)

            @include('seccion.features', ['contenido' => $hijo->detalle( $value->id) ])

            @breakswitch

        @case(3)

            @include('seccion.aboutus', ['contenido' => $hijo->detalle( $value->id) ])

            @breakswitch

        @case(4)

            @include('seccion.howitworks', ['contenido' => $hijo->detalle( $value->id) ])

            @breakswitch

        @case(5)

            @include('seccion.showcase', ['contenido' => $hijo->detalle( $value->id) ])

            @breakswitch

        @default
            <span>Something went wrong, please try again</span>
            @breakswitch
        @endswitch

    @endforeach

    <!-- Start Testimonial -->
    <section class="section bg-gradient" id="client">
        <div id="particles-js1">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2 class="text-white">What People Say</h2>
                        <p class="text-white section_subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme testimonial-slider wow fadeIn" data-wow-duration="1000ms">
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img  src="images/testi/testi-1.png" alt=""></div>
                                <div class="use-info">
                                    <h6 class="heading text-white">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card shadow-md">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
                            </div>
                            <div class="user-txt">
                                <div class="user-pics"><img src="images/testi/testi-1.png" alt=""></div>
                                <div class="user-info">
                                    <h6 class="heading text-white">Jack Jordan</h6>
                                    <p class="sub-heading text-white">Mediapp User</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial -->
    <!-- Start Price -->
    <section class="section" id="price">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2>Choose Your Pricing Plan</h2>
                        <p class="section_subtitle mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="package-box wow fadeIn" data-wow-delay="0s" data-wow-duration="1500ms">
                        <div class="package-box-inner">
                            <div class="package-hover-lines"></div>
                            <div class="package-title">Starter</div>
                            <h2>$15.00</h2>
                            <ul class="package-list">
                                <li>Single License</li>
                                <li>0 Team Members</li>
                                <li>99 mb of Storage</li>
                                <li>1.00 Project</li>
                            </ul>
                            <a href="#" class="theme-btn">get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="package-box wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="package-box-inner">
                            <div class="package-hover-lines"></div>
                            <div class="package-title">Proffesional</div>
                            <h2>$15.00</h2>
                            <ul class="package-list">
                                <li>Single License</li>
                                <li>0 Team Members</li>
                                <li>99 mb of Storage</li>
                                <li>1.00 Project</li>
                            </ul>
                            <a href="#" class="theme-btn">get started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="package-box wow fadeIn m-box-0" data-wow-delay="0.6s" data-wow-duration="1500ms">
                        <div class="package-box-inner">
                            <div class="package-hover-lines"></div>
                            <div class="package-title">Business</div>
                            <h2>$15.00</h2>
                            <ul class="package-list">
                                <li>Single License</li>
                                <li>0 Team Members</li>
                                <li>99 mb of Storage</li>
                                <li>1.00 Project</li>
                            </ul>
                            <a href="#" class="theme-btn">get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price -->
    <!-- Start Parallax -->
    <section class="parallax parallax-box section" id="contact">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-4 z-index-9">
                            <h2 class="text-white">Get Quote</h2>
                            <p class="section_subtitle mx-auto text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 mx-auto">
                        <div class="mt-4 contact_form wow fadeIn" data-wow-duration="1500ms">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" class="btn btn-gradient text-white w-100 text-uppercase" value="Sign Up for free">
                                        <p class="mt-4 mb-0">30 Days Trial. Free Account Creating.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Parallax -->
    <!-- Start FAQ's -->
    <section id="faq" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-4">
                        <h2>Frequently Asked</h2>
                        <p class="section_subtitle mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div id="accordion" class="faq-accordion-panel wow fadeInUp" data-wow-duration="1500ms">
                        <div class="question-card shadow-sm active">
                            <div class="card-header p-0" id="headingOne">
                                <h4 class="mb-0">
                                    <button class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><span>1. Lorem Ipsum Dolor Sit?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question-card shadow-sm">
                            <div class="card-header p-0" id="headingTwo">
                                <h4 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>2. Amet Consectetur Adipisicing?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question-card shadow-sm">
                            <div class="card-header p-0" id="headingThree">
                                <h4 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>3. Elit Sed Do Eiusmo?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="question-card shadow-sm">
                            <div class="card-header p-0" id="headingFour">
                                <h4 class="mb-0">
                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span>4. Ea Commodo Consequat?</span><span><i class="mdi mdi-menu-down caret-icon"></i></span></button>
                                </h4>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeIn" data-wow-duration="1500ms">
                        <img src="images/faqs.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ's -->
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