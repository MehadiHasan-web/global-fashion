@extends('admin.master.master');
@section('title')
    Tag
@endsection
@section('subtitle')
    Tag show
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <strong>Name: </strong>
                    <p class="ml-5">{{ $tag->name ?? '' }}</p>
                </div>
                <div>
                    <strong>Description: </strong>
                    <p class="ml-5">{{ $tag->description ?? '' }}</p>
                </div>
                <div>
                    <a href="{{ route('tag.index') }}" class="btn btn-info rounded-pill">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
