@extends('customer.layout')
@section('title', "News")


@section('css')

@endsection()


@section('body')
<div class="page-title-area bg-image bg-parallax2" style="background-image:url('{{ asset("customer/assets/images/header/header1.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">Blog</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blog</li>
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
    Start Blog Page Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="blog-page-block ptb-100">
    <div class="container">
        <!-- Content Row -->
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Blog Items -->
                <div class="blog-latest-items row">
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
                                <h2 class="entry-title"><a href="blog-single.html">The benefits of Buffalo
                                        Meat</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
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
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/3.jpg") }}" alt="Blog Image" />
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
                                <h2 class="entry-title"><a href="blog-single.html">Herbs that naturally
                                        detox</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/4.jpg") }}" alt="Blog Image" />
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
                                <h2 class="entry-title"><a href="blog-single.html">The benefits of Buffalo
                                        Meat</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/5.jpg") }}" alt="Blog Image" />
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
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/6.jpg") }}" alt="Blog Image" />
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
                                <h2 class="entry-title"><a href="blog-single.html">Herbs that naturally
                                        detox</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/7.jpg") }}" alt="Blog Image" />
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
                                <h2 class="entry-title"><a href="blog-single.html">The benefits of Buffalo
                                        Meat</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/8.jpg") }}" alt="Blog Image" />
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
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <article class="post post-gird">
                            <figure class="post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset("customer/assets/images/blog/post/grid/9.jpg") }}" alt="Blog Image" />
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
                                <h2 class="entry-title"><a href="blog-single.html">Herbs that naturally
                                        detox</a></h2><!-- /.entry-title -->
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit ametcon sectetur adipisicinse elit, sed doiusmod
                                        tempor incidi labore et dolore and agna aliqua espana.</p>
                                </div>
                            </div><!-- /.post-details -->
                        </article><!-- /.post -->
                    </div>
                </div><!-- /.blog-latest-items -->

                <!--~~~~~ Start Paging Navigation ~~~~~-->
                <nav class="paging-navigation pagination-center pd-t-20">
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
            </div><!--  /.col-lg-8 -->
        </div><!--  /.row -->
    </div><!--  /.container -->
</div>
<!--~~./ end blog page ~~-->

@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()