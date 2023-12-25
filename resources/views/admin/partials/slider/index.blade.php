@extends('admin.master.master');
@section('title')
    Slider
@endsection
@section('subtitle')
    Slider List
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('slider.create') }}" class="btn btn-success rounded-pill">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th></th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>
                                <div>
                                    <strong>Title </strong>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, ea.</p>
                                </div>
                            </td>
                            <td>
                                <img style="width:100px; height:100px"
                                    src="https://th.bing.com/th/id/OIP.GlXqxcR9EmviN5kuwaUsMQHaIB?rs=1&pid=ImgDetMain"
                                    alt="">
                            </td>
                            <td>delete</td>
                        </tr>
                        @isset($sliders)
                            @foreach ($sliders as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $item->name ?? '' }}</td>
                                    <td>{{ Str::limit($item->description, 20, '...') }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('slider.show', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-regular fa-eye"></i></a>
                                            <a href="{{ route('slider.edit', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-solid fa-sliders"></i></a>
                                            <button data-delate-route="{{ route('slider.destroy', $item->id) }}"
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
                    {{-- {{ $sliders->links('pagination::bootstrap-4') }} --}}
                </ul>
            </div>
        </div>
    </div>
@endsection
