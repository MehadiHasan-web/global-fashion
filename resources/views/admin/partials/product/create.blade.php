@extends('admin.master.master');
@section('title')
    Product
@endsection
@section('subtitle')
    Product create
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body ">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="row ml-1">
                    @csrf
                    <div class="col-8 border rounded  ">
                        <div class="form-group">
                            <label>Product Name <span class="text-danger">(required)</span></label>
                            <input type="text" name="name" id=""
                                class="form-control @error('name') is-invalide @enderror" placeholder="Write product name"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Product Description <span
                                    class="text-danger">(required)</span></label>


                            <textarea name="description" id="editor" rows="3"
                                class="form-control @error('description') is-invalide @enderror " placeholder="Write description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="form-group col-6 p-0 pr-1">
                                <label>Product price <span class="text-danger">(required)</span></label>
                                <input type="number" name="price" id=""
                                    class="form-control @error('price') is-invalide @enderror"
                                    placeholder="Write product price" value="{{ old('price') }}" required>
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-6 p-0 pl-1">
                                <label>Product discounted price <span class="text-success">(Optional)</span></label>
                                <input type="number" name="discounted_price" id=""
                                    class="form-control @error('discounted_price') is-invalide @enderror"
                                    placeholder="Write product discounted price" value="{{ old('discounted_price') }}">
                                @error('discounted_price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Brand Name <span class="text-success">(Optional)</span></label>
                            <input type="text" name="brand_name" id=""
                                class="form-control @error('brand_name') is-invalide @enderror"
                                placeholder="Write brand name" value="{{ old('brand_name') }}">
                            @error('brand_name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex">
                            <div class="form-group col-6 p-0 pr-1">
                                <label for="Category">Category <span class="text-danger">(required)</span></label>
                                <div class="input-group">
                                    <select name="category_id"
                                        class="custom-select @error('subcategory') is-invalide @enderror" id="category_id"
                                        required>
                                        @isset($categories)
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name ?? '' }}</option>
                                            @endforeach
                                        @endisset
                                    </select>
                                </div>
                                @error('cat_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-6 p-0 pl-1">
                                <label for="subcategory">Sib Category <span class="text-success">(Optional)</span></label>
                                <div class="input-group">
                                    <select name="subcategory_id"
                                        class="custom-select @error('subcategory') is-invalide @enderror"
                                        id="subcategory_id">
                                        {{-- <option selected="" >Select sub category...</option> --}}
                                    </select>
                                </div>
                                @error('cat_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12  form-group p-0">
                            <label for="Colors">Colors <span class="text-danger">(required)</span></label>
                            <select name="color[]"
                                class="form-control js-example-tokenizer @error('color') is-invalide @enderror"
                                multiple="multiple" required>
                                <option selected="selected">white</option>
                                <option>red</option>
                                <option>green</option>
                            </select>
                            @error('color')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-12  form-group p-0">
                            <label for="Size">Size <span class="text-danger">(required)</span></label>
                            <select name="size[]"
                                class="form-control js-example-tokenizer  @error('size') is-invalide @enderror"
                                multiple="multiple" required>
                                <option selected="selected">S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                            </select>
                            @error('size')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <label>Gander <span class="text-danger">(required)</span></label>
                        <div class="d-flex mb-2">
                            <div class="form-check">
                                <input class="form-check-input  @error('gender') is-invalide @enderror" type="radio"
                                    name="gender" id="male" value="1" checked style="margin-top: 9px;">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>

                            <div class="form-check ml-3">
                                <input class="form-check-input  @error('gender') is-invalide @enderror" type="radio"
                                    name="gender" id="femail" value="2" style="margin-top: 9px;">
                                <label class="form-check-label" for="femail">
                                    Female
                                </label>
                            </div>
                        </div>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        {{-- tags  --}}
                        <div class=" col-12 mb-3 p-0">
                            <strong class="pl-0">Tags <span class="text-success">(Optional)</span></strong>
                            <div class="row pl-2">
                                @isset($tags)
                                    @foreach ($tags as $item)
                                        <div class="form-check mr-2 ml-2 ">
                                            <input name="tag_id[]" class="form-check-input" type="checkbox"
                                                value="{{ old('tag_id[]', $item->id) }}" id="{{ $item->id ?? '' }}"
                                                {{ in_array($item->id, old('tag_id', [])) ? 'checked' : '' }}
                                                style="margin-top: 9px;">
                                            <label class="form-check-label" for="{{ $item->id }}">
                                                {{ $item->name ?? '' }}
                                            </label>
                                        </div>
                                    @endforeach
                                @endisset

                            </div>
                        </div>
                        {{-- tags end --}}

                    </div>

                    <div class="col-4 ">
                        {{-- thumb image  --}}
                        <div class="file-upload border rounded">
                            <label>Thumbnail Image <span class="text-danger">(required)</span></label>
                            {{-- <button class="file-upload-btn" type="button"
                                onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button> --}}

                            <div class="image-upload-wrap">
                                <input name="thumb_image"
                                    class="file-upload-input  @error('thumb_image') is-invalide @enderror" type='file'
                                    onchange="readURL(this);" accept="image/*" required />
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
                            @error('thumb_image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- multipal image --}}
                        <div class="upload__box mt-2 border rounded">
                            <div class="upload__btn-box mt-3">
                                <label class="upload__btn">
                                    <p>Upload more images</p>
                                    <input name="images[]" type="file" multiple="" data-max_length="20"
                                        class="upload__inputfile  @error('images') is-invalide @enderror" multiple>
                                </label>
                                @error('images')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="upload__img-wrap"></div>
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <a href="{{ route('product.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>





            </div>
        </div>
    </div>


@endsection
