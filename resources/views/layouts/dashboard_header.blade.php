

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
    <meta name="theme-color" content="#317EFB"/>
    <meta name="author" content="#">

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
                                        @if(Auth::user()->user_type=='superAdmin')
                                        <li class="">
                                            <a href="{{ route('master') }}">
                                                <span class="pcoded-mtext">Masters</span>
                                            </a>
                                        </li>
                                        @endif
                                        @if(Auth::user()->user_type=='Master')
                                        <li class="">
                                            <a href="{{ route('member') }}">
                                                <span class="pcoded-mtext">Members</span>
                                            </a>
                                        </li>
                                        @endif
                                        <li class="">
                                            <a href="{{ route('playGame') }}">
                                                <span class="pcoded-mtext">Play Game</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
