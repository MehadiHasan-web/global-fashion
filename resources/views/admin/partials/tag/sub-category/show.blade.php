@extends('admin.master.master');
@section('title')
    Sub Category
@endsection
@section('subtitle')
    Sub Category show
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex mt-2">
                    <strong>Name: </strong>
                    <p class="ml-3">{{ $subCategory->name ?? '' }}</p>
                </div>
                <div class="d-flex mt-2">
                    <strong>Name: </strong>
                    <p class="ml-3">{{ $subCategory->category->name ?? '' }}</p>
                </div>
                <div class="d-flex mt-2">
                    <strong>Description: </strong>
                    <p class="ml-3">{{ $subCategory->description ?? '' }}</p>
                </div>
                <div>
                    <a href="{{ route('subcategory.index') }}" class="btn btn-info rounded-pill">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
