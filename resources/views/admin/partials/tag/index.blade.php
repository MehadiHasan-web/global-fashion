@extends('admin.master.master');
@section('title')
    Tag
@endsection
@section('subtitle')
    Tag List
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('tag.create') }}" class="btn btn-success rounded-pill">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover m-0">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($tags)
                            @foreach ($tags as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $item->name ?? '' }}</td>
                                    <td>{{ Str::limit($item->description, 20, '...') }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('tag.show', $item->id) }}" class="mr-2 btn btn-info rounded p-1"><i
                                                    class="fa-regular fa-eye"></i></a>
                                            <a href="{{ route('tag.edit', $item->id) }}"
                                                class="mr-2 btn btn-info rounded p-1"><i class="fa-solid fa-sliders"></i></a>
                                            <button data-delate-route="{{ route('tag.destroy', $item->id) }}"
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
                    {{ $tags->links('pagination::bootstrap-4') }}
                </ul>
            </div>
        </div>
    </div>
@endsection
