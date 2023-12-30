@extends('admin.master.master');
@section('title')
    Social
@endsection
@section('subtitle')
    Social create
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('social.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="facebook"> <a class="text-info" href="{{ $social->facebook ?? '' }}">Facebook</a> <span
                                class="text-success">(Optional)</span></label>
                        <input type="text" name="facebook" id=""
                            class="form-control @error('facebook') is-invalide @enderror" placeholder="Write facebook link"
                            value="{{ old('facebook', $social->facebook ?? '') }}">
                        @error('facebook')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="twitter"><a class="text-info" href="{{ $social->twitter ?? '' }}">Twitter</a> <span
                                class="text-success">(Optional)</span></label>
                        <input type="text" name="twitter" id=""
                            class="form-control @error('twitter') is-invalide @enderror" placeholder="Write twitter link"
                            value="{{ old('twitter', $social->twitter ?? '') }}">
                        @error('twitter')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="linkedin"><a class="text-info" href="{{ $social->linkedin ?? '' }}">Linkedin</a> <span
                                class="text-success">(Optional)</span></label>
                        <input type="text" name="linkedin" id=""
                            class="form-control @error('linkedin') is-invalide @enderror" placeholder="Write linkedin link"
                            value="{{ old('linkedin', $social->linkedin ?? '') }}">
                        @error('linkedin')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="instagram"><a class="text-info" href="{{ $social->instagram ?? '' }}">Instagram</a>
                            <span class="text-success">(Optional)</span></label>
                        <input type="text" name="instagram" id=""
                            class="form-control @error('instagram') is-invalide @enderror"
                            placeholder="Write instagram link" value="{{ old('instagram', $social->instagram ?? '') }}">
                        @error('instagram')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiktok"><a class="text-info" href="{{ $social->tiktok ?? '' }}">Tiktok</a> <span
                                class="text-success">(Optional)</span></label>
                        <input type="text" name="tiktok" id=""
                            class="form-control @error('tiktok') is-invalide @enderror" placeholder="Write tiktok link"
                            value="{{ old('tiktok', $social->tiktok ?? '') }}">
                        @error('tiktok')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('social.index') }}" class="btn btn-success rounded-pill mr-2">Cancle</a>
                        <button type="submit" class="btn btn-info rounded-pill">Save</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@endsection
