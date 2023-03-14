@extends('customer.layout')
@section('title', "Cart")


@section('css')

@endsection()


@section('body')

<div class="page-title-area bg-image bg-parallax2" style="background-image:url('{{ asset("customer/assets/images/header/header1.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">Shopping Cart</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
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
    Start Shopping Cart Block
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="shopping-cart-block ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="shop-table table">
                        <thead>
                            <tr>
                                <th colspan="2" class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-discount">Discount</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5"> 
                    </div>
                    <div class="col-lg-7">
                        <div class="refresh-shoping text-right">
                            <button type="button" class="btn btn-default btn-primary cart-update">UPDATE</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="checkout-form-row">
                    <h3 class="heading-medium">Billing Details</h3>
                    <div class="form-group">
                        <input type="text" class="form-controllar data-name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-controllar data-phone" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-controllar data-email" placeholder="E-mail Address">
                    </div> 
                    <div class="form-group">
                        <textarea class="form-controllar data-address" placeholder="Address"></textarea>
                    </div>
                </div>
            </div>
            <!--~~./ end checkout form row ~~-->

            <div class="col-lg-6">
                <div class="checkout-form-row">
                    <h3 class="heading-medium">Payment Options</h3>
                    <div class="cart-total-area">
                        <div class="error-log"></div>
                        <div class="cart-total-info">
                            <ul class="list">
                                <li class="cart-subtotal"><span>Sub Total</span> <strong>36.00€</strong></li> 
                            </ul>
                            <h3 class="cart-total-amount"><span>order total</span> <span
                                    class="amount">60.00€</span></h3>
                        </div>
                        <div class="payment-method"> 
                            <div class="form-group">
                                <input name="payment-method" id="cod" type="radio" checked value="1">
                                <label class="payment-radio" for="cod">Cash on Delivery</label>
                            </div>
                            <div class="form-group">
                                <input name="payment-method" id="vnpay" type="radio" value="2">
                                <label class="payment-radio" for="vnpay">VNPay</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-default action-checkout">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--~~./ end checkout form row ~~-->
        </div>
    </div>
</div>
<!--~./ end shopping cart block ~-->

@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/cart.js') }}"></script>
@endsection()