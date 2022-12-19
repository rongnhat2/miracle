@extends('customer.layout')
@section('title', "About Us")


@section('css')

@endsection()


@section('body')

<div class="page-title-area bg-image bg-parallax2" style="background-image: url('{{ asset("customer/assets/images/bg/register-bg.jpg") }}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">About Us</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">What We Do</li>
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

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Our Story Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="our-story-block style-two ptb-100">
    <div class="container">
        <!-- Title Row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="mock-up-thumb md-mrb-50">
                    <img src="{{ asset("customer/assets/images/about/about4.jpg") }}" alt="story Mock" />
                    <div class="paper-element">
                        <img src="{{ asset("customer/assets/images/element/papers.png") }}" alt="papers">
                    </div>
                    <div class="video-btn-area">
                        <a href="https://player.vimeo.com/video/192089758" class="video-btn video-popup">
                            <span class="icon-play3"></span>
                        </a>
                    </div>
                </div><!-- /.mock-up-block -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="section-title section-default-two">
                    <h2 class="title-main"><span>Discover</span> Our History</h2><!-- /.title-main -->
                </div><!-- /.section-title -->
                <div class="story-content">
                    <p>A barbecue grill is a device that cooks food by applying heat from below. There are
                        several varieties of grills, with most falling into one of two categories gas-fueled or
                        charcoal. There is debate over which method yields superior results A barbecue grill is
                        a device that cooks device that cooks food by applying heat from below. There are
                        several varieties of grills, with most falling into one of two categories gas-fueled or
                        charcoal. There is debate over which method food by applying heat from below. There are
                        several varieties of grills, with most falling into one of two categories gas-fueled or
                        charcoal story with us. </p>
                    <div class="btn-group-default">
                        <a href="#" class="btn btn-default">OUR STORY</a>
                        <a href="#" class="btn btn-default btn-black">FIND OUR STORES</a>
                    </div>
                </div><!-- /.story-content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!--~~./ end our story block ~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Promo Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="promo-block ptb-150 bg-image bg-overlay bg-parallax2"
    style="background-image:url('{{ asset("customer/assets/images/bg/promo-bg2.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="promo-content text-white text-center">
                    <h2 class="promo-title">We Create Sweet Memories</h2><!-- /.promo-title -->
                    <h4 class="promo-subtitle">the best restaurant in the city</h4><!-- /.promo-title -->
                    <a href="#" class="btn btn-default">discover more</a>
                </div><!-- /.promo-content-->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!--~~./ end promo block ~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start News Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="news-block style-one ptb-100 bg-image"
    style="background-image:url('{{ asset("customer/assets/images/bg/bg-pattent1.jpg") }}')">
    <div class="container ml-b-60">
        <div class="row justify-content-between align-items-end">
            <div class="col-12">
                <div class="section-title section-default-two text-center">
                    <h2 class="title-main"><span>Follow</span> News & Events</h2><!-- /.title-main -->
                </div><!-- /.section-title -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <article class="post post-gird">
                    <figure class="post-thumb">
                        <a href="blog-single.html">
                            <img src="{{ asset("customer/assets/images/blog/post/grid/1.jpg") }}" alt="Blog Image" />
                        </a>
                    </figure><!-- /.post-thumb -->
                    <div class="post-details">
                        <div class="entry-meta-content">
                            <div class="entry-cat">
                                <a href="#">events</a>
                            </div>
                            <!--./ entry-date -->
                            <div class="entry-date">
                                <span>March 2020</span>
                            </div>
                            <!--./ entry-date -->
                        </div>
                        <!--./ entry-meta-content -->
                        <h2 class="entry-title"><a href="blog-single.html">The benefits of Buffalo Meat</a></h2>
                        <!-- /.entry-title -->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod tempor
                                incidi labore et dolore and agna aliqua espana.</p>
                        </div>
                    </div><!-- /.post-details -->
                </article><!-- /.post -->
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="post post-gird">
                    <figure class="post-thumb">
                        <a href="blog-single.html">
                            <img src="{{ asset("customer/assets/images/blog/post/grid/2.jpg") }}" alt="Blog Image" />
                        </a>
                    </figure><!-- /.post-thumb -->
                    <div class="post-details">
                        <div class="entry-meta-content">
                            <div class="entry-cat">
                                <a href="#">events</a>
                            </div>
                            <!--./ entry-date -->
                            <div class="entry-date">
                                <span>March 2020</span>
                            </div>
                            <!--./ entry-date -->
                        </div>
                        <!--./ entry-meta-content -->
                        <h2 class="entry-title"><a href="blog-single.html">Nuts may be tiny</a></h2>
                        <!-- /.entry-title -->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod tempor
                                incidi labore et dolore and agna aliqua espana.</p>
                        </div>
                    </div><!-- /.post-details -->
                </article><!-- /.post -->
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="post post-gird">
                    <figure class="post-thumb">
                        <a href="blog-single.html">
                            <img src="{{ asset("customer/assets/images/blog/post/grid/1.jpg") }}" alt="Blog Image" />
                        </a>
                    </figure><!-- /.post-thumb -->
                    <div class="post-details">
                        <div class="entry-meta-content">
                            <div class="entry-cat">
                                <a href="#">events</a>
                            </div>
                            <!--./ entry-date -->
                            <div class="entry-date">
                                <span>March 2020</span>
                            </div>
                            <!--./ entry-date -->
                        </div>
                        <!--./ entry-meta-content -->
                        <h2 class="entry-title"><a href="blog-single.html">Herbs that naturally detox</a></h2>
                        <!-- /.entry-title -->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod tempor
                                incidi labore et dolore and agna aliqua espana.</p>
                        </div>
                    </div><!-- /.post-details -->
                </article><!-- /.post -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!--~~./ end news block ~~-->

@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()