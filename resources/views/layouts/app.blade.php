<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>@yield('title')</title>
    @stack('css-styles')
</head>
<body>
    @include("layouts.navbar")
    @yield('content')
    @include("layouts.footer")
    
    @stack('scripts')
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>