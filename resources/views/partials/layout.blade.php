<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'GW')</title>
    @vite('resources/css/app.css')
</head>
<body style="background: #242F40">
@include('partials.navbar')


                    @yield('content')

@include('partials.feet')
</body>
</html>
