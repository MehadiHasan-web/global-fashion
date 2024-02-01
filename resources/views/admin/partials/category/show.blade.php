@extends('admin.master.master');
@section('title')
    Category
@endsection
@section('subtitle')
    Category show
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                @isset($category->image)
                    <div class="">
                        <img style="width: 160px; height:160px; " src="{{ URL::to('storage/categories/' . $category->image) }}"
                            alt="" class="rounded">
                    </div>
                @endisset
                <div>
                    <strong>Name: </strong>
                    <p class="ml-5">{{ $category->name ?? '' }}</p>
                </div>
                <div>
                    <strong>Description: </strong>
                    <p class="ml-5">{{ $category->description ?? '' }}</p>
                </div>
                <div>
                    <a href="{{ route('category.index') }}" class="btn btn-info rounded-pill">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
