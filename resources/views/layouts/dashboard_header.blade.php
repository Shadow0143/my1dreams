

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My 1 Dreams </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!--[if lt IE 10]>
      <script src="{{ asset('extra/js/html5shiv.js') }}"></script>
      <script src="{{ asset('extra/js/respond.min.js') }}"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">



    <!----- PWA start--------------------->
{{--  <meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">  --}}
<!------PWA end -------------------------->

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('extra/libraries\assets\images\favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="{{ asset('extra/libraries\assets\pages\chart\radial\css\radial.css') }}" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\feather\css\feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\themify-icons\themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\icofont\css\icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\icon\feather\css\feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\j-pro\css\demo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\j-pro\css\font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\j-pro\css\j-pro-modern.css') }}">






    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\pages\data-table\css\buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">


    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('extra/libraries\assets\css\jquery.mCustomScrollbar.css') }}">
    <!-- Web Application Manifest -->
<link rel="manifest" href="/manifest.json">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#000000">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA">
<link rel="icon" sizes="512x512" href="{{ asset('images/icons/icon-512x512.png') }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="PWA">
<link rel="apple-touch-icon" href="{{ asset('images/icons/icon-512x512.png') }}">

<link href="{{ asset('images/icons/splash-640x1136.png') }}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-750x1334.png') }}" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1242x2208.png') }}" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1125x2436.png') }}" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-828x1792.png') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1242x2688.png') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1536x2048.png') }}" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1668x2224.png') }}" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-1668x2388.png') }}" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('images/icons/splash-2048x2732.png') }}" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('images/icons/icon-512x512.png') }}">

    @laravelPWA
</head>
<!-- Menu sidebar static layout -->
<body>
    @include('sweetalert::alert')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('layouts.dashboard_nav')

            <!-- Sidebar chat start -->         
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ route('home') }}">
                                                <span class="">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ route('master') }}">
                                                <span class="pcoded-mtext">Masters</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.htm">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-analytics.htm">
                                                <span class="pcoded-mtext">Analytics</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
