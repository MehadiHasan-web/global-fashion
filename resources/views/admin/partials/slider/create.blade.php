@extends('admin.master.master');
@section('title')
    Slider
@endsection
@section('subtitle')
    Slider create
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('slider.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name <span class="text-danger">(required)</span></label>
                        <input type="text" name="title" id=""
                            class="form-control @error('title') is-invalide @enderror" placeholder="Write slider title"
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description <span
                                class="text-danger">(required)</span></label>
                        <textarea name="description" id="exampleFormControlTextarea1" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image <span class="text-danger">(required)</span></label>
                        <input type="file" name="image" class="form-control @error('image') is-invalide @enderror">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('slider.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@endsection
