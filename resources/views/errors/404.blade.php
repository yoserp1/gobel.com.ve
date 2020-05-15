<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Gobel">
    <meta name="keywords" content="Gobel">
    <meta name="author" content="Desarrollo de Software">
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
    <!-- 404 Section Start-->
    <section class="section">
        <div class="container">
            <img src="{{ asset('images/404.png') }}" class="img-fluid mx-auto d-block" alt="">
            <br />
            <h1 class="text-center font-weight-bold section-h1">No Encontrado</h1>
            <div class="d-flex justify-content-center mt-4">
                <a href="javascript:history.go(-1)" class="theme-btn py-2 px-3">Regresar al Inicio</a>
            </div>
        </div>

    </section>
    <!-- 404 Section End -->
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