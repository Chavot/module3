<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Game World')</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script
    @vite('resources/css/app.css')
</head>
<body>
@include('partials.navbar')


                    @yield('content')

@include('partials.feet')
@stack('scripts')
</body>
</html>
