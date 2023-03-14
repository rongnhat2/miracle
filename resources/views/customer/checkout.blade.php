@extends('customer.layout')
@section('title', "Checkout")


@section('css')

@endsection()


@section('body')

<div class="page-title-area bg-image bg-parallax2" style="background-image:url('{{ asset("customer/assets/images/header/header1.jpg") }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">Checkout</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
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
    Start Shopping Checkout Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="shopping-checkout-section ptb-100">
    <div class="container ml-t-5">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="checkout-form-row">
                    <h3 class="heading-medium">Billing Details</h3>
                    <div class="form-group">
                        <input type="text" class="form-controllar" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-controllar" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-controllar" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-controllar" placeholder="E-mail Address">
                    </div> 
                    <div class="form-group">
                        <textarea class="form-controllar" placeholder="Address"></textarea>
                    </div>
                </div>
            </div>
            <!--~~./ end checkout form row ~~-->

            <div class="col-lg-6">
                <div class="checkout-form-row">
                    <h3 class="heading-medium">Payment Options</h3>
                    <div class="cart-total-area">
                        <div class="cart-total-info">
                            <ul class="list">
                                <li class="cart-subtotal"><span>Sub Total</span> <strong>36.00€</strong></li>
                                <li class="order-shipping"><span>Shipping & Handling </span>
                                    <strong>14.00€</strong></li>
                                <li class="vat"><span>VAT 12% </span> <strong>10.00€</strong></li>
                            </ul>
                            <h3 class="cart-total-amount"><span>order total</span> <span
                                    class="amount">60.00€</span></h3>
                        </div>
                        <div class="payment-method"> 
                            <div class="form-group">
                                <input name="payment-method" id="visa" type="radio">
                                <label class="payment-radio" for="visa">Cash on Delivery</label>
                            </div>
                            <div class="form-group">
                                <input name="payment-method" id="mastercard" type="radio">
                                <label class="payment-radio" for="mastercard">VNPay</label>
                            </div>
                            <div class="form-group">
                                <input name="payment-method" id="direct-bank" type="radio">
                                <label class="payment-radio" for="direct-bank">Bank Transfer</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--~~./ end checkout form row ~~-->
        </div>
    </div>
</div>

@endsection()

@section('js')
    <script src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()