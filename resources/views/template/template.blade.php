<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    {{-- Vite --}}
    @vite('resources/js/app.js')

</head>

<body>
    @yield('header')
    @yield('main')
    @yield('footer')
</body>

</html>
