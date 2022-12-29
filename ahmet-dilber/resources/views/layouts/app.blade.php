<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @yield('assets')
    @vite(['resources/sass/app.scss', 'resources/css/dropdown-menu.css', 'resources/css/app.css', 'resources/css/responsive.css', 'public/css/pages/detail.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('partials.navbar')
        <main class="">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
