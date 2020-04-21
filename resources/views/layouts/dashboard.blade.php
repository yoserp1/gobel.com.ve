<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ Session::get('portal.0.nb_portal') }}</title>

        <meta name="description" content="{{ Session::get('portal.0.nb_portal') }}">
        <meta name="author" content="{{ Session::get('portal.0.de_author') }}">
        <meta name="robots" content="{{ Session::get('portal.0.de_robots') }}">
        <meta property="og:title" content="{{ Session::get('portal.0.de_og_title') }}">
        <meta property="og:site_name" content="{{ Session::get('portal.0.de_og_site_name') }}">
        <meta property="og:description" content="{{ Session::get('portal.0.de_og_description') }}">
        <meta property="og:type" content="{{ Session::get('portal.0.de_og_type') }}">
        <meta property="og:url" content="{{ Session::get('portal.0.de_og_url') }}">
        <meta property="og:image" content="{{ Session::get('portal.0.de_og_image') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" type="image/ico">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('css/themes/xwork.css') }}"> -->
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-narrow enable-cookies">
            @include('layouts.side_overlay')
            @include('layouts.sidebar')
            @include('layouts.header')
            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->
            @include('layouts.footer')
        </div>

        @include('layouts.dashboard_modal')

        <!-- Dashmix Core JS -->
        <script src="{{ asset('/assets/js/dashmix.core.min.js') }}"></script>
        <script src="{{ asset('/assets/js/dashmix.app.min.js') }}"></script>
        <!-- Laravel Scaffolding JS -->
        <script src="{{ asset('/assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
        @yield('js_after')
        @yield('js_side_overlay')
        @yield('js_notificacion')
        @yield('js_notificacion_lista')
    </body>
</html>