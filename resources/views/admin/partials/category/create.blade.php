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
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- thumb image  --}}
                    <div class="file-upload border rounded col-4">
                        <label>Category Image <span class="text-danger">(required)</span></label>
                        {{-- <button class="file-upload-btn" type="button"
                                onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                        <div class="image-upload-wrap">
                            <input name="image" class="file-upload-input  @error('thumb_image') is-invalide @enderror"
                                type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                                <h3>Drag and drop </h3>
                            </div>
                        </div>
                        <div class="file-upload-content ">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                        class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="d-flex mt-2">
                        <div class="form-group col-6">
                            <label for="exampleFormControlTextarea1">Name <span
                                    class="text-danger">(required)</span></label>
                            <input type="text" name="name" id=""
                                class="form-control @error('name') is-invalide @enderror" placeholder="Write category name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleFormControlTextarea1">Discount Percentage<span
                                    class="text-success">(Optional)</span></label>
                            <input type="number" name="discount" id=""
                                class="form-control @error('discount') is-invalide @enderror" placeholder="Discount"
                                value="{{ old('discount') }}">
                            @error('discount')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group px-3">
                        <label for="Description">Description <span class="text-success">(Optional)</span></label>
                        <textarea name="description" id="Description" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex px-3">
                        <a href="{{ route('category.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>

                </form>



            </div>
        </div>
    </div>
@endsection
