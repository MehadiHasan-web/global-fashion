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
    <div class="blog-area pb-55">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h2>OUR BLOG</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('frontend/img/blog/blog-1.jpg') }}"
                                    alt=""></a>
                            <span class="purple">Lifestyle</span>
                        </div>
                        <div class="blog-content-wrap">
                            <div class="blog-content text-center">
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                                <span>By Shop <a href="#">Admin</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('frontend/img/blog/blog-2.jpg') }}"
                                    alt=""></a>
                            <span class="pink">Lifestyle</span>
                        </div>
                        <div class="blog-content-wrap">
                            <div class="blog-content text-center">
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                                <span>By Shop <a href="#">Admin</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{ asset('frontend/img/blog/blog-3.jpg') }}"
                                    alt=""></a>
                            <span class="purple">Lifestyle</span>
                        </div>
                        <div class="blog-content-wrap">
                            <div class="blog-content text-center">
                                <h3><a href="blog-details.html">Lorem ipsum dolor sit <br> amet consec.</a></h3>
                                <span>By Shop <a href="#">Admin</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="{{ asset('frontend/img/product/quickview-l1.jpg') }}" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="{{ asset('frontend/img/product/quickview-l2.jpg') }}" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="{{ asset('frontend/img/product/quickview-l3.jpg') }}" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="{{ asset('frontend/img/product/quickview-l2.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav nav-style-1" role="tablist">
                                    <a class="active" data-bs-toggle="tab" href="#pro-1"><img
                                            src="{{ asset('frontend/img/product/quickview-s1.jpg') }}"
                                            alt=""></a>
                                    <a data-bs-toggle="tab" href="#pro-2"><img
                                            src="{{ asset('frontend/img/product/quickview-s2.jpg') }}"
                                            alt=""></a>
                                    <a data-bs-toggle="tab" href="#pro-3"><img
                                            src="{{ asset('frontend/img/product/quickview-s3.jpg') }}"
                                            alt=""></a>
                                    <a data-bs-toggle="tab" href="#pro-4"><img
                                            src="{{ asset('frontend/img/product/quickview-s2.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>$18.00 </span>
                                    <span class="old">$20.00 </span>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="pro-details-rating">
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o yellow"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <span>3 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore
                                    et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco
                                </p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style </li>
                                    </ul>
                                </div>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                                <li class="gray"></li>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="white"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">s</a></li>
                                                <li><a href="#">m</a></li>
                                                <li><a href="#">l</a></li>
                                                <li><a href="#">xl</a></li>
                                                <li><a href="#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                            value="2">
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                    <div class="pro-details-wishlist">
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="#"><i class="fa-solid fa-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Categories :</span>
                                    <ul>
                                        <li><a href="#">Minimal,</a></li>
                                        <li><a href="#">Furniture,</a></li>
                                        <li><a href="#">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Tag :</span>
                                    <ul>
                                        <li><a href="#">Fashion, </a></li>
                                        <li><a href="#">Furniture,</a></li>
                                        <li><a href="#">Electronic</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
@endsection
