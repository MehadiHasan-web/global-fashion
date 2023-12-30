@extends('admin.master.master');
@section('title')
    Socials
@endsection
@section('subtitle')
    Socials List
@endsection
@section('content')
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('slider.create') }}" class="btn btn-success rounded-pill">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-hover m-0">
                    Facebook
                </table>
                <ul class="pagination justify-content-center mt-2">
                    {{-- {{ $sliders->links('pagination::bootstrap-4') }} --}}
                </ul>
            </div>
        </div>
    </div>
@endsection
