@extends('customer.layout')
@section('title', "Product")


@section('css')

@endsection()


@section('body')

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Page Title Area
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="page-title-area bg-image bg-parallax2" style="background-image:url('{{ asset("customer/assets/images/header/header1.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title product-name"></h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/category">Menu</a></li>
                            <li class="breadcrumb-item active product-name"></li>
                        </ol>
                    </div>
                    <!--~~./ breadcrumb-area ~~-->
                </div>
                <!--~~./ page-header-content ~~-->
            </div>
        </div>
    </div>
    <!--~~./ end container ~~-->
</div>
<!--~~./ end page title area ~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Food Single Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="food-single-block style-three">
    <!--~~~~~ Start Single food Details ~~~~~-->
    <div class="single-food-details bg-white-smoke ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnails-wrapper-area">
                        <img src="{{ asset("customer/assets/images/foodmenu/single/three/single.png") }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-food-content-area">
                        <div class="single-food-header">
                            <h3 class="food-title product-name"></h3>
                            <div class="food-price product-prices"></div>
                        </div>
                        <div class="food-item-info">
                            <div class="description product-description">
                                <p>You think water moves fast, You should see ice. It moves like it has ande
                                    mind. Like it knows it killed the world once and got a taste for murdering.
                                    After the avalanche.</p>
                            </div>
                            <form action="#">
                                <div class="food-detail-bottom">
                                    <!--/.input-spinner-->
                                    <div class="share-and-whishlist">
                                        <a class="add-to-cart action-add-to-card" atr="Add to card" data-id="" href="#"><span class="fas fa-shopping-cart"></span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~./ end single products details ~-->

    <!--~~~~~ Start Single food Feature ~~~~~-->
    <div class="single-food-feature-black ptb-100">
        <div class="container ml-b-35">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-food-feature">
                        <div class="icon">
                            <span class="icon-food32"></span>
                        </div>
                        <div class="info">
                            <h3 class="title">Free Shipping</h3>
                            <p>Order over 99.99€</p>
                        </div>
                    </div><!-- single-food-feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-food-feature">
                        <div class="icon">
                            <span class="icon-gift3"></span>
                        </div>
                        <div class="info">
                            <h3 class="title">Return Policy</h3>
                            <p>For goods issues</p>
                        </div>
                    </div><!-- single-food-feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-food-feature">
                        <div class="icon">
                            <span class="icon-wallet2"></span>
                        </div>
                        <div class="info">
                            <h3 class="title">Secure Payments</h3>
                            <p>100% Secure & Safe</p>
                        </div>
                    </div><!-- single-food-feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-food-feature">
                        <div class="icon">
                            <span class="icon-customer-service"></span>
                        </div>
                        <div class="info">
                            <h3 class="title">24/7 Support Help </h3>
                            <p>Deticated Support</p>
                        </div>
                    </div><!-- single-food-feature -->
                </div>
            </div>
        </div>
    </div>
    <!--~./ end single food feature ~-->

    <!--~~~~~ Start Food Details Tab Area ~~~~~-->
    <div class="food-details-tab-area ptb-100 bg-white-smoke">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter-tab-area">
                        <ul class="nav nav-tabs" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#food_description"
                                    role="tab">Detail</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#food_reviews" role="tab">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <!--~./ end filter tab area ~-->

                    <div class="tab-content filter-tab-content">
                        <!--~~~~~ Start Tab Pane ~~~~~-->
                        <div class="tab-pane fade show active ml-b-5 product-detail" id="food_description"
                            role="tabpanel ">

                        </div>
                        <!--~./ end tab pane ~-->

                        <!--~~~~~ Start Tab Pane ~~~~~-->
                        <div class="tab-pane fade" id="food_reviews" role="tabpanel">
                            <div class="food-review-list">
                                <div class="food-review">
                                    <div class="rating-riview">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- rating -->
                                        <div class="d-block">
                                            <span class="review-comment">Very very good work and fast
                                                delivery</span>
                                        </div><!-- review -->
                                    </div>
                                    <div class="review-user">
                                        <p class="review-user-name">John Doe</p>
                                        <p class="review-meta">28<sup>th</sup> july 2019, New York</p>
                                    </div>
                                </div>
                                <!--food-review -->

                                <div class="food-review">
                                    <div class="rating-riview">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- rating -->
                                        <div class="d-block">
                                            <span class="review-comment">Very very good work and fast
                                                delivery</span>
                                        </div><!-- review -->
                                    </div>
                                    <div class="review-user">
                                        <p class="review-user-name">John Doe</p>
                                        <p class="review-meta">28<sup>th</sup> july 2019, New York</p>
                                    </div>
                                </div>
                                <!--food-review -->

                                <div class="food-review">
                                    <div class="rating-riview">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div><!-- rating -->
                                        <div class="d-block">
                                            <span class="review-comment">Very very good work and fast
                                                delivery</span>
                                        </div><!-- review -->
                                    </div>
                                    <div class="review-user">
                                        <p class="review-user-name">John Doe</p>
                                        <p class="review-meta">28<sup>th</sup> july 2019, New York</p>
                                    </div>
                                </div>
                                <!--food-review -->

                                <!-- see all review start -->
                                <div class="d-block">
                                    <a href="#" class="btn btn-default">See all reviews</a>
                                </div><!-- see all review end -->
                            </div>
                        </div>
                        <!--~./ end tab pane ~-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~./ end foods details tab area ~-->
</div>
<!--~~./ end food single block ~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Related Foodmenu Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="related-foodmenu-block ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title section-default text-center">
                    <h2 class="title-main">May You Like Also <span>Products</span></h2><!-- /.title-main -->
                </div><!-- /.section-title -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="related-food-carousel owl-carousel">
                    <div class="food-grid-item grid-style-three">
                        <div class="food-thumb">
                            <img src="{{ asset("customer/assets/images/foodmenu/related/three/food1.png") }}" alt="Food">
                            <div class="overlay">
                                <div class="food-cart-tools">
                                    <a href="#" class="food-cart btn btn-default">Add to cart</a>
                                    <a href="#" class="add-bookmark"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="food-info">
                            <h3 class="food-title"><a href="single-food.html">Buffalo Burger</a></h3>
                            <div class="food-price">12.<sup>99£</sup></div>
                        </div>
                    </div>
                    <!--~./ food-menu-item ~-->
                    <div class="food-grid-item grid-style-three">
                        <div class="food-thumb">
                            <img src="{{ asset("customer/assets/images/foodmenu/related/three/food2.png") }}" alt="Food">
                            <div class="overlay">
                                <div class="food-cart-tools">
                                    <a href="#" class="food-cart btn btn-default">Add to cart</a>
                                    <a href="#" class="add-bookmark"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="food-info">
                            <h3 class="food-title"><a href="single-food.html">Chilli Burger</a></h3>
                            <div class="food-price">12.<sup>99£</sup></div>
                        </div>
                    </div>
                    <!--~./ food-menu-item ~-->
                    <div class="food-grid-item grid-style-three">
                        <div class="food-thumb">
                            <img src="{{ asset("customer/assets/images/foodmenu/related/three/food3.png") }}" alt="Food">
                            <div class="overlay">
                                <div class="food-cart-tools">
                                    <a href="#" class="food-cart btn btn-default">Add to cart</a>
                                    <a href="#" class="add-bookmark"><span class="icon-heart"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="food-info">
                            <h3 class="food-title"><a href="single-food.html">Chicken Burger</a></h3>
                            <div class="food-price">12.<sup>99£</sup></div>
                        </div>
                    </div>
                    <!--~./ food-menu-item ~-->
                </div>
            </div>
            <div class="col-12">
                <div class="carousel-nav-text nav-center pd-t-70">
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
    </div>
</div>
<!--~~./ end related foodmenu block ~~-->
@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/product.js') }}"></script>
@endsection()