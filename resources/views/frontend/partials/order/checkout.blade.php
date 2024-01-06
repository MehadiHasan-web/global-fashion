@extends('frontend.master.master')
@section('title')
    Checkout
@endsection
@section('content')
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Checkout </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="checkout-area pt-95 pb-100">
        <div class="container">
            <form action="{{ route('order.store') }}" method="POST" class="row">
                @csrf
                @method('POST')
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>First Name</label>
                                    <input type="text" name="fname" value="{{ old('fname', $user->fname ?? '') }}"
                                        class="@error('fname') is-invalide @enderror">
                                    @error('fname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" value="{{ old('lname', $user->lname ?? '') }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Country</label>
                                    <select disabled>
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option selected>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Address <span class="ml-1 text-danger">(required)</span></label>
                                    <textarea name="address" cols="10" rows="3" placeholder="House number and you address"
                                        class="@error('address') is-invalide @enderror">{{ old('address', $user->address ?? '') }}</textarea>
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Town / City <span class="ml-1 text-danger">(required)</span></label>
                                    <input type="text" name="city" class="@error('city') is-invalide @enderror"
                                        value="{{ old('city', $user->city ?? '') }}">
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Upazila / Thana</label>
                                    <input type="text" name="thana" class="@error('thana') is-invalide @enderror"
                                        value="{{ old('thana', $user->thana ?? '') }}">
                                    @error('thana')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Postcode / ZIP <span class="ml-1 text-success">(Optional)</span></label>
                                    <input type="text" class="@error('zip') is-invalide @enderror" name="zip"
                                        value="{{ old('zip', $user->zip ?? '') }}">
                                    @error('zip')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Phone <span class="ml-1 text-danger">(required)</span></label>
                                    <input type="number" name="number" class="@error('number') is-invalide @enderror"
                                        value="{{ old('number', $user->number ?? '') }}">
                                    @error('namber')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Email Address </label>
                                    <input type="email" name="email" class="@error('email') is-invalide @enderror"
                                        value="{{ old('email', $user->email ?? '') }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Additional information <span class="ml-1 text-success">(Optional)</span></h4>
                            <div class="additional-info">
                                <label>Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="additional_info">{{ old('additional_info', $user->additional_info ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @isset($products)
                                            @foreach ($products as $item)
                                                <li><span class="order-middle-left">{{ $item->product->name }}</span> <span
                                                        class="order-price">
                                                        @if ($item->product->discounted_price)
                                                            <span class="fw-bold"> ট </span>
                                                            {{ $item->product->discounted_price * $item->quantity }}.00
                                                        @else
                                                            <span class="fw-bold"> ট
                                                            </span>{{ $item->product->price * $item->quantity }}.00
                                                        @endif
                                                    </span></li>
                                            @endforeach
                                        @endisset
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>৳{{ $total ?? '' }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-three">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#method3">
                                                        Cash on delivery
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method3" class="panel-collapse collapse"
                                                data-bs-parent="#accordion">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                        State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="w-100 bg-white  mt-25 border-0" type="submit">
                            <div class="Place-order ">
                                <a class="btn-hover">Place Order</a>
                            </div>
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
