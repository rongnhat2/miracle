@extends('customer.layout')
@section('title', "Profile")


@section('css')

@endsection()


@section('body')
<div class="page-title-area bg-image bg-parallax2" style="background-image: url('{{ asset("customer/assets/images/header/header1.jpg") }}'); z-index: 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">Profile</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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

<div class="container I-profile">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="profile-control-wrapper">
                <div class="profile-info-wrapper"> 
                    <div class="info-data">
                        <h5 class="name"> </h5>
                        <h6 class="email"> </h6>
                    </div>
                </div>
                <div class="profile-action-wrapper">
                    <div class="action-item is-select" tab-item="Information"><i class="fas fa-user"></i>Profile</div>
                    <div class="action-item" tab-item="Order"><i class="fas fa-clipboard-list"></i>Order </div>
                    <div class="action-item" tab-item="Password"><i class="fas fa-key"></i> Change password</div>
                    <div class="action-item" onclick="event.preventDefault();document.getElementById('logout-form').submit(); localStorage.removeItem('card')"><i class="fas fa-sign-out-alt"></i>Logout</div>
                    <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" class="d-none"> @csrf </form>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
            @if ( Session::has('error') )
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if ( Session::has('success') )
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="profile-data-wrapper is-open" view-data="Profile">
                <div class="profile-data-block is-open" tab-data="Information">
                    <div class="profile-wrapper">
                        <div class="profile-header">
                            <h3>My profile</h3>
                        </div>  
                        <div class="profile-body">
                            <div class="row">
                                <form autocomplete="off" class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                    <div class="error-log"></div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            Email
                                        </div>
                                        <div class="profile-value">
                                             
                                        </div>
                                    </div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            Username
                                        </div>
                                        <div class="profile-value">
                                            <input type="text" value=" " class="data-name">
                                        </div>
                                    </div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            Address
                                        </div>
                                        <div class="profile-value">
                                            <input type="text" value=" >" class="data-address">
                                        </div>
                                    </div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            Telephone
                                        </div>
                                        <div class="profile-value">
                                            <input type="text" value=" " class="data-phone">
                                        </div>
                                    </div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            
                                        </div>
                                        <div class="profile-value">
                                            <div class="action-save" atr="Save">
                                                Lưu lại
                                            </div>
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="profile-data-block order-block" tab-data="Order">
                    <div class="order-wrapper">
                        <div class="order-nav">
                            <div class="order-nav-item is-select">
                                All
                            </div>
                            <div class="order-nav-item" order-status="0">
                                Pending
                            </div>
                            <div class="order-nav-item" order-status="2">
                                Get Product
                            </div>
                            <div class="order-nav-item" order-status="4">
                                Shipping
                            </div>
                            <div class="order-nav-item" order-status="5">
                                Shipped
                            </div>
                            <div class="order-nav-item" order-status="6">
                                Done
                            </div>
                            <div class="order-nav-item" order-status="7">
                                Cancel
                            </div>
                        </div>  
                        <div class="order-main">
                            {{-- <form class="order-item-search" autocomplete="off">
                                <input type="text" placeholder="Tìm kiếm theo mã đơn hàng, sản phẩm,...">
                            </form> --}}
                            <div class="order-item-list"> 

                            </div>
                        </div>  
                    </div>
                </div>
                <div class="profile-data-block " tab-data="Password">
                    <div class="profile-wrapper">
                        <div class="profile-header">
                            <h3>Change password</h3>
                        </div>  
                        <div class="profile-body">
                            <div class="row">
                                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                    <div class="error-log"></div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            Old Password
                                        </div>
                                        <div class="profile-value">
                                            <input type="password" value="" class="data-oldpass">
                                        </div>
                                    </div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            new Password
                                        </div>
                                        <div class="profile-value">
                                            <input type="password" value="" class="data-newpass">
                                        </div>
                                    </div>
                                    <div class="profile-component">
                                        <div class="profile-title">
                                            
                                        </div>
                                        <div class="profile-value">
                                            <div class="action-save" atr="Send">
                                                Confirm
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="profile-data-wrapper order-tab-wrapper" view-data="OrderDetail">
                <div class="go-back">
                    <div class="do-action"><i class="fas fa-caret-left mr-2"></i>Back</div>
                </div>
                <div class="profile-data-block is-open">
                    <div class="order-procedure-wrapper">
                        <h5 class="title">Order Detail</h5>
                        <div class="row description-wrapper">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="user-data">
                                    <i class="fas fa-user mr-2"></i><span class="data-name"> </span>
                                </div>
                                <div class="user-data">
                                    <i class="fas fa-map-marked-alt mr-2"></i><span class="data-address"> </span>
                                </div>
                                <div class="user-data">
                                    <i class="fas fa-phone mr-2"></i><span class="data-phone"> </span>
                                </div>
                                <div class="user-data">
                                    <i class="fas fa-credit-card mr-2"></i><span class="data-payment"> </span>
                                </div>
                                <div class="user-data">
                                    <i class="fas fa-check-circle mr-2"></i><span class="data-payment-status"> </span>
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 procedure-border procedure-timeline">
                            </div>
                        </div>
                    </div>
                    <div class="profile-fill"></div>
                    <div class="order-item-wrapper">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/profile.js') }}"></script>
@endsection()