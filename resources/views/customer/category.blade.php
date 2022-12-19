@extends('customer.layout')
@section('title', "Category")


@section('css')

@endsection()


@section('body')

<div class="page-title-area bg-image bg-parallax2" style="background-image:url('{{ asset("customer/assets/images/header/header1.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">The Menu</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Menu</li>
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

<div class="food-menu-block pd-b-100">
    <div class="filter-foodmenu-tab style-four bg-image"
        style="background-image:url('{{ asset("customer/assets/images/bg/bg-pattent2.jpg") }}')">
        <ul class="nav nav-tabs" role="tablist">
            <li>
                <a data-toggle="tab" href="#foodmenu1" role="tab"><span class=" icon-beef"></span>Beef</a>
            </li>
            <li>
                <a class="active" data-toggle="tab" href="#foodmenu2" role="tab"><span
                        class="icon-chicken"></span> Chicken</a>
            </li>
            <li>
                <a data-toggle="tab" href="#foodmenu3" role="tab"><span class="icon-big-crab2"></span>
                    Seafood</a>
            </li>
            <li>
                <a data-toggle="tab" href="#foodmenu4" role="tab"><span class="icon-fish"></span> Vegetarian</a>
            </li>
            <li>
                <a data-toggle="tab" href="#foodmenu5" role="tab"><span class="icon-fruit2"></span> Fruits</a>
            </li>
            <li>
                <a data-toggle="tab" href="#foodmenu6" role="tab"><span class="icon-french-fries"></span>
                    Sides</a>
            </li>
        </ul>
    </div>
    <!--~./ end filter foodmenu tab ~-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content filter-foodmenu-tab-content pd-t-100">
                    <!--~~~~~ Start Tab Pane ~~~~~-->
                    <div class="tab-pane fade active show" id="foodmenu1" role="tabpanel" data-animate="hg-fadeInUp">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food1.jpg") }}" alt="Food">
                                        <span class="cat-status popular">popular</span>
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Cheese Croissant</a>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food2.jpg") }}" alt="Food">
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Margreta Pizza </a>
                                        </h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">14.<sup>00£</sup></div>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food3.jpg") }}" alt="Food">
                                        <span class="cat-status recommended">recommended</span>
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Pasta Salamon </a>
                                        </h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">12.<sup>00£</sup></div>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food4.jpg") }}" alt="Food">
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Spinach & Artichoke
                                                Dip</a></h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">15.<sup>00£</sup></div>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food5.jpg") }}" alt="Food">
                                        <span class="cat-status topseller">Top Seller</span>
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Boneless Wings</a>
                                        </h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">20.<sup>00£</sup></div>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food6.jpg") }}" alt="Food">
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Chicken Quesadilla</a>
                                        </h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">8.<sup>00£</sup></div>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food7.jpg") }}" alt="Food">
                                        <span class="cat-status sale">sale</span>
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Wonton Tacos </a></h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">14.<sup>00£</sup></div>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food8.jpg") }}" alt="Food">
                                        <span class="cat-status popular">popular</span>
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Pasta Salamon</a></h3>
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
                                    </div>
                                </div>
                                <!--~./ food-menu-item ~-->
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="food-grid-item grid-style-five">
                                    <div class="food-thumb">
                                        <img src="{{ asset("customer/assets/images/foodmenu/menu12/food9.jpg") }}" alt="Food">
                                        <span class="cat-status spicy">spicy</span>
                                    </div>
                                    <div class="food-info">
                                        <h3 class="food-title"><a href="{{ route("customer.view.product") }}">Brew Pub </a></h3>
                                        <div class="food-footer-info">
                                            <div class="food-price">22.<sup>00£</sup></div>
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
        <div class="row">
            <div class="col-12">
                <!--~~~~~ Start Paging Navigation ~~~~~-->
                <nav class="paging-navigation pagination-center pd-t-70">
                    <ul class="nav-links">
                        <li class="nav-previous">
                            <!-- disabled class add when no pagination -->
                            <a href="#">Previous</a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#" class="page-numbers">2</a></li>
                        <li><a href="#" class="page-numbers">3</a></li>
                        <li><a href="#" class="page-numbers">4</a></li>
                        <li class="nav-next">
                            <a href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <!--~./ end paging navigation ~-->
            </div>
        </div>
    </div><!-- /.container -->
</div>





@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()