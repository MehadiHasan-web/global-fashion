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
                    @livewire('frontend.place-order')
                </div>
            </form>
        </div>
    </div>
@endsection
