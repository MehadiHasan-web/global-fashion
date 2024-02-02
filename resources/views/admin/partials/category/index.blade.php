@extends('admin.master.master');
@section('title')
    Category
@endsection
@section('subtitle')
    Category List
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('category.create') }}" class="btn btn-success rounded-pill">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Discount</th>
                            <th>Description</th>
                            <th>Top Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($categories)
                            @foreach ($categories as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>
                                        @isset($item->image)
                                            <div class="">
                                                <img style="width: 40px; height:40px; "
                                                    src="{{ URL::to('storage/categories/' . $item->image) }}" alt=""
                                                    class="rounded">
                                            </div>
                                        @endisset
                                    </td>
                                    <td>
                                        {{ $item->name ?? '' }}
                                    </td>
                                    <td>{{ $item->discount ?? 'No Discount' }}</td>
                                    <td>{{ Str::limit($item->description, 20, '...') }}</td>
                                    <td class="d-flex justify-content-center">
                                        <div class="mt-2">
                                            @if ($item->top_category == true)
                                                <a href="{{ route('removeTopCategory', $item->id) }}"
                                                    class="mr-2 btn btn-danger rounded p-1"><i
                                                        class="fa-solid fa-xmark px-2"></i></a>
                                            @else
                                                <a href="{{ route('addTopCategory', $item->id) }}"
                                                    class="mr-2 btn btn-info rounded p-1"><i
                                                        class="fa-solid fa-check px-2"></i></a>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('category.show', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-regular fa-eye"></i></a>
                                            <a href="{{ route('category.edit', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-solid fa-sliders"></i></a>
                                            <button data-delate-route="{{ route('category.destroy', $item->id) }}"
                                                class="delate-item-btn mr-2 btn btn-danger rounded p-1"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
                <ul class="pagination justify-content-center mt-2">
                    {{ $categories->links('pagination::bootstrap-4') }}
                </ul>
            </div>
        </div>
    </div>
@endsection
