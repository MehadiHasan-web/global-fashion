@extends('admin.master.master');
@section('title')
    Sub Category
@endsection
@section('subtitle')
    Sub Category Edit
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('subcategory.update', $subCategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">subCategory <span class="text-danger">(required)</span></label>
                        <input type="text" name="name" id="name"
                            class="form-control @error('name') is-invalide @enderror" placeholder="Write subCategory name"
                            value="{{ old('name', $subCategory->name) }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Category">Category <span class="text-danger">(required)</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="Category">Options</label>
                            </div>
                            <select name="cat_id" class="custom-select @error('subcategory') is-invalide @enderror"
                                id="Category">
                                <option>Select Category...</option>
                                @isset($categories)
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $subCategory->cat_id ? 'selected' : '' }}>
                                            {{ $item->name ?? '' }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        @error('cat_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description <span class="text-success">(Optional)</span></label>
                        <textarea name="description" id="description" rows="3"
                            class="form-control @error('description') is-invalide @enderror" placeholder="Write description">{{ old('description', $subCategory->description ?? '') }}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex mt-3">
                        <a href="{{ route('subcategory.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@endsection
