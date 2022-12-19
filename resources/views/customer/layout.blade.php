<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Unlimited Foods & Restaurants HTML5 Template">
    <meta name="keywords"
        content="HTML5, Template, Design, asian food, bakery, burger, cafe, chocolate, coffee, delivery, dessert, donuts, drinks, farm, fast food, food, organic, restaurant " />
    <meta name="author" content="creative-wp">

    <!-- Titles
    ================================================== -->
    <title>Deliciousa | @yield('title') </title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset("customer/assets/images/favicon.ico") }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset("customer/assets/images/android-icon-72x72.png") }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset("customer/assets/images/apple-icon-144x144.png") }}">

    <!-- Custom Font
    ================================================== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Aguafina+Script&family=Poppins:wght@300;400;500;600;700&family=Oswald:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset("customer/assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/swiper.min.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/pagepilling.min.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/simple-scrollbar.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/datepicker.min.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/fontawesome.all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/icomoon.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("customer/assets/css/color/color-seven.css") }}">

    <script src="{{ asset("customer/assets/js/modernizr.min.js") }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div><!-- /preloader-icon -->
        </div><!-- /preloader-inner -->
    </div><!-- /preloader -->

    <div class="site-content">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header class="site-header default-header-style header-absolute intro-element">
            <div class="header-top-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="intro-socail-share">
                                <div class="share-alt"><span class="fa fa-share-alt"></span></div>
                                <div class="socail-share">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-tripadvisor"></span></a>
                                </div>
                            </div><!-- /.intro-socail-share -->
                        </div>
                        <div class="col-4">
                            <div class="site-branding">
                                <a href="index02.html">
                                    <img src="{{ asset("customer/assets/images/logo/logo10.png") }}" alt="Site Logo" />
                                </a>
                            </div><!-- /.site-branding -->
                        </div>
                        <div class="col-4">
                            <div class="header-right-area">
                                <div class="intro-content-info"><span>Call free:</span> 001-23456789</div>

                                <div class="header-card-area">
                                    <a href="#">
                                        <span class="icon-paper-bag"></span>
                                        <sup>2</sup>
                                    </a>
                                </div>
                                <!--~./ header card area ~-->

                                <div class="header-card-area">
                                    <a href="{{ route("customer.view.login") }}">
                                        <span class="icon-user-silhouette"></span>
                                    </a>
                                </div>
                            </div><!-- /.header-top-right-area -->
                        </div>
                    </div>
                </div>
            </div><!-- /.header-top-area -->

            <div class="navigation-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="site-navigation">
                                <nav class="navigation">
                                    <div class="menu-wrapper">
                                        <div class="menu-content">
                                            <ul class="mainmenu">
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About Us</a></li>
                                                <li><a href="/category">Product</a></li>
                                                <li><a href="/news">News</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul> <!-- /.menu-list -->
                                        </div> <!-- /.hours-content-->
                                    </div><!-- /.menu-wrapper -->
                                </nav>
                            </div><!-- /.site-navigation -->
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.navigation-area -->

            <div class="mobile-sidebar-menu sidebar-menu">
                <div class="overlaybg"></div>
            </div>
        </header>
        <!--~~./ end site header ~~-->
        <!--~~~ Sticky Header ~~~-->
        <div id="sticky-header"></div>
        <!--~./ end sticky header ~-->

        @yield('body')

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class="site-footer footer-style-four">
            <div class="footer-top-area pd-t-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo text-center">
                                <a href="index.html"><img src="{{ asset("customer/assets/images/logo/footer-logo6.png") }}" alt="Logoo"></a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="widget bt-instafeed-widget">
                                <ul id="instafeed">
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img1.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img2.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img3.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img4.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img5.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img6.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img7.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                    <li class="feed-item">
                                        <a href="#">
                                            <img src="{{ asset("customer/assets/images/widget/instagram/5/img8.jpg") }}" alt="#">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/.widget-instafeed-->
                        </div>
                    </div>
                </div>
            </div>
            <!--~~./ footer top area ~~-->

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                Start Newsletter Block
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="newsletter-block style-one ptb-100 bg-overlay bg-image bg-parallax2"
                style="background-image:url('{{ asset("customer/assets/images/bg/newsletter-bg2.jpg") }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="section-title section-default-two text-white">
                                <h2 class="title-main"><span>Subscribe</span> Newsletter</h2><!-- /.title-main -->
                            </div><!-- /.section-title -->
                        </div>
                        <div class="col-lg-9">
                            <div class="subscribe-form">
                                <form class="dv-form" id="mc-form" action="subscription.php" method="post">
                                    <div class="form-group">
                                        <input id="mc-name" name="name" placeholder="Full Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="mc-email" name="EMAIL" placeholder="Email Address" type="email">
                                    </div>
                                    <button class="btn btn-default" name="Subscribe" id="subscribe-btn"
                                        type="submit"><span class="fa fa-paper-plane"></span></button>
                                </form>
                            </div><!-- /.subscribe-form -->
                        </div>
                    </div>
                </div><!-- /.container -->
            </div>
            <!--~~./ end newsletter block ~~-->

            <div class="footer-bottom-area pd-t-20 pd-b-20">
                <div class="container">
                    <div class="row align-items-center flex-wrap-reverse">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>© 2020 - Deliciosa Seafood Powered By <a href="#0">Creative-wp</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="footer-social text-right">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                            </ul><!--  /.footer-social -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--~./ end site footer ~-->
    </div>
    <!--~~./ end site content ~~-->

    <!-- All The JS Files
    ================================================== -->
    <script src="{{ asset("customer/assets/js/jquery.js") }}"></script>
    <script src="{{ asset("customer/assets/js/popper.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/theia-sticky-sidebar.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/ResizeSensor.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/swiper.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/pagepilling.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/jarallax.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/masonry.pkgd.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/jquery.fitvids.js") }}"></script>
    <script src="{{ asset("customer/assets/js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/simple-scrollbar.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/scrolla.jquery.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/wan-spinner.js") }}"></script>
    <script src="{{ asset("customer/assets/js/jquery.nice-select.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/kinetic.js") }}"></script>
    <script src="{{ asset("customer/assets/js/jquery.final-countdown.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/datepicker.min.js") }}"></script>
    <script src="{{ asset("customer/assets/js/main.js") }}"></script><!-- main-js -->
    <script src="{{ asset("customer/assets/js/api.js") }}"></script><!-- api-js -->
    @yield('js')
</body>

</html>