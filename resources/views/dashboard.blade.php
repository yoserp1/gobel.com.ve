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
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-dark main-content-narrow">
    <aside id="side-overlay">
    <div class="bg-image" style="background-image: url('{{ asset('/assets/media/various/bg_side_overlay_header.jpg') }}');">
        <div class="bg-primary-op">
            <div class="content-header">
                <a class="img-link mr-1" href="be_pages_generic_profile.html">
                    <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar10.jpg') }}" alt="">
                </a>
                <div class="ml-2">
                    <a class="text-white font-w600" href="be_pages_generic_profile.html">George Taylor</a>
                    <div class="text-white-75 font-size-sm">Full Stack Developer</div>
                </div>
                <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times-circle"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content-side">
        <div class="block block-transparent pull-x pull-t">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" data-toggle="tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#so-settings">
                        <i class="fa fa-fw fa-cog"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#so-people">
                        <i class="far fa-fw fa-user-circle"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#so-profile">
                        <i class="far fa-fw fa-edit"></i>
                    </a>
                </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
                <div class="tab-pane pull-x fade fade-up show active" id="so-settings" role="tabpanel">
                    <div class="block mb-0">
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Color Themes</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center">
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-default" data-toggle="theme" data-theme="default" href="#">
                                        Default
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xwork" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xwork.min-2.3.css') }}" href="#">
                                        xWork
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xmodern" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xmodern.min-2.3.css') }}" href="#">
                                        xModern
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xeco" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xeco.min-2.3.css') }}" href="#">
                                        xEco
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xsmooth" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xsmooth.min-2.3.css') }}" href="#">
                                        xSmooth
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xinspire" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xinspire.min-2.3.css') }}" href="#">
                                        xInspire
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xdream" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xdream.min-2.3.css') }}" href="#">
                                        xDream
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xpro" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xpro.min-2.3.css') }}" href="#">
                                        xPro
                                    </a>
                                </div>
                                <div class="col-4 mb-1">
                                    <a class="d-block py-3 text-white font-size-sm font-w600 bg-xplay" data-toggle="theme" data-theme="{{ asset('/assets/css/themes/xplay.min-2.3.css') }}" href="#">
                                        xPlay
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" href="be_ui_color_themes.html">All Color Themes</a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Sidebar</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center">
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Header</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center mb-2">
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">Light</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="header_mode_static" href="javascript:void(0)">Static</a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Content</span>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny text-center">
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                                </div>
                                <div class="col-6 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                                </div>
                                <div class="col-12 mb-1">
                                    <a class="d-block py-3 bg-body-dark font-w600 text-dark" data-toggle="layout" data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                                </div>
                            </div>
                        </div>
                        <div class="block-content row justify-content-center border-top">
                            <div class="col-9">
                                <a class="btn btn-block btn-hero-primary" href="be_layout_api.html">
                                    <i class="fa fa-fw fa-flask mr-1"></i> Layout API
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane pull-x fade fade-up" id="so-people" role="tabpanel">
                    <div class="block mb-0">
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Online</span>
                        </div>
                        <div class="block-content">
                            <ul class="nav-items">
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar6.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Lisa Jenkins</div>
                                            <div class="font-size-sm text-muted">Photographer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar13.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Justin Hunt</div>
                                            <div class="font-w400 font-size-sm text-muted">Web Designer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar6.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Judy Ford</div>
                                            <div class="font-w400 font-size-sm text-muted">Web Developer</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Busy</span>
                        </div>
                        <div class="block-content">
                            <ul class="nav-items">
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar4.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-danger"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Danielle Jones</div>
                                            <div class="font-w400 font-size-sm text-muted">UI Designer</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Away</span>
                        </div>
                        <div class="block-content">
                            <ul class="nav-items">
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar16.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Justin Hunt</div>
                                            <div class="font-w400 font-size-sm text-muted">Copywriter</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar1.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Laura Carr</div>
                                            <div class="font-w400 font-size-sm text-muted">Writer</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-sm block-content-full bg-body">
                            <span class="text-uppercase font-size-sm font-w700">Offline</span>
                        </div>
                        <div class="block-content">
                            <ul class="nav-items">
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar9.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Carl Wells</div>
                                            <div class="font-w400 font-size-sm text-muted">Teacher</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar7.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Sara Fields</div>
                                            <div class="font-w400 font-size-sm text-muted">Photographer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar6.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Lisa Jenkins</div>
                                            <div class="font-w400 font-size-sm text-muted">Front-end Developer</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="media py-2" href="be_pages_generic_profile.html">
                                        <div class="mx-3 overlay-container">
                                            <img class="img-avatar img-avatar48" src="{{ asset('/assets/media/avatars/avatar14.jpg') }}" alt="">
                                            <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-muted"></span>
                                        </div>
                                        <div class="media-body">
                                            <div class="font-w600">Adam McCoy</div>
                                            <div class="font-w400 font-size-sm text-muted">UX Specialist</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content row justify-content-center border-top">
                            <div class="col-9">
                                <a class="btn btn-block btn-hero-primary" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-plus mr-1"></i> Add People
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel">
                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                        <div class="block mb-0">
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Personal</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" readonly class="form-control" id="staticEmail" value="Admin">
                                </div>
                                <div class="form-group">
                                    <label for="so-profile-name">Name</label>
                                    <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                                </div>
                                <div class="form-group">
                                    <label for="so-profile-email">Email</label>
                                    <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                                </div>
                            </div>
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Password Update</span>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="form-group">
                                    <label for="so-profile-password">Current Password</label>
                                    <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                                </div>
                                <div class="form-group">
                                    <label for="so-profile-new-password">New Password</label>
                                    <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                                </div>
                                <div class="form-group">
                                    <label for="so-profile-new-password-confirm">Confirm New Password</label>
                                    <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                                </div>
                            </div>
                            <div class="block-content block-content-sm block-content-full bg-body">
                                <span class="text-uppercase font-size-sm font-w700">Options</span>
                            </div>
                            <div class="block-content">
                                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                    <input type="checkbox" class="custom-control-input" id="so-settings-status" name="so-settings-status" value="1">
                                    <label class="custom-control-label" for="so-settings-status">Online Status</label>
                                </div>
                                <p class="text-muted font-size-sm">
                                    Make your online status visible to other users of your app
                                </p>
                                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                    <input type="checkbox" class="custom-control-input" id="so-settings-notifications" name="so-settings-notifications" value="1" checked>
                                    <label class="custom-control-label" for="so-settings-notifications">Notifications</label>
                                </div>
                                <p class="text-muted font-size-sm">
                                    Receive desktop notifications regarding your projects and sales
                                </p>
                                <div class="custom-control custom-checkbox custom-control-primary mb-1">
                                    <input type="checkbox" class="custom-control-input" id="so-settings-updates" name="so-settings-updates" value="1" checked>
                                    <label class="custom-control-label" for="so-settings-updates">Auto Updates</label>
                                </div>
                                <p class="text-muted font-size-sm">
                                    If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                                </p>
                            </div>
                            <div class="block-content row justify-content-center border-top">
                                <div class="col-9">
                                    <button type="submit" class="btn btn-block btn-hero-primary">
                                        <i class="fa fa-fw fa-save mr-1"></i> Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
    <nav id="sidebar" aria-label="Main Navigation">
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <a class="link-fx font-w600 font-size-lg text-white" href="index.html">
                <span class="smini-visible">
                    <span class="text-white-75">D</span><span class="text-white">x</span>
                </span>
                <span class="smini-hidden">
                    <span class="text-white">Dash</span><span class="text-white-75">mix</span> <span class="text-white font-size-base font-w400">2.3</span>
                </span>
            </a>
            <div>
                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" data-toggle="layout" data-action="sidebar_style_toggle" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </a>
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
<a class="nav-main-link" href="be_pages_dashboard.html">
<i class="nav-main-link-icon si si-cursor"></i>
<span class="nav-main-link-name">Dashboard</span>
<span class="nav-main-link-badge badge badge-pill badge-success">5</span>
</a>
</li>
<li class="nav-main-item open">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
<i class="nav-main-link-icon si si-docs"></i>
<span class="nav-main-link-name">Page Kits</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Generic</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_blank.html">
<span class="nav-main-link-name">Blank</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_blank_block.html">
<span class="nav-main-link-name">Blank (Block)</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_search.html">
<span class="nav-main-link-name">Search</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_profile.html">
<span class="nav-main-link-name">Profile</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_profile_edit.html">
<span class="nav-main-link-name">Profile Edit</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_inbox.html">
<span class="nav-main-link-name">Inbox</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_invoice.html">
<span class="nav-main-link-name">Invoice</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_faq.html">
<span class="nav-main-link-name">FAQ</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
<span class="nav-main-link-name">Upgrade Plan</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Projects</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_projects_dashboard.html">
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_projects_tasks.html">
<span class="nav-main-link-name">Project Tasks</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_projects_create.html">
<span class="nav-main-link-name">Create</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_projects_edit.html">
<span class="nav-main-link-name">Edit</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Jobs</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_jobs_dashboard.html">
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_jobs_listing.html">
<span class="nav-main-link-name">Listing</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_jobs_apply.html">
<span class="nav-main-link-name">Apply</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_jobs_post.html">
<span class="nav-main-link-name">Post</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Education</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_education_dashboard.html">
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_education_course.html">
<span class="nav-main-link-name">Course</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_education_authors.html">
<span class="nav-main-link-name">Authors</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Forum</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_forum_categories.html">
<span class="nav-main-link-name">Categories</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_forum_topics.html">
<span class="nav-main-link-name">Topics</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_forum_discussion.html">
<span class="nav-main-link-name">Discussion</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item open">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
<span class="nav-main-link-name">Blog</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_classic.html">
<span class="nav-main-link-name">Classic</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_list.html">
<span class="nav-main-link-name">List</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_grid.html">
<span class="nav-main-link-name">Grid</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_story.html">
<span class="nav-main-link-name">Story</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_story_cover.html">
<span class="nav-main-link-name">Story Cover</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link active" href="be_pages_blog_post_manage.html">
<span class="nav-main-link-name">Manage Posts</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_post_add.html">
<span class="nav-main-link-name">Add Post</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_blog_post_edit.html">
<span class="nav-main-link-name">Edit Post</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Boxed Backend</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="bd_dashboard.html">
<span class="nav-main-link-name">Dashboard</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_search.html">
<span class="nav-main-link-name">Search</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_simple_1.html">
<span class="nav-main-link-name">Simple 1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_simple_2.html">
<span class="nav-main-link-name">Simple 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_image_1.html">
<span class="nav-main-link-name">Image 1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_image_2.html">
<span class="nav-main-link-name">Image 2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_video_1.html">
<span class="nav-main-link-name">Video 1</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="bd_video_2.html">
<span class="nav-main-link-name">Video 2</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Special</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="op_maintenance.html">
<span class="nav-main-link-name">Maintenance</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_status.html">
<span class="nav-main-link-name">Status</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_installation.html">
<span class="nav-main-link-name">Installation</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_coming_soon.html">
<span class="nav-main-link-name">Coming Soon</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_coming_soon_2.html">
<span class="nav-main-link-name">Coming Soon 2</span>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-heading">Base</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-grid"></i>
<span class="nav-main-link-name">Blocks</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_styles.html">
<span class="nav-main-link-name">Styles</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_options.html">
<span class="nav-main-link-name">Options</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_forms.html">
<span class="nav-main-link-name">Forms</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_themed.html">
<span class="nav-main-link-name">Themed</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_blocks_api.html">
<span class="nav-main-link-name">API</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-puzzle"></i>
<span class="nav-main-link-name">Widgets</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_tiles.html">
<span class="nav-main-link-name">Tiles</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_stats.html">
<span class="nav-main-link-name">Statistics</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_media.html">
<span class="nav-main-link-name">Media</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_users.html">
<span class="nav-main-link-name">Users</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_blog.html">
<span class="nav-main-link-name">Blog</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_widgets_various.html">
<span class="nav-main-link-name">Various</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-star"></i>
<span class="nav-main-link-name">Layout</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Page</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_page_default.html">
<span class="nav-main-link-name">Default</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_page_flipped.html">
<span class="nav-main-link-name">Flipped</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_page_native_scrolling.html">
<span class="nav-main-link-name">Native Scrolling</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Main Content</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_main_full_width.html">
<span class="nav-main-link-name">Full Width</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_main_narrow.html">
<span class="nav-main-link-name">Narrow</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_main_boxed.html">
<span class="nav-main-link-name">Boxed</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Side Content</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_side_left.html">
<span class="nav-main-link-name">Left</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_content_side_right.html">
<span class="nav-main-link-name">Right</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Hero</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Color</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_hero_color_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_hero_color_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Image</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_hero_image_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_hero_image_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Video</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_hero_video_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_hero_video_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Header</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Fixed</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_fixed_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_fixed_light_glass.html">
<span class="nav-main-link-name">Light Glass</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_fixed_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_fixed_dark_glass.html">
<span class="nav-main-link-name">Dark Glass</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Static</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_static_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_static_light_glass.html">
<span class="nav-main-link-name">Light Glass</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_static_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_header_static_dark_glass.html">
<span class="nav-main-link-name">Dark Glass</span>
</a>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Footer</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_footer_static.html">
<span class="nav-main-link-name">Static</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_footer_fixed.html">
<span class="nav-main-link-name">Fixed</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sidebar</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_mini.html">
<span class="nav-main-link-name">Mini</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_light.html">
<span class="nav-main-link-name">Light</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_sidebar_hidden.html">
<span class="nav-main-link-name">Hidden</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Side Overlay</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_side_overlay_visible.html">
<span class="nav-main-link-name">Visible</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
<span class="nav-main-link-name">Hover Mode</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
<span class="nav-main-link-name">No Page Overlay</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_layout_api.html">
<span class="nav-main-link-name">API</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-heading">Interface</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-chemistry"></i>
<span class="nav-main-link-name">Elements</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_icons.html">
<span class="nav-main-link-name">Icon Packs</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_grid.html">
<span class="nav-main-link-name">Flexbox Grid</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_typography.html">
<span class="nav-main-link-name">Typography</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_navigation.html">
<span class="nav-main-link-name">Navigation</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_navigation_horizontal.html">
<span class="nav-main-link-name">Horizontal Nav</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_tabs.html">
<span class="nav-main-link-name">Tabs</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_buttons.html">
<span class="nav-main-link-name">Buttons</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_buttons_groups.html">
<span class="nav-main-link-name">Button Groups</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_dropdowns.html">
<span class="nav-main-link-name">Dropdowns</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_progress.html">
<span class="nav-main-link-name">Progress</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_alerts.html">
<span class="nav-main-link-name">Alerts</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_tooltips.html">
<span class="nav-main-link-name">Tooltips</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_popovers.html">
<span class="nav-main-link-name">Popovers</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_accordion.html">
<span class="nav-main-link-name">Accordion</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_modals.html">
<span class="nav-main-link-name">Modals</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_images.html">
<span class="nav-main-link-name">Images Overlay</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_timeline.html">
<span class="nav-main-link-name">Timeline</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_ribbons.html">
<span class="nav-main-link-name">Ribbons</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_animations.html">
<span class="nav-main-link-name">Animations</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_backgrounds.html">
<span class="nav-main-link-name">Backgrounds</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_ui_color_themes.html">
<span class="nav-main-link-name">Color Themes</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-cup"></i>
<span class="nav-main-link-name">Tables</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_styles.html">
<span class="nav-main-link-name">Styles</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_responsive.html">
<span class="nav-main-link-name">Responsive</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_helpers.html">
<span class="nav-main-link-name">Helpers</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_pricing.html">
<span class="nav-main-link-name">Pricing</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_tables_datatables.html">
<span class="nav-main-link-name">DataTables</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-notebook"></i>
<span class="nav-main-link-name">Forms</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_elements.html">
<span class="nav-main-link-name">Elements</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_custom_controls.html">
<span class="nav-main-link-name">Custom Controls</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_layouts.html">
<span class="nav-main-link-name">Layouts</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_input_groups.html">
<span class="nav-main-link-name">Input Groups</span>
<span class="nav-main-link-badge badge badge-pill badge-success">New</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_plugins.html">
<span class="nav-main-link-name">Plugins</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_editors.html">
<span class="nav-main-link-name">Editors</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_validation.html">
<span class="nav-main-link-name">Validation</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_forms_wizard.html">
<span class="nav-main-link-name">Wizard</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-heading">Extend</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-wrench"></i>
<span class="nav-main-link-name">Components</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_chat.html">
<span class="nav-main-link-name">Chat</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_onboarding.html">
<span class="nav-main-link-name">Onboarding</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_tour.html">
<span class="nav-main-link-name">Tour</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_nestable.html">
<span class="nav-main-link-name">Nestable</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_dialogs.html">
<span class="nav-main-link-name">Dialogs</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_notifications.html">
<span class="nav-main-link-name">Notifications</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_loaders.html">
<span class="nav-main-link-name">Loaders</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_charts.html">
<span class="nav-main-link-name">Charts</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_gallery.html">
<span class="nav-main-link-name">Gallery</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_sliders.html">
<span class="nav-main-link-name">Sliders</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_rating.html">
<span class="nav-main-link-name">Rating</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_appear.html">
<span class="nav-main-link-name">Appear</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_calendar.html">
<span class="nav-main-link-name">Calendar</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_image_cropper.html">
<span class="nav-main-link-name">Image Cropper</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_maps_google.html">
<span class="nav-main-link-name">Google Maps</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_maps_vector.html">
<span class="nav-main-link-name">Vector Maps</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="be_comp_syntax_highlighting.html">
<span class="nav-main-link-name">Syntax Highlighting</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-settings"></i>
<span class="nav-main-link-name">Main Menu</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-drawer"></i>
<span class="nav-main-link-name">1.1 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-fire"></i>
<span class="nav-main-link-name">1.2 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-graph"></i>
<span class="nav-main-link-name">1.3 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 2</span>
<span class="nav-main-link-badge badge badge-pill badge-primary">3</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-tag"></i>
<span class="nav-main-link-name">2.1 Item</span>
<span class="nav-main-link-badge badge badge-pill badge-info">2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-pie-chart"></i>
<span class="nav-main-link-name">2.2 Item</span>
<span class="nav-main-link-badge badge badge-pill badge-danger">2</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-note"></i>
<span class="nav-main-link-name">2.3 Item</span>
<span class="nav-main-link-badge badge badge-pill badge-warning">3</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 3</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-map"></i>
<span class="nav-main-link-name">3.1 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-cup"></i>
<span class="nav-main-link-name">3.2 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-user-female"></i>
<span class="nav-main-link-name">3.3 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<span class="nav-main-link-name">Sub Level 4</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-heart"></i>
<span class="nav-main-link-name">4.1 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-magnifier"></i>
<span class="nav-main-link-name">4.2 Item</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="#">
<i class="nav-main-link-icon si si-microphone"></i>
<span class="nav-main-link-name">4.3 Item</span>
</a>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
</ul>
</li>
<li class="nav-main-heading">Pages</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-cup"></i>
<span class="nav-main-link-name">Dashboards</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_dashboard_all.html">
<span class="nav-main-link-name">All</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_social.html">
<span class="nav-main-link-name">Social</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_messages.html">
<span class="nav-main-link-name">Messages</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_dark.html">
<span class="nav-main-link-name">Dark</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_minimal.html">
<span class="nav-main-link-name">Minimal</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_modern.html">
<span class="nav-main-link-name">Modern</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_classic_boxed.html">
<span class="nav-main-link-name">Classic Boxed</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_banking.html">
<span class="nav-main-link-name">Banking</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_crypto.html">
<span class="nav-main-link-name">Crypto</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_hosting.html">
<span class="nav-main-link-name">Hosting</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_booking.html">
<span class="nav-main-link-name">Booking</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_gaming.html">
<span class="nav-main-link-name">Gaming</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_tasks.html">
<span class="nav-main-link-name">Tasks</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_medical.html">
<span class="nav-main-link-name">Medical</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_travel.html">
<span class="nav-main-link-name">Travel</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_social_compact.html">
<span class="nav-main-link-name">Social Compact</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_chat.html">
<span class="nav-main-link-name">Chat</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_analytics.html">
<span class="nav-main-link-name">Analytics</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_corporate_slim.html">
<span class="nav-main-link-name">Corporate Slim</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_wp_post.html">
<span class="nav-main-link-name">WP Post</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="db_file_hosting.html">
<span class="nav-main-link-name">File Hosting</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-users"></i>
<span class="nav-main-link-name">Auth</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_auth_all.html">
<span class="nav-main-link-name">All</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signin.html">
<span class="nav-main-link-name">Sign In</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signin_box.html">
<span class="nav-main-link-name">Sign In Box</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signin_box_alt.html">
<span class="nav-main-link-name">Sign In Box Alt</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signup.html">
<span class="nav-main-link-name">Sign Up</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signup_box.html">
<span class="nav-main-link-name">Sign Up Box</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_signup_box_alt.html">
<span class="nav-main-link-name">Sign Up Box Alt</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_lock.html">
<span class="nav-main-link-name">Lock Screen</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_lock_box.html">
<span class="nav-main-link-name">Lock Screen Box</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_lock_box_alt.html">
<span class="nav-main-link-name">Lock Screen Box Alt</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_reminder.html">
<span class="nav-main-link-name">Pass Reminder</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_reminder_box.html">
<span class="nav-main-link-name">Pass Reminder Box</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_auth_reminder_box_alt.html">
<span class="nav-main-link-name">Pass Reminder Box Alt</span>
</a>
</li>
</ul>
</li>
<li class="nav-main-item">
<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
<i class="nav-main-link-icon si si-ghost"></i>
<span class="nav-main-link-name">Error</span>
</a>
<ul class="nav-main-submenu">
<li class="nav-main-item">
<a class="nav-main-link" href="be_pages_error_all.html">
<span class="nav-main-link-name">All</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_400.html">
<span class="nav-main-link-name">400</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_401.html">
<span class="nav-main-link-name">401</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_403.html">
<span class="nav-main-link-name">403</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_404.html">
<span class="nav-main-link-name">404</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_500.html">
<span class="nav-main-link-name">500</span>
</a>
</li>
<li class="nav-main-item">
<a class="nav-main-link" href="op_error_503.html">
<span class="nav-main-link-name">503</span>
</a>
</li>
</ul>
</li>
        </ul>
    </div>
</nav>
    <header id="page-header">
    <div class="content-header">
        <div>
            <button type="button" class="btn btn-dual mr-1" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search</span>
            </button>
        </div>
        <div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">Admin</span>
                    <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                       User Options
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item" href="be_pages_generic_profile.html">
                            <i class="far fa-fw fa-user mr-1"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                            <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                            <span class="badge badge-primary badge-pill">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice.html">
                            <i class="far fa-fw fa-file-alt mr-1"></i> Invoices
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="far fa-fw fa-building mr-1"></i> Settings
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="op_auth_signin.html">
                            <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="badge badge-secondary badge-pill">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                       Notifications
                    </div>
                    <ul class="nav-items my-2">
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-check-circle text-success"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">App was updated to v5.6!</div>
                                    <div class="text-muted font-italic">3 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-user-plus text-info"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                    <div class="text-muted font-italic">10 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-times-circle text-danger"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">Server backup failed to complete!</div>
                                    <div class="text-muted font-italic">30 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                    <div class="text-muted font-italic">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-dark media py-2" href="javascript:void(0)">
                                <div class="mx-3">
                                    <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                </div>
                                <div class="media-body font-size-sm pr-2">
                                    <div class="font-w600">New Sale! + $30</div>
                                    <div class="text-muted font-italic">2 hours ago</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="p-2 border-top">
                        <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                            <i class="fa fa-fw fa-eye mr-1"></i> View All
                        </a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                <i class="far fa-fw fa-list-alt"></i>
            </button>
        </div>
    </div>
    <div id="page-header-search" class="overlay-header bg-primary">
        <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
       </div>
    </div>
    <div id="page-header-loader" class="overlay-header bg-primary-darker">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
            </div>
        </div>
    </div>
</header>
    <main id="main-container">
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Manage All Posts</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active" aria-current="page">Manage</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<div class="content content-full">
    <div class="row text-center">
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-file-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            150
                        </p>
                        <p class="text-muted mb-0">
                            All Posts
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-eye opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            140
                        </p>
                        <p class="text-muted mb-0">
                            Active
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-pencil-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            10
                        </p>
                        <p class="text-muted mb-0">
                            Drafts
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded" href="be_pages_blog_post_add.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-plus text-success-light"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            <i class="fa fa-plus text-success-light mr-1 d-md-none"></i> New Post
                        </p>
                        <p class="text-muted mb-0">
                            by John Doe
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Posts (150)</h3>
        </div>
        <div class="block-content">
            <form class="push" action="be_pages_blog_post_manage.html" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Posts..">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 60px;">ID</th>
                        <th style="width: 33%;">Title</th>
                        <th class="d-none d-sm-table-cell">Author</th>
                        <th class="d-none d-xl-table-cell">Created</th>
                        <th class="d-none d-xl-table-cell">Published</th>
                        <th style="width: 100px;" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            150
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                An adventure of a lifetime
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Jesse Fisher</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 14, 2020 at 17:20
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 15, 2020 at 16:34
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            149
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Learn to code in one week
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Wayne Garcia</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 13, 2020 at 15:36
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 16, 2020 at 20:48
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            148
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Can you travel &amp; work efficiently?
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Judy Ford</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 11, 2020 at 20:12
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 16, 2020 at 19:19
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            147
                        </td>
                        <td>
                            <i class="fa fa-eye text-danger mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                The best places to work from
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Megan Fuller</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 10, 2020 at 18:10
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 11, 2020 at 17:20
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            146
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Visual Studio Code vs Atom Editor
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">David Fuller</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 07, 2020 at 23:19
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 10, 2020 at 15:12
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            145
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Exploring the mysterious mountains
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Megan Fuller</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 04, 2020 at 15:12
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 05, 2020 at 19:12
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            144
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Inspire a new generation of web developers
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Henry Harrison</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 03, 2020 at 17:33
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 08, 2020 at 14:51
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            143
                        </td>
                        <td>
                            <i class="fa fa-eye text-danger mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                What to do in the night market
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Albert Ray</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 02, 2020 at 08:23
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 07, 2020 at 21:
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            142
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Modern CSS for Developers
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Ryan Flores</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 02, 2020 at 14:54
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 05, 2020 at 20:18
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            141
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                Laravel 6 From Scratch
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Carl Wells</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 01, 2020 at 12:20
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 01, 2020 at 11:30
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Posts Navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-double-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
    </main>
    <footer id="page-footer" class="bg-body-light">
    <div class="content py-0">
        <div class="row font-size-sm">
            <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix 2.3</a> &copy; <span data-toggle="year-copy"></span>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="{{ asset('/assets/js/dashmix.core.min-2.3.js') }}"></script>
<script src="{{ asset('/assets/js/dashmix.app.min-2.3.js') }}"></script>
    </body>
</html>
