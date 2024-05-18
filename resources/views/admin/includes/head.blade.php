<meta charset="utf-8">
<link rel="shortcut icon" href="{{ asset('admin/img/favicon.svg') }}" />
<title>@yield('title')</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Common CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/fonts/icomoon/icomoon.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/main.min.css') }}" />
{{-- selector 2  --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
<!-- Chartist css -->
<link href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/vendor/chartist/css/chartist-custom.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

{{-- alpine js  --}}
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@livewireStyles
