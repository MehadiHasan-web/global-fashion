<div class="same-style cart-wrap">
    <button class="icon-cart">
        <svg style="width: 23px; color: #3c3939;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>

        <span class="count-style">{{ $cardProduct }}</span>
    </button>
    <div class="shopping-cart-content">
        @if (isset($cartItems))
            <ul>
                @foreach ($cartItems as $item)
                    <li class="single-shopping-cart">
                        <div class="shopping-cart-img">
                            <a href="{{ route('product.details', $item->product->slug) }}"><img class="img-fluid"
                                    alt=""
                                    src="{{ URL::to('storage/product_thumbnail/' . $item->product->thumb_image ?? '') }}"></a>
                        </div>
                        <div class="shopping-cart-title">
                            <h4><a
                                    href="{{ route('product.details', $item->product->slug) }}">{{ $item->product->name ?? '' }}</a>
                            </h4>
                            {{-- <h6>Qty: 02</h6> --}}
                            @if ($item->product->discounted_price)
                                <span class="fw-bold"> ট </span>
                                {{ $item->product->discounted_price }}.00
                            @else
                                <span class="fw-bold"> ট </span>{{ $item->product->price }}.00
                            @endif
                        </div>
                        <div class="shopping-cart-delete">
                            <a wire:click="removeItem({{ $item->id }})"><i class="fa fa-times-circle"></i></a>
                        </div>
                    </li>
                @endforeach

            </ul>
            <div class="shopping-cart-total">
                {{-- <h4>Shipping : <span>$20.00</span></h4> --}}
                <h4>Total : <span class="shop-total">ট{{ $total ?? '' }}</span></h4>
            </div>
        @else
            <img class="img-fluid" src="{{ asset('storage/aditional-img/no-found.jpg') }}" alt="No found">
        @endif


        <div class="shopping-cart-btn btn-hover text-center">
            <a class="default-btn" href="{{ route('cart.page') }}">view cart</a>
            <a class="default-btn" href="{{ route('order.index') }}">checkout</a>
        </div>
    </div>
</div>
