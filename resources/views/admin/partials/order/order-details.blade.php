@extends('admin.master.master');
@section('title')
    Order Details
@endsection
@section('subtitle')
    Order details
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">

                <table class="table table-borderless col-4 ml-3">
                    <tbody class="border">
                        <tr>
                            <th>Name</th>
                            <td class="ml-1">: {{ $order->fname ?? '' }} {{ $order->lname ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td class="ml-1">: {{ $order->email ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td class="ml-1">: {{ $order->country ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td class="ml-1">: {{ $address->country ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td class="ml-1">: {{ $order->address ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td class="ml-1">: {{ $order->city ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Thana</th>
                            <td class="ml-1">: {{ $order->thana ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>zip</th>
                            <td class="ml-1">: {{ $address->zip ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td class="ml-1">: {{ $order->number ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Additional info</th>
                            <td class="ml-1">: {{ $order->additional_info ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Total Price</th>
                            <td class="ml-1">: {{ $order->total ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>Order Id</th>
                            <td class="ml-1">: {{ $order->order_id ?? '' }}</td>
                        </tr>
                    </tbody>
                </table>





                <div class="mt-3">
                    <div class="col-lg-12 col-sm-12">
                        <div class="card">
                            <h4 class="ml-3 mt-3">Products</h4>
                            <div class="card-body">
                                <table class="table table-hover m-0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Product Name</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($orderDetails)
                                            @foreach ($orderDetails as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{ $item->product_name ?? '' }}</td>
                                                    <td>{{ $item->color ?? '' }}</td>
                                                    <td>{{ $item->size ?? '' }}</td>
                                                    <td>{{ $item->quantity ?? '' }}</td>
                                                    <td>{{ $item->price ?? '' }}</td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="{{ route('order.management') }}" class="btn btn-info rounded-pill">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
