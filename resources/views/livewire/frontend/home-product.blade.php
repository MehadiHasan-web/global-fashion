<div class="tab-content jump">

    <div class="tab-pane active" id="product-2">
        <div class="row">
            @isset($bast_selling)
                @foreach ($bast_selling as $item)
                    <div class="col-xl-3 col-md-6 col-lg-3 col-sm-6 ">
                        <div class="product-wrap mb-25 card rounded shadow-lg">
                            <div class="product-img p-2">
                                <a href="{{ route('product.details', $item->slug) }}">
                                    <img class="default-img rounded-top"
                                        src="{{ URL::to('storage/product_thumbnail/' . $item->thumb_image ?? '') }}"
                                        alt="">
                                    @if ($item->images)
                                        <img class="hover-img rounded-top p-2 rounded-top"
                                            src="{{ URL::to('storage/product_image/' . json_decode($item->images)[0]) }}"
                                            alt="">
                                    @endif

                                </a>
                                <span class="pink">
                                    @if ($item->discounted_price)
                                        {{ number_format((($item->price - $item->discounted_price) / $item->price) * 100, 2) . '%' }}
                                    @else
                                        in stock
                                    @endif

                                </span>
                                <div class="product-action d-none">
                                    <div class="pro-same-action pro-wishlist">
                                        <a title="Wishlist" href="#"
                                            wire:click.prevent="addToWishlist({{ $item->id }})"><i
                                                class="fa-regular fa-heart"></i></a>
                                    </div>
                                    <div class="pro-same-action pro-cart">
                                        <a title="Add To Cart" wire:click="addToCart({{ $item->id }})"><i
                                                class="fa-solid fa-cart-shopping"></i>
                                            Add
                                            to cart</a>
                                    </div>
                                    <div class="pro-same-action pro-quickview">
                                        <a class="quick_view" title="Quick View" href="#" id="{{ $item->id }}"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <a href="{{ route('product.details', $item->slug) }}">{{ $item->name ?? '' }}</a>
                                <div class="product-price">
                                    @if ($item->discounted_price)
                                        <span
                                            style="color:#002e45;white-space: nowrap; font-size: 15px;font-weight: bold;"><strong>ট</strong>
                                            {{ $item->discounted_price ?? '' }}.00</span>
                                        <span class="old"><strong>ট</strong>
                                            {{ $item->price ?? '' }}.00</span>
                                    @else
                                        <span
                                            style="color:#002e45;white-space: nowrap; font-size: 15px;font-weight: bold;"><strong>ট</strong>
                                            {{ $item->price ?? '' }}.00</span>
                                    @endif
                                </div>
                                <div class="p-2 order">
                                    <button type="button" class="btn btn-light col-12 bold order-button"
                                        style="">অর্ডার করুন</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset
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
