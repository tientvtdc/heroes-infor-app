<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-200">
    <div id="app">
        @include('header')

        @yield('content')

        @include('footer')
    </div>
    @yield('script')
    @vite('resources/js/app.js')

</body>

</html>