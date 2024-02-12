@extends('admin.master.master');
@section('title')
    Product
@endsection
@section('subtitle')
    Product List
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('product.create') }}" class="btn btn-success rounded-pill">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($products)
                            @foreach ($products as $item)
                                <tr>
                                    <td>
                                        <img style="width:80px; height:80px"
                                            src="{{ URL::to('storage/product_thumbnail/' . $item->thumb_image) }}" alt=""
                                            class="rounded">
                                    </td>
                                    <td scope="row">{{ $item->name ?? '' }}</td>
                                    <td>
                                        <p>{{ $item->product_code ?? '' }}</p>
                                    </td>
                                    <td>{{ $item->category->name ?? '' }}</td>
                                    <td>{{ $item->price ?? '' }}</td>
                                    <td>{{ $item->discounted_price ?? '' }}</td>



                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('product.show', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-regular fa-eye"></i></a>
                                            <a href="{{ route('product.edit', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-solid fa-sliders"></i></a>
                                            <button data-delate-route="{{ route('product.destroy', $item->id) }}"
                                                class="delate-item-btn mr-2 btn btn-danger rounded p-1"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
                <ul class="pagination justify-content-center mt-2">
                    {{ $products->links('pagination::bootstrap-4') }}
                </ul>
            </div>
        </div>
    </div>
@endsection
