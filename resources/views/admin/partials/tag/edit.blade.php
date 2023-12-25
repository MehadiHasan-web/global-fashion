@extends('admin.master.master');
@section('title')
    Tag
@endsection
@section('subtitle')
    Tag Edit
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tag.update', $tag->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">tag <span class="text-danger">(required)</span></label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalide @enderror" placeholder="Write tag name"
                            value="{{ old('name', $tag->name) }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span class="text-success">(Optional)</span></label>
                        <textarea name="description" id="description" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description">{{ old('description', $tag->description ?? '') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('tag.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@endsection
