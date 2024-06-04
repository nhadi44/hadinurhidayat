<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/assets/favicon/favicon.ico') }}">
    @stack('styles')
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>

<body>
    <header class="fixed w-full">
        <x-navbar />
    </header>
    <main>
        @yield('content')
    </main>
    @if (!request()->routeIs('Home'))
        <x-footer></x-footer>
    @endif
    @vite('resources/js/app.js')
    @stack('scripts')
    <script>
        // on reaload page go to top
        window.onload = function() {
            window.scrollTo(0, 0);
        };
    </script>
</body>

</html>
