<div>


    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">Shop </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3">
                    <div class="sidebar-style ">
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Search</h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="pro-sidebar-search-form">
                                    <input type="text" placeholder="Search here..."
                                        wire:model.live.debounce.1000ms="search">

                                    <button>
                                        <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Refine By </h4>
                            <div class="sidebar-widget-list mt-30">
                                <ul>
                                    @isset($categories)
                                        @foreach ($categories as $item)
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox"> <a
                                                        href="#">{{ $item->name ?? '' }}<span>{{ count($item->products) }}</span>
                                                    </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endisset

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-45">
                            <h4 class="pro-sidebar-title">Filter By Price </h4>
                            <div class="price-filter mt-10">
                                <div class="border-none">
                                    <label for="priceRange2" class="form-label bold">ট 0 - ট
                                        {{ $price ?? '5000' }}</label>
                                    <input type="range" class="form-range" min="0" max="50000"
                                        id="priceRange2" wire:model.live="price">
                                </div>
                                {{-- <div id="slider-range"></div> --}}
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40">
                            <h4 class="pro-sidebar-title">Size </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">XL</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">L</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">SM</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">XXL</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Tag </h4>
                            <div class="sidebar-widget-tag mt-25">
                                <ul>
                                    @isset($tags)
                                        @foreach ($tags as $item)
                                            <li><a href="#">{{ $item->name ?? '' }}</a></li>
                                        @endforeach
                                    @endisset

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop-top-bar">
                        <div class="select-shoing-wrap">
                            <div class="shop-select">
                                <select>
                                    {{-- <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option> --}}
                                    <option value="">In stock</option>
                                </select>
                            </div>
                            <p>Showing 1–9 of {{ $product->count() }} result</p>
                        </div>
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-bs-toggle="tab">
                                <i class="fa fa-table"></i>
                            </a>
                            <a href="#shop-2" data-bs-toggle="tab">
                                <i class="fa fa-list-ul"></i>
                            </a>
                        </div>
                    </div>
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    @if ($product->count() > 0)
                                        @foreach ($product as $item)
                                            <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                                <div class="product-wrap mb-25 scroll-zoom card rounded shadow">
                                                    <div class="product-img">
                                                        <a href="{{ route('product.details', $item->slug) }}">
                                                            <img class="default-img rounded-top"
                                                                src="{{ URL::to('storage/product_thumbnail/' . $item->thumb_image ?? '') }}"
                                                                alt="">
                                                            @if ($item->images)
                                                                <img class="hover-img rounded-top"
                                                                    src="{{ URL::to('storage/product_image/' . json_decode($item->images)[0]) }}"
                                                                    alt="">
                                                            @endif
                                                        </a>
                                                        <span class="pink">
                                                            @if ($item->discounted_price)
                                                                {{ number_format((($item->price - $item->discounted_price) / $item->price) * 100, 2) . '%' }}
                                                            @else
                                                                Stock
                                                            @endif
                                                        </span>
                                                        <div class="product-action">
                                                            <div class="pro-same-action pro-wishlist">
                                                                <a title="Wishlist" href="#"
                                                                    wire:click.prevent="addToWishlist({{ $item->id }})"><i
                                                                        class="fa-regular fa-heart"></i></a>
                                                            </div>
                                                            <div class="pro-same-action pro-cart">
                                                                <a title="Add To Cart"
                                                                    wire:click="addToCart({{ $item->id }})"><i
                                                                        class="fa-solid fa-cart-shopping"></i>
                                                                    Add to cart</a>
                                                            </div>
                                                            <div class="pro-same-action pro-quickview">
                                                                <a title="Quick View" href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                        class="fa-solid fa-eye quick_view"
                                                                        id="{{ $item->id }}"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="product-content
                                                                        text-center">
                                                        <h3><a
                                                                href="{{ route('product.details', $item->slug) }}">{{ $item->name ?? '' }}</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            @if ($item->discounted_price)
                                                                <span><strong>ট</strong>
                                                                    {{ $item->discounted_price ?? '' }}.00</span>
                                                                <span class="old"><strong>ট</strong>
                                                                    {{ $item->price ?? '' }}.00</span>
                                                            @else
                                                                <span><strong>ট</strong>
                                                                    {{ $item->price ?? '' }}.00</span>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <img class="img-fluid"
                                            src="{{ asset('storage/aditional-img/no-found.jpg') }}" alt="No found">
                                    @endif


                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                @isset($product)
                                    @foreach ($product as $item)
                                        <div class="shop-list-wrap mb-30">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6">
                                                    <div class="product-wrap">
                                                        <div class="product-img">
                                                            <a href="{{ route('product.details', $item->slug) }}">
                                                                <img class="default-img"
                                                                    src="{{ URL::to('storage/product_thumbnail/' . $item->thumb_image ?? '') }}"
                                                                    alt="">
                                                                <img class="hover-img"
                                                                    src="{{ URL::to('storage/product_image/' . json_decode($item->images)[0]) }}"
                                                                    alt="">
                                                            </a>
                                                            <span class="pink">
                                                                @if ($item->discounted_price)
                                                                    {{ number_format((($item->price - $item->discounted_price) / $item->price) * 100, 2) . '%' }}
                                                                @else
                                                                    Stock
                                                                @endif
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-7 col-md-7 col-sm-6 "
                                                    style="margin-bottom:100px;">
                                                    <div class="shop-list-content">
                                                        <h3><a
                                                                href="{{ route('product.details', $item->slug) }}">{{ $item->name ?? '' }}</a>
                                                        </h3>
                                                        <div class="product-list-price">
                                                            @if ($item->discounted_price)
                                                                <span><strong>ট</strong>
                                                                    {{ $item->discounted_price ?? '' }}.00</span>
                                                                <span class="old"><strong>ট</strong>
                                                                    {{ $item->price ?? '' }}.00</span>
                                                            @else
                                                                <span><strong>ট</strong>
                                                                    {{ $item->price ?? '' }}.00</span>
                                                            @endif
                                                        </div>
                                                        <div>
                                                            {!! Str::limit($item->description, 300, '...') !!}
                                                        </div>
                                                        <div class="shop-list-btn btn-hover">
                                                            <a wire:click="addToCart({{ $item->id }})">ADD TO CART</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endisset
                            </div>
                        </div>
                        <div class="">
                            {{ $product->links('frontend.partials.pagenation') }}
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
                <div class="modal-body" id="quick_view_body">

                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
</div>
