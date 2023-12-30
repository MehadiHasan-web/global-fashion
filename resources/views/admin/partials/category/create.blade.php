@extends('admin.master.master');
@section('title')
    Category
@endsection
@section('subtitle')
    Category create
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Name <span class="text-danger">(required)</span></label>
                        <input type="text" name="name" id=""
                            class="form-control @error('name') is-invalide @enderror" placeholder="Write category name"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description <span
                                class="text-success">(Optional)</span></label>
                        <textarea name="description" id="exampleFormControlTextarea1" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('category.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@endsection
