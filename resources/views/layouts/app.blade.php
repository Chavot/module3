<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'GW')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background: #2d3748;">

@yield('content')

</body>
</html>
