@extends('admin.master.master');
@section('title')
    Product
@endsection
@section('subtitle')
    Product show
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body row">
                <div class="col-8">
                    <div class="mb-3">
                        <strong>Name: </strong> <span class="ml-2">{{ $product->name ?? '' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Slug: </strong> <span class="ml-2">{{ $product->slug ?? '' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Description: </strong>
                        <span class="ml-2">
                            <p class="ml-2 " style="text-align: justify;">{!! $product->description ?? '' !!}</p>
                        </span>
                    </div>
                    <div class="mb-3">
                        <strong>Price: </strong>
                        <span class="ml-2">{{ $product->price ?? '' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Discound Price: </strong>
                        <span class="ml-2">{{ $product->discounted_price ?? '' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Category: </strong>
                        <span class="ml-2">{{ $product->category->name ?? '' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Subcategory: </strong>
                        <span class="ml-2">{{ $product->subcategory->name ?? 'No Subcategory' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Brand Name: </strong>
                        <span class="ml-2">{{ $product->brand_name ?? 'No Subcategory' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Gender: </strong>
                        <span class="ml-2">{{ $product->gender = $product->gender == 1 ? 'Male' : 'Female' }}</span>
                    </div>
                    <div class="mb-4">
                        <strong>Colors: </strong>
                        <span class="ml-2">
                            @foreach (json_decode($product->color) as $item)
                                <span class="p-1 btn btn-light rounded">{{ $item }}</span>
                            @endforeach
                        </span>
                    </div>
                    <div class="mb-3">
                        <strong>Size: </strong>
                        <span class="ml-2">
                            @foreach (json_decode($product->size) as $item)
                                <span class="p-2 btn btn-dark btn-sm rounded"><strong>{{ $item }}</strong></span>
                            @endforeach
                        </span>

                    </div>
                    <div class="mb-3">
                        <strong>Date: </strong>
                        <span class="ml-2">{{ $product->created_at->diffForHumans() ?? 'No Subcategory' }}</span>
                    </div>
                    <div class="mb-3">
                        <strong>Tag: </strong>
                        <span class="ml-2">
                            @foreach ($product->tag as $item)
                                <span class="p-1 bg-info text-white ml-2 rounded">{{ $item->name }}</span>
                            @endforeach
                        </span>
                    </div>




                    <div class="d-flex justify-content-start mt-5">
                        <div class="d-flex ml-2">
                            <a href="{{ route('product.index') }}" class="btn btn-info rounded-pill">Back</a>

                        </div>
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info ml-2 rounded p-2 "><i
                                class="fa-solid fa-sliders pt-1"></i></a>
                        <button data-delate-route="{{ route('product.destroy', $product->id) }}"
                            class="delate-item-btn mr-2 btn btn-danger rounded p-2 ml-2"><i
                                class="fa-regular fa-trash-can"></i></button>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mt-3 mb-3 ">
                        <img src="{{ URL::to('storage/product_thumbnail/' . $product->thumb_image ?? '') }}"
                            class="img-fluid rounded" alt="" style="width: 300px">
                    </div>
                    <div class="mt-4">
                        <div class="row">
                            @isset($product->images)
                                @foreach (json_decode($product->images) as $image)
                                    <img src="{{ URL::to('storage/product_image/' . $image ?? '') }}" alt=""
                                        class="img-fluid rounded ml-1 mr-1 mb-1" style="width:100; height:100px;">
                                @endforeach
                            @endisset

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
