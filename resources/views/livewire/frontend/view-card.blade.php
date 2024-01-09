<div>
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">Cart Page </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-main-area pt-90 pb-100">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($cartItems)
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="{{ route('product.details', $item->product->slug) }}"><img
                                                            class="img-fluid rounded ml-1" style="width:150px; height:150px"
                                                            src="{{ URL::to('storage/product_thumbnail/' . $item->product->thumb_image ?? '') }}"
                                                            alt=""></a>
                                                </td>
                                                <td class="product-name"><a
                                                        href="{{ route('product.details', $item->product->slug) }}">{{ $item->product->name ?? '' }}</a>
                                                </td>
                                                <td>
                                                    @if ($item->color)
                                                        {{ $item->color ?? '' }}
                                                    @else
                                                        No selected
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->size)
                                                        {{ $item->size ?? '' }}
                                                    @else
                                                        No selected
                                                    @endif
                                                </td>
                                                <td class="product-price-cart"><span class="amount">
                                                        @if ($item->product->discounted_price)
                                                            <span class="fw-bold"> ট </span>
                                                            {{ $item->product->discounted_price }}.00
                                                        @else
                                                            <span class="fw-bold"> ট </span>{{ $item->product->price }}.00
                                                        @endif
                                                    </span></td>
                                                <td class="product-quantity">
                                                    {{-- <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                            value="{{ $item->quantity }}">
                                                    </div> --}}
                                                    <div class="input-group mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <button type="button"
                                                                    class="quantity-left-minus btn btn-danger btn-number"
                                                                    wire:click="decrementQuantity({{ $item->id }})">
                                                                    <span class="glyphicon glyphicon-minus"><i
                                                                            class="fa-solid fa-minus"></i></span>
                                                                </button>
                                                            </span>
                                                            <input type="text" name="quantity"
                                                                class="form-control input-number"
                                                                value="{{ $item->quantity }}" min="1" max="100"
                                                                style="height: 37px;">
                                                            <span class="input-group-btn">
                                                                <button type="button"
                                                                    class="quantity-right-plus btn btn-success btn-number"
                                                                    data-type="plus"
                                                                    wire:click="incrementQuantity({{ $item->id }})">
                                                                    <span class="glyphicon glyphicon-plus"><i
                                                                            class="fa-solid fa-plus"></i></span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    @if ($item->product->discounted_price)
                                                        <span class="fw-bold"> ট </span>
                                                        {{ $item->product->discounted_price * $item->quantity }}.00
                                                    @else
                                                        <span class="fw-bold"> ট
                                                        </span>{{ $item->product->price * $item->quantity }}.00
                                                    @endif
                                                </td>
                                                <td class="product-remove">
                                                    <a wire:click="removeItem({{ $item->id }})"><i
                                                            class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Update Shopping Cart</button>
                                        <a wire:click="clearCart()">Clear Shopping Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 d-none">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <div class="tax-select-wrapper">
                                        <div class="tax-select">
                                            <label>
                                                * Country
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Bangladesh</option>
                                                <option>Albania</option>
                                                <option>Åland Islands</option>
                                                <option>Afghanistan</option>
                                                <option>Belgium</option>
                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * Region / State
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Bangladesh</option>
                                                <option>Albania</option>
                                                <option>Åland Islands</option>
                                                <option>Afghanistan</option>
                                                <option>Belgium</option>
                                            </select>
                                        </div>
                                        <div class="tax-select">
                                            <label>
                                                * Zip/Postal Code
                                            </label>
                                            <input type="text">
                                        </div>
                                        <button class="cart-btn-2" type="submit">Get A Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-none">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Enter your coupon code if you have one.</p>
                                    <form>
                                        <input type="text" required="" name="name">
                                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 ">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products <span>ট {{ $total ?? '' }}</span></h5>
                                <div class="total-shipping">
                                    {{-- <h5>Total shipping</h5> --}}
                                    {{-- <ul>
                                        <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                        <li><input type="checkbox"> Express <span>$30.00</span></li>
                                    </ul> --}}
                                </div>
                                <h4 class="grand-totall-title">Grand Total <span>ট {{ $total ?? '' }}</span></h4>
                                <a href="{{ route('order.index') }}">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
