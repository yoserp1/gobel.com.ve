<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--






        THIS IS THE DEMO VERSION OF Dashmix UI FRAMEWORK
        COMMENTS ARE REMOVED, CODE IS COMPRESSED AND CODE STYLE IS ALTERED

        IN THE FULL VERSION
            THE CODE IS INDENTED CORRECTLY AND WELL COMMENTED
            YOU GET AN EXTENSIVE DOCUMENTATION TO GET YOU STARTED
            YOU GET THE PHP VERSION (ALONG WITH THE HTML VERSION) WHICH HAS EXTRA FEATURES
            YOU GET THE LARAVEL STARTER KIT TO HELP YOU BUILD YOUR WEB APP WITH LARAVEL
            YOU GET THE GET STARTED VERSION WITH RTL SUPPORT
            YOU GET THE ES6 FILES OF THE UI FRAMEWORK
            YOU GET THE SASS FILES OF THE UI FRAMEWORK
            YOU GET A GULPFILE WITH LOTS OF AUTOMATIONS
            YOU GET ACCESS TO FRAMEWORK UPDATES WITH NEW FEATURES AND PLUGIN UPGRADES
            WE CAN PROVIDE SUPPORT IF YOU NEED IT :-)

        THANK YOU FOR HAVING A LOOK!

        ** A LICENSE MUST BE ACQUIRED FOR LEGAL USE -> LINK: https://1.envato.market/r6y **
        ** PLEASE SUPPORT US IF YOU LIKE OUR WORK, IT HELPS US CONTINUE, THANK YOU VERY MUCH! **





        -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Dashmix - Bootstrap 4 Admin Template &amp; UI Framework | DEMO</title>
        <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Dashmix! You need to purchase a license for legal use! | DEMO">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework | DEMO">
        <meta property="og:site_name" content="Dashmix">
        <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest | This is the demo of Dashmix! You need to purchase a license for legal use! | DEMO">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="{{ asset('/assets/media/favicons/favicon.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/media/favicons/apple-touch-icon-180x180.png') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('/assets/css/dashmix.min-2.3.css') }}">
</head>
<body>
<div id="page-container">
                <main id="main-container">
<div class="bg-image" style="background-image: url('{{ asset('/assets/media/photos/photo19@2x.jpg') }}');">
    <div class="row no-gutters bg-gd-sun-op">
        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
            <div class="p-3 w-100">
                <div class="text-center">
                    <a class="link-fx text-warning font-w700 font-size-h1" href="index.html">
                        <span class="text-dark">CMS</span><span class="text-warning">mix</span>
                    </a>
                    <p class="text-uppercase font-w700 font-size-sm text-muted">Recuperar contraseña</p>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-8 col-xl-6">
                        <form class="js-validation-reminder" action="{{ url('/cms/autenticar/recuperar') }}" method="POST">
                            <div class="form-group py-3">
                                <input type="text" class="form-control form-control-lg form-control-alt {!! $errors->has('email') ? 'is-invalid' : '' !!}" {!! $errors->has('email') ? 'aria-describedby="email-error" aria-invalid="true"' : '' !!} id="email" name="email" placeholder="Email">
                                @if( $errors->has('email') )
                                    <div id="email-error" class="invalid-feedback animated fadeIn">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-warning">
                                    <i class="fa fa-fw fa-reply mr-1"></i> Recuperar
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{ url('/cms') }}">
                                        <i class="fa fa-sign-in-alt text-muted mr-1"></i> Iniciar Sesión
                                    </a>
                                    {{--<a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{ url('/cms/registrar') }}">
                                        <i class="fa fa-plus text-muted mr-1"></i> New Account
                                    </a>--}}
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
            <div class="p-3">
                <p class="display-4 font-w700 text-white mb-0">
                    No te preocupes por el fracaso..
                </p>
                <p class="font-size-h1 font-w600 text-white-75 mb-0">
                    ..pero aprende de eso!
                </p>
            </div>
        </div>
    </div>
</div>
    </main>
    </div>
<script src="{{ asset('/assets/js/dashmix.core.min-2.3.js') }}"></script>
<script src="{{ asset('/assets/js/dashmix.app.min-2.3.js') }}"></script>
<script src="{{ asset('/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/js/pages/auth_reminder.min.js') }}"></script>
    </body>
</html>