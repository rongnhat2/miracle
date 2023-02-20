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
        <ul class="nav nav-tabs category-list" role="tablist">

        </ul>
    </div>
    <!--~./ end filter foodmenu tab ~-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-content filter-foodmenu-tab-content pd-t-100">
                    <!--~~~~~ Start Tab Pane ~~~~~-->
                    <div class="tab-pane fade active show" id="foodmenu1" role="tabpanel" data-animate="hg-fadeInUp">
                        <div class="row justify-content-center product-list-item">
                            
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
    <script src="{{ asset('customer/assets/js/page/category.js') }}"></script>
@endsection()