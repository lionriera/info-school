<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{url('vendor/template/')}}/libs/jquery/jquery.min.js"></script>
    <!-- {{-- <script src="url('vendor/template/')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script> --}} -->
    <script src="{{url('vendor/template/')}}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{url('vendor/template/')}}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/datatables/media')}}/css/dataTables.bootstrap4.min.css">
</head>
<body data-topbar="colored">
    <div id="app"></div>
</body>
</html>