@extends('admin.master.master');
@section('title')
    Messages
@endsection
@section('subtitle')
    Message List
@endsection
@section('content')
    <div class="accordion" id="accordionExample">
        @if ($messages->count() > 0)
            @foreach ($messages as $key => $item)
                <div class="card">
                    <div class="card-header" id="heading{{ $key }}">
                        <h6 class="mb-0">
                            <span class="pl-2 ">{{ $item->name ?? '' }}</span> || <span
                                class="text-muted text-sm">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                            <button class="btn btn-link btn-block text-left off-focus font-bold mt-2" type="button"
                                data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true"
                                aria-controls="collapse{{ $key }}">
                                {{ $item->subject ?? 'No Subject' }}
                            </button>
                        </h6>
                    </div>

                    <div id="collapse{{ $key }}" class="collapse " aria-labelledby="heading{{ $key }}"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <h6>Number: {{ $item->phone ?? 'No write phone number.' }}</h6>
                            <p>Message: {{ $item->message ?? 'No write message..' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
@endsection
