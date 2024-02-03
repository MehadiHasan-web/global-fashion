@extends('admin.master.master');
@section('title')
    Contacts
@endsection
@section('subtitle')
    Contact Us
@endsection
@section('content')
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="d-flex mt-2">
            <div class="form-group col-6">
                <label for="exampleFormControlTextarea1">Number</label>
                <input type="text" name="number" id="" class="form-control " placeholder="Write number"
                    value="{{ $contacts->number ?? '' }}">
            </div>
            <div class="form-group col-6">
                <label for="exampleFormControlTextarea1">Another Number<span class="text-success">(Optional)</span></label>
                <input type="number" name="another_number" id="" class="form-control "
                    placeholder="another number" value="{{ $contacts->another_number ?? '' }}">
            </div>
        </div>
        <div class="d-flex mt-2">
            <div class="form-group col-6">
                <label for="exampleFormControlTextarea1">Email</label>
                <input type="email" name="email" id="" class="form-control " placeholder="Write  Email"
                    value="{{ $contacts->email ?? '' }}">
            </div>
            <div class="form-group col-6">
                <label for="exampleFormControlTextarea1">Another Email<span class="text-success">(Optional)</span></label>
                <input type="email" name=" another_email" id="" class="form-control " placeholder="Another Email"
                    value="{{ $contacts->another_email ?? '' }}">
            </div>
        </div>
        <div class="form-group px-3">
            <label for="address">Address embed code </label>
            <textarea name="address" id="address" rows="3" class="form-control " placeholder="Address"> {{ $contacts->address ?? '' }}</textarea>
        </div>
        <div class="form-group px-3">
            <label for="location">Location embed code </label>
            <textarea name="location" id="location" rows="3" class="form-control " placeholder="embed code">{{ $contacts->embed_code ?? '' }}</textarea>
        </div>
        <button class="btn btn-success ml-3">Save</button>

    </form>
@endsection
