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
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="">
                    @csrf
                    <div class="form-group">
                        <label>Product Name <span class="text-danger">(required)</span></label>
                        <input type="text" name="name" id=""
                            class="form-control @error('name') is-invalide @enderror" placeholder="Write product name"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Product Description <span
                                class="text-danger">(required)</span></label>
                        <textarea name="description" id="exampleFormControlTextarea1" rows="3"
                            class="form-control @error('description') is-invalide @enderror " placeholder="Write description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Brand Name <span class="text-success">(Optional)</span></label>
                        <input type="text" name="brand_name" id=""
                            class="form-control @error('brand_name') is-invalide @enderror" placeholder="Write brand name"
                            value="{{ old('brand_name') }}">
                        @error('brand_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="form-group col-6 p-0 pr-1">
                            <label for="Category">Category <span class="text-danger">(required)</span></label>
                            <div class="input-group">
                                <select name="category_id" class="custom-select @error('subcategory') is-invalide @enderror"
                                    id="category_id">
                                    <option selected="">Select Category...</option>
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
                            <label for="subcategory">Sib Category <span class="text-danger">(required)</span></label>
                            <div class="input-group">
                                <select name="subcategory_id"
                                    class="custom-select @error('subcategory') is-invalide @enderror" id="subcategory_id">
                                    <option selected="">Select sub category...</option>
                                </select>
                            </div>
                            @error('cat_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>



                    {{-- <div class="form-group">
                        <label for="image">Image <span class="text-danger">(required)</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="image" type="file"
                                    class="custom-file-input @error('image') is-visiable @enderror" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                            </div>
                        </div>
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> --}}
                    <div class="d-flex">
                        <a href="{{ route('product.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>



@endsection
