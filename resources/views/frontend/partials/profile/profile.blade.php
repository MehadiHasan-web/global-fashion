@extends('frontend.master.master')
@section('title')
    Profile
@endsection
@section('content')
    <div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">My Account </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container col-8">
        <div class="d-flex  mt-2 bg-light mb-3">
            <div class="col text-center">
                <div class="p-3 rounded border-1  ">
                    <strong class="text-success">Total Order</strong>
                    <p class="text-dark">{{ $total_order ?? '' }}</p>
                </div>
            </div>
            <div class="col mr-2">
                <div class="p-3 rounded border-1  text-center">
                    <strong class="text-success">Order Complite</strong>
                    <p class="text-dark">{{ $order_done ?? '' }}</p>
                </div>
            </div>
            <div class="col mr-2">
                <div class="p-3 rounded border-1  text-center">
                    <strong class="text-warning">Panding Order</strong>
                    <p class="text-dark">{{ $pending_order ?? '' }}</p>
                </div>
            </div>
            <div class="col mr-2">
                <div class="p-3 rounded border-1  text-center">
                    <strong class="text-danger">Cancle Order</strong>
                    <p class="text-dark">{{ $order_cancel ?? '' }}</p>
                </div>
            </div>
        </div>
        <table class="table text-center col-8">
            <thead>
                <tr>
                    <th scope="col">Order Id</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Payment Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @isset($orders)
                    @foreach ($orders as $item)
                        <tr>
                            <th scope="row">{{ $item->order_id ?? '' }}</th>
                            <td>{{ date('d F, Y'), strtotime($item->order_id) }}</td>
                            <td>ট{{ $item->total ?? '' }}</td>
                            <td>Cash on delivery</td>
                            <td>
                                @if ($item->status == 0)
                                    <span class="p-1 fw-bold bg-danger rounded text-white">Pending</span>
                                @elseif ($item->status == 1)
                                    <span class="p-1 fw-bold bg-info rounded text-white">Order Recieved</span>
                                @elseif ($item->status == 2)
                                    <span class="p-1 fw-bold bg-primary rounded text-white">Order Shipped</span>
                                @elseif ($item->status == 3)
                                    <span class="p-1 fw-bold bg-success rounded text-white">Order Done</span>
                                @elseif ($item->status == 4)
                                    <span class="p-1 fw-bold bg-warning rounded text-white">Order Return</span>
                                @else
                                    <span class="p-1 fw-bold bg-danger rounded text-white">Order Cancle</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endisset


            </tbody>
        </table>
    </div>
    <div class="checkout-area pb-80 pt-100">
        <div class="container">
            <div class="row">
                <div class="ms-auto me-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse"
                                            href="#my-account-1">Edit your account information </a></h3>
                                </div>
                                <form action="{{ route('profile.update') }}" method="POST" id="my-account-1"
                                    class="panel-collapse collapse show" data-bs-parent="#faq">
                                    @csrf
                                    @method('patch')
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>My Account Information</h4>
                                                <h5>Your Personal Details</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Name</label>
                                                        <input type="text" name="name"
                                                            value="{{ old('name', $user->name ?? '') }}"
                                                            class="@error('name') is-invalide @enderror">
                                                        @error('name')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email"
                                                            value="{{ old('email', $user->email ?? '') }}"
                                                            class="@error('email') is-invalide @enderror">
                                                        @error('email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Telephone</label>
                                                        <input type="number" name="number"
                                                            value="{{ old('number', $user->number ?? '') }}"
                                                            class="@error('number') is-invalide @enderror">
                                                        @error('number')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Address</label>
                                                        <textarea name="address" cols="10" rows="5">{{ old('address', $user->address ?? '') }}</textarea>
                                                        @error('address')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse"
                                            href="#my-account-2">Change your password </a></h3>
                                </div>
                                <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">
                                    <div class="panel-body">
                                        <form action="{{ route('profile.change_password') }}" method="POST"
                                            class="myaccount-info-wrapper">
                                            @csrf
                                            @method('patch')
                                            <div class="account-info-wrapper">
                                                <h4>Change Password</h4>
                                                <h5>Your Password</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Password</label>
                                                        <input type="password" name="password"
                                                            class="@error('passwrod') is-invalide @enderror">
                                                        @error('password')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Password Confirm</label>
                                                        <input type="password" name="password_confirmation">
                                                        @error('password_confirmation')
                                                            <p class="text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>3 .</span> <a href="{{ route('wishlist') }}">Modify
                                            your wish list
                                        </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
