@extends('frontend.master.master')
@section('title')
    Global Fashion
@endsection
@section('content')
    @include('frontend.partials.slider')

    <div class="suppoer-area pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="support-wrap mb-30 support-1">
                        <div class="support-icon">
                            <img class="animated" src="{{ asset('frontend/img/icon-img/support-1.png') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h5>Free Shipping</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="support-wrap mb-30 support-2">
                        <div class="support-icon">
                            <img class="animated" src="{{ asset('frontend/img/icon-img/support-2.png') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h5>Support 24/7</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="support-wrap mb-30 support-3">
                        <div class="support-icon">
                            <img class="animated" src="{{ asset('frontend/img/icon-img/support-3.png') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h5>Money Return</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="support-wrap mb-30 support-4">
                        <div class="support-icon">
                            <img class="animated" src="{{ asset('frontend/img/icon-img/support-4.png') }}" alt="">
                        </div>
                        <div class="support-content">
                            <h5>Order Discount</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-60">
        <div class="container">
            <div class="section-title text-center mb-3">
                <h2>DAILY DEALS!</h2>
            </div>
            @include('frontend.partials.home.product')
        </div>
    </div>
@endsection
