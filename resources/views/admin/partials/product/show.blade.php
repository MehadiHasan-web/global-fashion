@extends('admin.master.master');
@section('title')
    Slider
@endsection
@section('subtitle')
    Slider show
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <strong>Name: </strong>
                    <p class="ml-5">{{ $slider->name ?? '' }}</p>
                </div>
                <div>
                    <strong>Description: </strong>
                    <p class="ml-5">{{ $slider->description ?? '' }}</p>
                </div>
                <div class="mt-3 mb-3 ">
                    <img src="{{ URL::to('storage/slider/' . $slider->image ?? '') }}" class="img-fluid rounded" alt=""
                        style="width: 300px">
                </div>
                <div class="d-flex justify-content-start">
                    <div class="d-flex ml-2">
                        <a href="{{ route('slider.index') }}" class="btn btn-info rounded-pill">Back</a>

                    </div>
                    <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-info ml-2 rounded p-2 "><i
                            class="fa-solid fa-sliders pt-1"></i></a>
                    <button data-delate-route="{{ route('slider.destroy', $slider->id) }}"
                        class="delate-item-btn mr-2 btn btn-danger rounded p-2 ml-2"><i
                            class="fa-regular fa-trash-can"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection
