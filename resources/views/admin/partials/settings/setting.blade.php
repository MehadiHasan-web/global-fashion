@extends('admin.master.master');
@section('title')
    Setting
@endsection
@section('subtitle')
    Setting List
@endsection
@section('content')
    <div class="">
        <h2>Logo Setting</h2>
        <div class="ml-4">
            <img class="img-fluid rounded mb-3" src="{{ URL::to('storage/settings/' . optional($setting)->logo) }}"
                alt="logo" style="width:170px; height:100px">
        </div>
        <div class="col-8 justify-content-center ml-4">
            <form action="{{ route('settings.logo') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group">
                    <input type="file" name="logo" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
@endsection
