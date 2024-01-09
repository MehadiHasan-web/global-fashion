<div>
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">Wishlist </li>
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
                                        <th>Until Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Add To Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($wishlists)
                                        @foreach ($wishlists as $item)
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
                                                <td class="product-price-cart"><span class="amount">
                                                        @if ($item->product->discounted_price)
                                                            <span class="fw-bold"> ট </span>
                                                            {{ $item->product->discounted_price }}.00
                                                        @else
                                                            <span class="fw-bold"> ট </span>{{ $item->product->price }}.00
                                                        @endif
                                                    </span>
                                                </td>
                                                <td class="product-quantity">
                                                    {{-- <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                        value="{{ $item->quantity ?? '' }}">
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
                                                <td class="product-wishlist-cart">
                                                    <a wire:click="addToCart({{ $item->product_id }})">add to
                                                        cart</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
