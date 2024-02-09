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
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title <span class="text-danger">(required)</span></label>
                        <input type="text" name="title" id=""
                            class="form-control @error('title') is-invalide @enderror" placeholder="Write slider title"
                            value="{{ old('title') }}" required>
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description <span
                                class="text-danger">(required)</span></label>
                        <textarea name="description" id="exampleFormControlTextarea1" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description" required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image <span class="text-danger">(required)</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="image" type="file"
                                    class="custom-file-input @error('image') is-visiable @enderror" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                            </div>
                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-6 p-0 pr-1">
                        <label for="Category">Related Category <span class="text-danger">(required)</span></label>
                        <div class="input-group">
                            <select name="category_id" class="custom-select  @error('category_id') is-visiable @enderror"
                                id="category_id">
                                @isset($categories)
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                                    @endforeach
                                @endisset

                            </select>
                        </div>
                        @error('category_id')
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
