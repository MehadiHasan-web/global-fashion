<meta charset="utf-8">
<link rel="shortcut icon" href="{{ asset('admin/img/favicon.svg') }}" />
<title>@yield('title')</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<!-- Common CSS -->
<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/fonts/icomoon/icomoon.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/main.min.css') }}" />

<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
<!-- Chartist css -->
<link href="{{ asset('admin/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/vendor/chartist/css/chartist-custom.css') }}" rel="stylesheet" />
@livewireStyles
