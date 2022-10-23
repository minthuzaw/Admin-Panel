<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon/user.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/style.css', 'resources/css/app.css', 'resources/css/btn.css'])
    @vite(['resources/js/app.js', 'resources/js/script.js'])

</head>

<body id="body-pd" class="body-pd">
<div>

    <x-header/>

    <x-sidebar/>
    <main class="main-content">
        @yield('content')
    </main>
</div>

</body>
</html>
