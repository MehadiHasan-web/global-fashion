@extends('admin.master.master');
@section('title')
    Slider
@endsection
@section('subtitle')
    Slider Edit
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">(required)</span></label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalide @enderror" placeholder="Write slider title"
                            value="{{ old('title', $slider->title) }}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">(required)</span></label>
                        <textarea name="description" id="description" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description">{{ old('description', $slider->description ?? '') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3 ">
                        <img src="{{ URL::to('storage/slider/' . $slider->image ?? '') }}" class="img-fluid rounded"
                            alt="" style="width: 293px" id="existingImage">
                        <img class="img-fluid rounded" alt="" style="width: 293px" id="imagePreview">
                    </div>
                    <div class="form-group col-4 p-0 mt-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="update_image">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="image" type="file"
                                    class="custom-file-input @error('image') is-visiable @enderror"
                                    onchange="loadFile(event)" aria-describedby="update_image" id="imageInput"
                                    accept="image/*">
                                <label class="custom-file-label" for="inputGroupFile01">Change Image</label>
                            </div>
                        </div>
                        @error('image')
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

    <script>
        var existingImage = document.getElementById('existingImage');
        var imagePreview = document.getElementById('imagePreview');

        imagePreview.style.display = 'block';
        var loadFile = function(event) {
            existingImage.style.display = 'none';
            var output = document.getElementById('imagePreview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
