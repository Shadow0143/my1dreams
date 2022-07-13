<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ludo Money Earning</title>
    @laravelPWA

    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.png') }}" type="image/x-icon">

</head>

<body>

    <div class="preloader" id="preloader">
        <div class="logo">
        </div>
        <div class="loader-frame">
            <div class="loader1" id="loader1">
            </div>
            <div class="circle"></div>
            <h4 class="hello">Hello</h4>
            <h6 class="wellcome">Wellcome to <span>My 1 Dreams</span></h6>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>


    <!-- ========Header Section Starts Here======== -->
    <header class="header-one">

        <div class="header-bottom mt-5">
            <div class="container">
                <div class="header-wrapper-2">
                    <div class="sticky-logo">
                        <a href="index.html">
                            <img src="{{ asset('front/assets/images/logo/sticky-logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <ul class="menu">
                        <li class="d-none d-lg-block center-logo">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('front/assets/images/logo/main-logo.png') }}" alt="logo">
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="#about-us">About us</a>
                        </li>
                        <li>
                            <a href="#result-container">Result</a>
                        </li>
                        <li>
                            <a href="#0">Account</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('login') }}">Sign In</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <div class="header-bar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========Header Section Ends Here======== -->


    <!-- ========Banner Section Starts Here======== -->
    <section class="banner-section bg_img"
        data-background="{{ asset('front/assets/images/banner/banner-bg1.png') }}">
        <div class="container">
            <div class="banner-content">
                <h1 class="title">My 1 Dreams</h1>
                <p>Ante etiam per hymenaeos dolor vitae, libero non ornare velit morbi, imperdiet
                    nullampellentesque ultricie eget vel tempor</p>
                    <a href="{{ route('playGame') }}" class="custom-button active">play now</a>
            </div>
        </div>
    </section>
    <!-- ========Banner Section Ends Here======== -->





    <!-- ========About Section Starts Here======== -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" id="about-us">
                    <div class="section-header text-left mb-0">
                        <h2 class="title mt-lg-0">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, id in nam dictum erat lorem. Libero sed quis, sem faucibus lacus
                            donec, in velit pellentesque libero, sed vulspendisse lectus id ut enim. Dui sed. Sapien
                            curabitur. Enim velit tinciduneque amet libero, nulla consectetuer torquent augue lobortis
                            inceptos rhoncus
                            nonummy. Nibh gravida sed cras, conubia urna aliquam, in platea, nisl vivamus phasellus est
                            viverra leo odio, sit magnis elit per. Aptenluptatem donec praesent magna ut, dui aliquet,
                            montes torto</p>
                        <p> euismod. Scelerisque dolor sed nonummy varius, at cursus posuere eu dui arcu quis, lectus
                            sit sollicitudin aliquam, amet purus lobortis neque tempus dapibus sodales, erat in lobortis
                            quis lacinia lectus libero. Amet mauris erat nec pellentesque nec, ac ante</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=" bg_img" data-background="assets/images/games/ludoking.png"
                        style="height: 500px; border-radius: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========About Section Ends Here======== -->





    <!-- ========How Section Starts Here======== -->
    <section class="how-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">How Can You Play</h2>
            </div>
            <div class="how-wrapper">
                <div class="how-item">
                    <div class="how-thumb">01</div>
                    <h5 class="title">Log In</h5>
                </div>
                <div class="how-item">
                    <div class="how-thumb">02</div>
                    <h5 class="title">Collect Coin</h5>
                </div>
                <div class="how-item">
                    <div class="how-thumb">03</div>
                    <h5 class="title">Choose Game</h5>
                </div>
                <div class="how-item">
                    <div class="how-thumb">04</div>
                    <h5 class="title">Play</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- ========How Section Ends Here======== -->


    <!-- ========Games Section Starts Here======== -->
    <section class="games-section padding-bottom padding-top bg-overlay bg_img"
        data-background="assets/images/games/game-bg.jpg">
        <div class="container" id="result-container">
            <div class="section-header">
                <h2 class="title">Result</h2>
            </div>
            <div class="row justify-content-center mb-40-65-none">
                <div class="col-sm-10 col-md-6 col-xl-4">
                    <div class="games-item">
                        <div class="games-thumb">
                            @if ($result)

                            @if ($result1pm)
                                <div class="col-12" id="1pm">
                                    <b>Game Time: </b> 1 PM
                                    <div class="card text-center resultdiv">
                                        {{ $result1pm->first_value }} + {{ $result1pm->second_value }} + {{ $result1pm->third_value }}
                                        =
                                        {{ $result1pm->result }}
                                    </div>
                                </div>
                            @else
                                <div class="col-12" id="1pm">
                                    <b>Game Time: </b> 1 PM
                                    <div class="card text-center resultdiv">
                                        No Result.
                                    </div>
                                </div>
                            @endif
                            @if ($result4pm)
                                <div class="col-12" id="1pm">
                                    <b>Game Time: </b> 4 PM
                                    <div class="card text-center resultdiv">
                                        {{ $result4pm->first_value }} + {{ $result4pm->second_value }} + {{ $result4pm->third_value }}
                                        =
                                        {{ $result4pm->result }}
                                    </div>
                                </div>
                            @else
                                <div class="col-12" id="1pm">
                                    <b>Game Time: </b> 4 PM
                                    <div class="card text-center resultdiv">
                                        No Result.
                                    </div>
                                </div>
                            @endif
                            @if ($result8pm)
                                <div class="col-12" id="1pm">
                                    <b>Game Time: </b> 8 PM
                                    <div class="card text-center resultdiv">
                                        {{ $result8pm->first_value }} + {{ $result8pm->second_value }} +
                                        {{ $result8pm->third_value }} =
                                        {{ $result8pm->result }}
                                    </div>
                                </div>
                            @else
                                <div class="col-12" id="1pm">
                                    <b>Game Time: </b> 8 PM
                                    <div class="card text-center resultdiv">
                                        No Result.
                                    </div>
                                </div>
                            @endif
                        @else
                            <div class="col-12 text-center text-danger " style=" padding: 20%;">
                                <h3> No result for today.</h3>
                            </div>
                        @endif
                        </div>
                        <div class="games-content">
                            <h5 class="title"><a href="#0">My 1 Dreams</a></h5>
                            <a href="{{ route('playGame') }}" class="custom-button active">play now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Games Section Ends Here======== -->

    <!-- ========Footer Section Starts Here======== -->
    <footer class="bg_img bg-lay" data-background="{{ asset('front/assets/images/footer/footer-bg.jpg') }}">
    </footer>
    <!-- ========Footer Section Ends Here======== -->

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('front/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('front/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            var galleryThumbs = new Swiper('.slider-thumbs', {
                slidesPerView: 3,
                loop: false,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                spaceBetween: 15,
            });
            var galleryTop = new Swiper('.review-slider', {
                slidesPerView: 1,
                loop: false,
                thumbs: {
                    swiper: galleryThumbs,
                },
            });
            galleryTop.controller.control = galleryThumbs;
            galleryThumbs.controller.control = galleryTop;
        })
    </script>
</body>

</html>
