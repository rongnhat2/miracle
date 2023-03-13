@extends('customer.layout')
@section('title', "Register")


@section('css')

@endsection()


@section('body')

    <div class="page-title-area bg-image bg-parallax2" style="background-image: url('{{ asset("customer/assets/images/header/header1.jpg") }}'); z-index: 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content text-center">
                        <div class="page-header-caption">
                            <h2 class="page-title">Sign Up</h2>
                        </div>
                        <div class="breadcrumb-area">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Register</li>
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

    <div class="user-register-block ptb-100 bg-image bg-overlay bg-parallax2" style="background-image: url('{{ asset("customer/assets/images/bg/register-bg.jpg") }}'); z-index: 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="user-register-area">
                            <div class="register-bg-left bg-image" style="background-image:url('{{ asset("customer/assets/images/bg/register-bg-left.jpg") }}')"></div>
                            <div class="form-content">
                                <div class="form-content-signin" id="register-form">
                                    <h3 class="form-heading">Register your account</h3>
                                    <div class="default-form signin-form">
                                        <div class="error-log"></div>
                                        <div class="form-group">
                                            <input id="name" name="name" class="form-controllar" type="text" placeholder="Username">
                                        </div>
                                        <!--/.form-group-->

                                        <div class="form-group">
                                            <input id="email" name="email" class="form-controllar" type="email" placeholder="E-mail Address">
                                        </div>
                                        <!--/.form-group-->

                                        <div class="form-group">
                                            <input id="pass" name="password" class="form-controllar" type="password" placeholder="Password">
                                        </div>
                                        <!--/.form-group-->

                                        <div class="form-btn-group">
                                            <button type="button" class="btn btn-default bth-action" atr="Register">
                                                Register
                                            </button>
                                            <div class="forget-pass">
                                                <a class="btn-password" href="{{ route("customer.view.login") }}">Login</a>
                                            </div>
                                        </div>
                                        <div class="form-btn-group">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--~./ end user register area ~-->
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; z-index: -100;" id="jarallax-container-1"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;file:///D:/Download/cloneweb/download/miraclestudio.design/html/deliciousa-html/assets/images/bg/register-bg.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1903px; height: 612.3px; overflow: hidden; pointer-events: none; margin-top: -26.65px; transform: translate3d(0px, -24.15px, 0px);"></div></div></div>

@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/auth.js') }}"></script>
@endsection()