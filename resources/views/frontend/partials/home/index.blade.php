@extends('frontend.master.master')
@section('title')
    Global Fashion
@endsection
@section('content')
    @include('frontend.partials.slider')

    <div class="container my-2">
        <h3>Top Categories</h3>
        <div class="d-flex flex-wrap">
            {{-- item --}}
            @isset($top_category)
                @foreach ($top_category as $item)
                    <a href="{{ route('categoryProducts', $item->slug) }}">
                        <div class="col-6 col-sm-4 col-md-2 col-lx-2 col-gl-2 p-1 mb-2">
                            <a href="{{ $item->slug ?? '' }}">
                                <div class="card shadow">
                                    <img class="card-img-top p-1 rounded"
                                        src="{{ URL::to('storage/categories/' . $item->image) }}" alt="Card image cap">
                                    <div class="card-body p-2">
                                        <h5 class="card-title m-0 text-center">{{ $item->name ?? '' }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </a>
                @endforeach
            @endisset




        </div>
    </div>

    <div class="product-area pb-60">
        <div class="container">
            @include('frontend.partials.home.product')
        </div>
    </div>
@endsection
