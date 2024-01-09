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
            <div class="section-title text-center">
                <h2>DAILY DEALS!</h2>
            </div>
            <div class="product-tab-list nav pt-30 pb-55 text-center">
                <a href="#product-1" data-bs-toggle="tab">
                    <h4>New Arrivals </h4>
                </a>
                <a class="active" href="#product-2" data-bs-toggle="tab">
                    <h4>Best Sellers </h4>
                </a>
                <a href="#product-3" data-bs-toggle="tab">
                    <h4>Sale Items</h4>
                </a>
            </div>
            @include('frontend.partials.home.product')
        </div>
    </div>
@endsection
