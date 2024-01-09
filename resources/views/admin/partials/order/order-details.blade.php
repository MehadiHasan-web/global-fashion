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
                <div>
                    <strong>Name: </strong>
                    <span class="ml-1">{{ $order->fname ?? '' }} {{ $order->lname ?? '' }}</span>
                </div>
                <div>
                    <strong>Email: </strong>
                    <span class="ml-1">{{ $order->email ?? '' }}</span>
                </div>
                <div>
                    <strong>Country: </strong>
                    <span class="ml-1">{{ $order->country ?? '' }}</span>
                </div>
                <div>
                    <strong>Country: </strong>
                    <span class="ml-1">{{ $address->country ?? '' }}</span>
                </div>
                <div>
                    <strong>Address: </strong>
                    <span class="ml-1">{{ $order->address ?? '' }}</span>
                </div>
                <div>
                    <strong>City: </strong>
                    <span class="ml-1">{{ $order->city ?? '' }}</span>
                </div>
                <div>
                    <strong>Thana: </strong>
                    <span class="ml-1">{{ $order->thana ?? '' }}</span>
                </div>
                <div>
                    <strong>zip: </strong>
                    <span class="ml-1">{{ $address->zip ?? '' }}</span>
                </div>
                <div>
                    <strong>Number: </strong>
                    <span class="ml-1">{{ $order->number ?? '' }}</span>
                </div>
                <div>
                    <strong>Additional info: </strong>
                    <span class="ml-1">{{ $order->additional_info ?? '' }}</span>
                </div>
                <div>
                    <strong>Total Price: </strong>
                    <span class="ml-1">{{ $order->total ?? '' }}</span>
                </div>
                <div>
                    <strong>Order Id: </strong>
                    <span class="ml-1">{{ $order->order_id ?? '' }}</span>
                </div>


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
