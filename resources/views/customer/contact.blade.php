@extends('customer.layout')
@section('title', "Contact")


@section('css')

@endsection()


@section('body')

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Page Title Area
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="page-title-area bg-image bg-parallax2"
    style="background-image:url('{{ asset("customer/assets/images/header/header1.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">Contact Us</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
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
    Start Contact Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="contact-block" class="contact-block">
    {{-- <div id="contact_map"></div> --}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7860586.295966273!2d102.50446916657008!3d15.847297013140706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac71294bf0ab%3A0xc7e2d20e5e04a9da!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBCw6FjaCBLaG9hIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1671441260073!5m2!1svi!2s" width="100%" height="100%" style="border:0;height: 770px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="contact-form-area-outer">
        <div class="contact-form-area">
            <div class="contact-form-area-inner">
                <h2 class="contact-heading">get in touch</h2>
                <form method="post" class="contact-form" action="process.php" id="contect-forms">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Full Name" />
                            </div>
                        </div><!-- /.col-12 -->
                        <div class="col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email Address" />
                            </div>
                        </div><!-- /.col-12 -->
                        <div class="col-12">
                            <div class="form-group">
                                <input name="subject" type="text" placeholder="Subject" />
                            </div>
                        </div><!-- /.col-12 -->
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="comment" placeholder="Message"></textarea>
                            </div>
                        </div><!-- /.col-12 -->

                        <div class="col-12 text-center">
                            <div class="loading"></div>
                            <button type="submit" id="submit" class="btn btn-default btn-primary btn-white btn-contact">Book
                                Now</button>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-form -->

                <div class="done mrt-15">
                    <strong>Thank you!</strong> We have received your message. 
                </div>
            </div>
        </div><!-- /.contact-form-area -->
    </div>
</div>
<!--~~./ end contact block ~~-->

@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()