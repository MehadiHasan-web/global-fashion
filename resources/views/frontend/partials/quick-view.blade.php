<div class="row">
    <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="tab-content quickview-big-img">
            <div id="pro-1" class="tab-pane fade show active">
                <img src="{{ URL::to('storage/product_thumbnail/' . $product->thumb_image ?? '') }}" alt="">
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
                        src="{{ asset('frontend/img/product/quickview-s1.jpg') }}" alt=""></a>
                <a data-bs-toggle="tab" href="#pro-2"><img src="{{ asset('frontend/img/product/quickview-s2.jpg') }}"
                        alt=""></a>
                <a data-bs-toggle="tab" href="#pro-3"><img src="{{ asset('frontend/img/product/quickview-s3.jpg') }}"
                        alt=""></a>
                <a data-bs-toggle="tab" href="#pro-4"><img src="{{ asset('frontend/img/product/quickview-s2.jpg') }}"
                        alt=""></a>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-details-content quickview-content">
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
            <div class="pro-details-rating-wrap d-none">
                <div class="pro-details-rating">
                    <i class="fa fa-star-o yellow"></i>
                    <i class="fa fa-star-o yellow"></i>
                    <i class="fa fa-star-o yellow"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <span>3 Reviews</span>
            </div>
            <p>
                {!! $product->description ?? '' !!}
            </p>
            {{-- @livewire('frontend.add-to-cart', ['product_id' => $product->id]) --}}
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
        </div>
    </div>
</div>
