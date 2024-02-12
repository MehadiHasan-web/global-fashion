@extends('frontend.master.master')
@section('title')
    Product Details
@endsection
@section('content')
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">Product Details </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-100 pb-100 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details">
                        <div class="product-details-img">
                            <div class="tab-content jump ">
                                <div id="shop-details-1" class="tab-pane large-img-style">
                                    @php
                                        $imagePathOne = json_decode($product->images)[1] ?? null;
                                        $imageOneUrl = $imagePathOne ? URL::to('storage/product_image/' . $imagePathOne) : null;
                                    @endphp
                                    @if ($imageOneUrl && file_exists(public_path('storage/product_image/' . $imagePathOne)))
                                        <img src="{{ $imageOneUrl }}" alt="">
                                    @endif

                                    <span class="dec-price">
                                        @if ($product->discounted_price)
                                            {{ number_format((($product->price - $product->discounted_price) / $product->price) * 100, 2) . '%' }}
                                        @else
                                            in stock
                                        @endif
                                    </span>
                                    <div class="img-popup-wrap">
                                        @if ($imageOneUrl && file_exists(public_path('storage/product_image/' . $imagePathOne)))
                                            <a class="img-popup" href="{{ $imageOneUrl }}"><i
                                                    class="fa-solid fa-up-right-and-down-left-from-center"></i></a>
                                        @endif

                                    </div>
                                </div>
                                <div id="shop-details-2" class="tab-pane  large-img-style active">
                                    <img src="{{ URL::to('storage/product_thumbnail/' . $product->thumb_image ?? '') }}"
                                        alt="">
                                    <span class="dec-price">
                                        @if ($product->discounted_price)
                                            {{ number_format((($product->price - $product->discounted_price) / $product->price) * 100, 2) . '%' }}
                                        @else
                                            in stock
                                        @endif
                                    </span>
                                    <div class="img-popup-wrap">
                                        <a class="img-popup"
                                            href="{{ URL::to('storage/product_thumbnail/' . $product->thumb_image ?? '') }}"><i
                                                class="fa-solid fa-up-right-and-down-left-from-center"></i></a>
                                    </div>
                                </div>
                                <div id="shop-details-3" class="tab-pane large-img-style">
                                    @php
                                        $imagePath = json_decode($product->images)[0] ?? null;
                                        $imageUrl = $imagePath ? URL::to('storage/product_image/' . $imagePath) : null;
                                    @endphp
                                    @if ($imageUrl && file_exists(public_path('storage/product_image/' . $imagePath)))
                                        <img src="{{ $imageUrl }}" alt="">
                                    @endif

                                    <span class="dec-price">
                                        @if ($product->discounted_price)
                                            {{ number_format((($product->price - $product->discounted_price) / $product->price) * 100, 2) . '%' }}
                                        @else
                                            in stock
                                        @endif
                                    </span>
                                    <div class="img-popup-wrap">
                                        @if ($imageUrl && file_exists(public_path('storage/product_image/' . $imagePath)))
                                            <a class="img-popup" href="{{ $imageUrl }}"><i
                                                    class="fa-solid fa-up-right-and-down-left-from-center"></i></a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="shop-details-tab nav">
                                <a class="shop-details-overly" href="#shop-details-1" data-bs-toggle="tab">

                                    @if ($imageOneUrl && file_exists(public_path('storage/product_image/' . $imagePathOne)))
                                        <img src="{{ $imageOneUrl }}" alt="" class="img-fluid"
                                            style="width:144px;  height:144px;     border-radius:5px; object-fit:cover;">
                                    @endif
                                </a>
                                <a class="shop-details-overly active" href="#shop-details-2" data-bs-toggle="tab">
                                    <img src="{{ URL::to('storage/product_thumbnail/' . $product->thumb_image ?? '') }}"
                                        alt="" class="img-fluid"
                                        style="width:144px;  height:144px;     border-radius:5px; object-fit:cover;">
                                </a>
                                <a class="shop-details-overly" href="#shop-details-3" data-bs-toggle="tab">

                                    @if ($imageUrl && file_exists(public_path('storage/product_image/' . $imagePath)))
                                        <img src="{{ $imageUrl }}" alt="" class="img-fluid"
                                            style="width:144px;  height:144px;     border-radius:5px; object-fit:cover;">
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content ml-70">
                        <h2>{{ $product->name ?? '' }}</h2>
                        <div class="product-details-price">
                            @if ($product->discounted_price)
                                <span><strong>ট</strong>
                                    {{ $product->discounted_price ?? '' }}.00</span>
                                <span class="old"><strong>ট</strong>
                                    {{ $product->price ?? '' }}.00</span>
                            @else
                                <span><strong>ট</strong>
                                    {{ $product->price ?? '' }}.00</span>
                            @endif
                        </div>
                        <div>
                            <p>Product Code: <span>{{ $product->product_code ?? '' }}</span></p>
                        </div>
                        <div class="pro-details-rating-wrap d-none">
                            <div class="pro-details-rating">
                                <i class="fa fa-star-o yellow"></i>
                                <i class="fa fa-star-o yellow"></i>
                                <i class="fa fa-star-o yellow"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span class="d-none"><a href="#">3 Reviews</a></span>
                        </div>

                        @livewire('frontend.add-to-cart', ['product_id' => $product->id])

                        <div class="pro-details-meta">
                            <span>Categories :</span>
                            <ul>
                                @isset($product)
                                    <li><a href="#">{{ $product->category->name ?? '' }}</a></li>
                                @endisset

                            </ul>
                        </div>
                        @isset($product->subcategory)
                            <div class="pro-details-meta">
                                <span>Sub Categories :</span>
                                <ul>
                                    <li><a href="#">{{ $product->subcategory->name ?? '' }}</a></li>
                                </ul>
                            </div>
                        @endisset
                        <div class="pro-details-meta ">
                            <div style="margin-right:20px">
                                <p>Tag:</p>
                            </div>
                            <ul>
                                @foreach ($product->tag as $item)
                                    <li><a href="#">{{ $item->name }} ,</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="pro-details-social">
                            <ul>
                                <li><a href="{{ $socials->facebook ?? '' }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $socials->twitter ?? '' }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $socials->linkedin ?? '' }}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{ $socials->instagram ?? '' }}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ $socials->tiktok ?? '' }}"><i class="fa fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                        <div class="mt-3">
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td colspan="2">ঢাকার মধ্যে ডেলিভারি চার্জ</td>
                                        <td>৬৫ টাকা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">ঢাকার আশেপাশে ডেলিভারি চার্জ</td>
                                        <td>১০০ টাকা</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">ঢাকার বাহিরে ডেলিভারি চার্জ</td>
                                        <td>১৩০ টাকা</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-90">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a class="active" data-bs-toggle="tab" href="#des-details2">Description</a>
                    <a data-bs-toggle="tab" href="#des-details3">Delivery and Return Policy</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-description-wrapper">
                            {!! $product->description ?? '' !!}
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div id="des-details2" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <ol>
                                    <li>আপনার যত প্রশ্ন আছে তা বর্ননার সাথে মিলিয়ে অথবা আমাদের কাছ থেকে জেনে পন্য অর্ডার
                                        করুন।</li>
                                    <li>আপনার ক্রয় করা প্রোডাটিতে যদি কোন সমস্যা পান অথবা সাইজ ছোট বড় হয় তাহলে আপনি
                                        প্রোডক্টি এক্সচেঞ্জ করে নিতে পারবেন।</li>
                                    <li>আমাদের প্রোডাক্ট এ যদি মেজর কোন ডিফেক্ট থাকে তাহলে আপনি রির্টান অথবা এক্সচেঞ্জ করতে
                                        পারবেন।</li>
                                    <li>ভুল প্রোডাক্ট শিপমেন্ট হলে যেমন কালার এবং সাইজ ইস্যু তে আপনি রির্টান অথবা এক্সচেঞ্জ
                                        করতে পারবেন।</li>
                                    <li>পণ্যটি দেখে পছন্দ না হলে ডেলিভারি চার্জ দিয়ে রির্টান করতে পারবেন।</li>
                                    <li>পণ্যটি পাওয়ার ০৭ দিনের মধ্যে যেকোনো পরিবর্তনের জন্য আপনাকে গ্রাহক পরিষেবাকে জানাতে
                                        অনুরোধ করা হচ্ছে।</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product-area pb-95 d-none">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>Related products</h2>
            </div>
            <div class="related-product-active owl-carousel owl-dot-none">
                <div class="product-wrap">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{ asset('frontend/img/product/pro-1.jpg ') }}"
                                alt="">
                            <img class="hover-img" src="{{ asset('frontend/img/product/pro-1-1.jpg ') }}"
                                alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{ asset('frontend/img/product/pro-2.jpg ') }}"
                                alt="">
                            <img class="hover-img" src="{{ asset('frontend/img/product/pro-2-1.jpg ') }}"
                                alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{ asset('frontend/img/product/pro-3.jpg ') }}"
                                alt="">
                            <img class="hover-img" src="{{ asset('frontend/img/product/pro-3-1.jpg ') }}"
                                alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{ asset('frontend/img/product/pro-4.jpg ') }}"
                                alt="">
                            <img class="hover-img" src="{{ asset('frontend/img/product/pro-4-1.jpg ') }}"
                                alt="">
                        </a>
                        <span class="purple">New</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img class="default-img" src="{{ asset('frontend/img/product/pro-5.jpg ') }}"
                                alt="">
                            <img class="hover-img" src="{{ asset('frontend/img/product/pro-5-1.jpg ') }}"
                                alt="">
                        </a>
                        <span class="pink">-10%</span>
                        <div class="product-action">
                            <div class="pro-same-action pro-wishlist">
                                <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="pro-same-action pro-cart">
                                <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                            </div>
                            <div class="pro-same-action pro-quickview">
                                <a title="Quick View" href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="pe-7s-look"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content text-center">
                        <h3><a href="product-details.html">T- Shirt And Jeans</a></h3>
                        <div class="product-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="product-price">
                            <span>$ 60.00</span>
                            <span class="old">$ 60.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
