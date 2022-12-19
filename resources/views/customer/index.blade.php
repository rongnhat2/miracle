@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body')

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="main-slider style-four">
            <div class="bg-shape-top bg-image" style="background-image:url('{{ asset("customer/assets/images/shape/shape-top4.png") }}')"></div>
            <div id="sliderCarousel" class="carousel slide carousel-fade h-100" data-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <div class="slideZoom bg-image bg-overlay h-100"
                            style="background-image:url('{{ asset("customer/assets/images/slider/slider4.jpg") }}')"></div>
                        <div class="single-slide position-absolute w-100 h-100 d-flex align-items-center">
                            <div class="container">
                                <div class="slide-caption text-white text-center delay-1s" data-animate="hg-fadeInUp">
                                    <div class="slide-icon"><span class="icon-fish"></span></div>
                                    <h1 class="slider-title delay-2s" data-animate="hg-fadeInUp">You Can't Beat Our
                                        Seafood</h1>
                                    <div class="divider delay-3s" data-animate="hg-fadeInUp">
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                    </div>
                                    <div class="btn-group-default delay-4s" data-animate="hg-fadeInUp">
                                        <a href="food-menu-v2.html" class="btn btn-default btn-primary btn-white">OUR
                                            Menu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.slider-item -->
                    <div class="carousel-item h-100">
                        <div class="slideZoom bg-image bg-overlay h-100"
                            style="background-image:url('{{ asset("customer/assets/images/slider/slider1.jpg") }}')"></div>
                        <div class="single-slide position-absolute w-100 h-100 d-flex align-items-center">
                            <div class="container">
                                <div class="slide-caption text-white text-center delay-1s" data-animate="hg-fadeInUp">
                                    <div class="slide-icon"><span class="icon-fish"></span></div>
                                    <h1 class="slider-title delay-2s" data-animate="hg-fadeInUp">You Can't Beat Our
                                        Seafood</h1>
                                    <div class="divider delay-3s" data-animate="hg-fadeInUp">
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                    </div>
                                    <div class="btn-group-default delay-4s" data-animate="hg-fadeInUp">
                                        <a href="food-menu-v2.html" class="btn btn-default btn-primary btn-white">OUR
                                            Menu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.slider-item -->
                </div>
                <div class="carousel-nav-text slide-nav-center">
                    <a class="btn-links btn-prev" href="#sliderCarousel" role="button" data-slide="prev">
                        <span>Prev</span>
                    </a>
                    <a class="btn-links btn-next" href="#sliderCarousel" role="button" data-slide="next">
                        <span>Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--~~./ end main slider ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Chef Message Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="chef-message-block style-two">
            <div class="container">
                <!-- Title Row -->
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="message-content-area pd-t-80 pd-b-90">
                            <div class="section-title section-default-two">
                                <h2 class="title-main"><span>Discover</span> Chef Messags</h2><!-- /.title-main -->
                            </div><!-- /.section-title -->
                            <div class="message-content">
                                <p>A barbecue grill is a device that cooks food by applying heat from below. There are
                                    several varieties of grills, with most falling into one There are several varieties
                                    of grills There are several varieties of grills of two categories charcoal. There is
                                    debate over which method yields superior results A barbecue grill is a device that
                                    cooks food by applying heat from below. e that cooks food by applying heat from
                                    below. </p>
                                <div class="chef-sign">
                                    <img src="{{ asset("customer/assets/images/others/sign.png") }}" alt="Sign">
                                </div>
                                <div class="btn-group-default">
                                    <a href="#" class="btn btn-default">OUR STORY</a>
                                    <a href="#" class="btn btn-default btn-black">FIND OUR STORES</a>
                                </div>
                            </div><!-- /.section-content -->
                        </div>
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5">
                        <div class="chef-thumb">
                            <img src="{{ asset("customer/assets/images/others/chef2.png") }}" alt="Chef Mock" />
                        </div><!-- /.chef-block -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end chef message block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Promo Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="promo-block ptb-100 bg-image bg-parallax1"
            style="background-image:url('{{ asset("customer/assets/images/bg/promo-bg6.jpg") }}')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="promo-content text-white text-center">
                            <h2 class="promo-title">We Create Sweet Memories</h2><!-- /.promo-title -->
                            <h4 class="promo-subtitle">the best restaurant in the city</h4><!-- /.promo-title -->
                            <div class="video-btn-area">
                                <a href="https://player.vimeo.com/video/192089758" class="video-btn video-popup">
                                    <span class="icon-play3"></span>
                                </a>
                                <span class="text">restaurant intro</span>
                            </div>
                        </div><!-- /.promo-content-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end promo block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Food Menu Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="food-menu-block style-six ptb-100 bg-image"
            style="background-image:url('{{ asset("customer/assets/images/bg/bg-pattent3.jpg") }}')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title section-default-two text-center">
                            <h2 class="title-main"><span>Browse</span> Popular Dishes</h2><!-- /.title-main -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div>
            <div class="container-fluid no-gutters">
                <div class="row">
                    <div class="col-12">
                        <div class="foodmenu_carousel_two owl-carousel">
                            
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-nav-text nav-center">
                            <button class="btn-links btn-prev">
                                <span>prev</span>
                            </button>
                            <button class="btn-links btn-next">
                                <span>next</span>
                            </button>
                        </div>
                        <!--~./ end carousel nav text ~-->
                    </div>
                </div>
            </div><!-- /.container -->
        </div>
        <!--~~./ end pricing block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Special Food Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="special-food-block bg-overlay bg-parallax2 bg-image ptb-100"
            style="background-image:url('{{ asset("customer/assets/images/bg/specialfood-bg.jpg") }}')">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-9 col-md-9">
                        <div class="section-title section-default-two text-white">
                            <h2 class="title-main"><span>Hot Offer</span> Today Special</h2><!-- /.title-main -->
                        </div><!-- /.section-title -->
                    </div><!-- /.col-lg-9 -->
                    <div class="col-lg-3 col-md-3">
                        <div class="button-text-right">
                            <a href="#" class="btn btn-default btn-primary btn-white">view all</a>
                        </div>
                        <!--~./ end carousel nav text ~-->
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="special-food-content">
                            <div class="special-food-bg bg-image"
                                style="background-image:url('{{ asset("customer/assets/images/bg/specialfood-left.jpg") }}')"></div>
                            <div class="special-food-content-inner">
                                <div class="special-food-content-text">
                                    <h3 class="food-title">Shrimp & Crawfish Fondeaux</h3>
                                    <div class="food-price"><del>114.<sup>99£</sup></del> 82.<sup>99£</sup></div>
                                    <p>A barbecue grill is a device that cooks food by applying heat from below. There
                                        are several that cooks food by applying heat from below.</p>
                                    <div class="btn-group-default">
                                        <a href="#" class="btn btn-default btn-black">ORDER NOW</a>
                                        <a href="#" class="btn btn-default">ADD TO CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~./ end special food block ~~-->

        <div class="food-menu-block pd-b-100">

            <!--~./ end filter foodmenu tab ~-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content filter-foodmenu-tab-content pd-t-100">
                            <!--~~~~~ Start Tab Pane ~~~~~-->
                            <div class="tab-pane fade active show hg-fadeInUp animated" id="foodmenu2" role="tabpanel" data-animate="hg-fadeInUp" style="visibility: visible;">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="food-grid-item grid-style-five gird-style">
                                            <div class="food-thumb">
                                                <img src="assets/images/foodmenu/menu14/food1.jpg" alt="Food">
                                                <span class="cat-status popular">popular</span>
                                            </div>
                                            <div class="food-info">
                                                <h3 class="food-title"><a href="single-food.html">Mozzarella Sticks</a>
                                                </h3>
                                                <div class="food-footer-info">
                                                    <div class="food-price">10.<sup>00£</sup></div>
                                                    <div class="rating">
                                                        <ul class="list">
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li><span class="fas fa-star"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="food-info-content">
                                                    <p>A barbecue grill is a device that cooks food by applying heat
                                                        from below. There are several varieties of grills</p>
                                                    <a class="read-more" href="#">Buy now <span class="icon-next4"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--~./ food-menu-item ~-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="food-grid-item grid-style-five gird-style">
                                            <div class="food-thumb">
                                                <img src="assets/images/foodmenu/menu14/food2.jpg" alt="Food">
                                            </div>
                                            <div class="food-info">
                                                <h3 class="food-title"><a href="single-food.html">Margreta Pizza </a>
                                                </h3>
                                                <div class="food-footer-info">
                                                    <div class="food-price">10.<sup>00£</sup></div>
                                                    <div class="rating">
                                                        <ul class="list">
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li><span class="fas fa-star"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="food-info-content">
                                                    <p>A barbecue grill is a device that cooks food by applying heat
                                                        from below. There are several varieties of grills</p>
                                                    <a class="read-more" href="#">Buy now <span class="icon-next4"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--~./ food-menu-item ~-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="food-grid-item grid-style-five gird-style">
                                            <div class="food-thumb">
                                                <img src="assets/images/foodmenu/menu14/food3.jpg" alt="Food">
                                                <span class="cat-status recommended">recommended</span>
                                            </div>
                                            <div class="food-info">
                                                <h3 class="food-title"><a href="single-food.html">Pasta Salamon</a></h3>
                                                <div class="food-footer-info">
                                                    <div class="food-price">10.<sup>00£</sup></div>
                                                    <div class="rating">
                                                        <ul class="list">
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li><span class="fas fa-star"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="food-info-content">
                                                    <p>A barbecue grill is a device that cooks food by applying heat
                                                        from below. There are several varieties of grills</p>
                                                    <a class="read-more" href="#">Buy now <span class="icon-next4"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--~./ food-menu-item ~-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="food-grid-item grid-style-five gird-style">
                                            <div class="food-thumb">
                                                <img src="assets/images/foodmenu/menu14/food4.jpg" alt="Food">
                                                <span class="cat-status topseller">Top Seller</span>
                                            </div>
                                            <div class="food-info">
                                                <h3 class="food-title"><a href="single-food.html">Spinach &amp; Artichoke
                                                        Dip </a></h3>
                                                <div class="food-footer-info">
                                                    <div class="food-price">10.<sup>00£</sup></div>
                                                    <div class="rating">
                                                        <ul class="list">
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li class="yellow"><span class="fas fa-star"></span></li>
                                                            <li><span class="fas fa-star"></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="food-info-content">
                                                    <p>A barbecue grill is a device that cooks food by applying heat
                                                        from below. There are several varieties of grills</p>
                                                    <a class="read-more" href="#">Buy now <span class="icon-next4"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--~./ food-menu-item ~-->
                                    </div>
                                </div>
                            </div>
                            <!--~./ end tab pane ~-->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Reservation Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="reservation-block style-three bg-overlay bg-parallax2 bg-image"
            style="background-image:url('{{ asset("customer/assets/images/bg/reservation-bg3.jpg") }}')">
            <div class="container">
                <div class="row justify-content-between mx-md-n5">
                    <div class="col-lg-4 px-md-5">
                        <div class="res-opening-time">
                            <div class="res-opening-time-inner">
                                <div class="section-title text-white section-default-two text-center">
                                    <h2 class="title-main"><span>Opening</span> Time</h2><!-- /.title-main -->
                                </div><!-- /.section-title -->
                                <div class="icon-divider">
                                    <span class="icon-fish"></span>
                                </div>
                                <div class="opening-time-group">
                                    <h2 class="title">Monday - Friday</h2>
                                    <h3 class="time">10.<sup>00 a.m</sup> - 23.<sup>00 p.m</sup>
                                    </h3>
                                </div>
                                <div class="opening-time-group">
                                    <h2 class="title">saturday - sunday</h2>
                                    <h3 class="time">10.<sup>00 a.m</sup> - 18.<sup>00 p.m</sup>
                                    </h3>
                                </div>
                                <div class="divider">
                                    <span class="icon-star-empty"></span>
                                    <span class="icon-star-empty"></span>
                                    <span class="icon-star-empty"></span>
                                </div>
                                <div class="contact-info">
                                    <h2 class="title">RESERVATION PHONE</h2>
                                    <h3 class="contact-no">+34 1245678910</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 px-md-5">
                        <div class="reservation-form-area ptb-100">
                            <div class="section-title text-white section-default-two text-center">
                                <h2 class="title-main"><span>Make</span> Reservation</h2><!-- /.title-main -->
                            </div><!-- /.section-title -->
                            <form action="reser-process.php" method="post" class="reservation-form" id="reservation-forms">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-controllar" name="name2" placeholder="Full Name">
                                        </div><!-- /.form-group -->
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-controllar" name="email2" placeholder="Email Address">
                                        </div><!-- /.form-group -->
                                    </div>                                    

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-controllar" name="phone" placeholder="Phone Number">
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <select name="occasion" class="select-custom">
                                                <option value="">Occasion</option>
                                                <option value="Occasion 1">Occasion 1</option>
                                                <option value="Occasion 2">Occasion 2</option>
                                                <option value="Occasion 3">Occasion 3</option>
                                                <option value="Occasion 4">Occasion 4</option>
                                                <option value="Occasion 5">Occasion 5</option>
                                                <option value="Occasion 6">Occasion 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <select name="food" class="select-custom">
                                                <option value="">Preferred Food</option>
                                                <option value="Food 1">Food 1</option>
                                                <option value="Food 2">Food 2</option>
                                                <option value="Food 3">Food 3</option>
                                                <option value="Food 4">Food 4</option>
                                                <option value="Food 5">Food 5</option>
                                                <option value="Food 6">Food 6</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <select name="branch" class="select-custom">
                                                <option value="">Branch</option>
                                                <option value="Branch 1">Branch 1</option>
                                                <option value="Branch 2">Branch 2</option>
                                                <option value="Branch 3">Branch 3</option>
                                                <option value="Branch 4">Branch 4</option>
                                                <option value="Branch 5">Branch 5</option>
                                                <option value="Branch 6">Branch 6</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <select name="personnum" class="select-custom">
                                                <option value="">Number Of Persons</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <select name="booking_type" class="select-custom">
                                                <option value="">Booking Type</option>
                                                <option value="type_1">Type 1</option>
                                                <option value="type_2">Type 2</option>
                                                <option value="type_3">Type 3</option>
                                                <option value="type_4">Type 4</option>
                                                <option value="type_5">Type 5</option>
                                                <option value="type_6">Type 6</option>
                                                <option value="type_7">Type 7</option>
                                                <option value="type_8">Type 8</option>
                                                <option value="type_9">Type 9</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group date">
                                            <input data-toggle="datepicker" name="date" type="text" class="form-controllar"
                                                placeholder="Booking Date">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-controllar" name="comment2" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="loading2"></div>
                                        <button type="submit" id="reser-submit class="btn btn-default btn-white">Book Now</button>
                                    </div>
                                </div>
                            </form>
                            <div class="done2">
                                <strong>Thank you!</strong> We have received your message. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~./ end reservation block ~~-->


@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()