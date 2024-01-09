<div class="col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-header d-flex justify-content-end">
            <a href="{{ route('order.management') }}" class="btn btn-success rounded-pill">New Order</a>
        </div>
        <div class="card-body">
            <table class="table table-hover m-0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Order Id</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($orders)
                        @foreach ($orders as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->order_id ?? '' }}</td>
                                <td>{{ $item->fname ?? '' }} {{ $item->lname ?? '' }}</td>
                                <td>{{ $item->number ?? '' }}</td>
                                <td><strong>TK {{ $item->total ?? '' }} </strong> </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('order.details', $item->id) }}"
                                            class="mr-2 btn btn-info rounded p-1"><i class="fa-regular fa-eye mt-1"></i></a>

                                        <button wire:click="orderComplete({{ $item->id }})"
                                            class="mr-2 btn btn-success rounded p-1">Order compelite</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
</div>
