<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<style>
.theme-light {
    background-color: white;
}
.theme-dark {
    background-color: #546E7A;
}
</style>
<body class="bg-page">
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container justify-between mx-auto flex items-center">
                <div class="w-1/2">
                    <h1>
                        <img src="/images/logo.svg" alt="Tweety">
                    </h1>
                </div>
                <theme-switcher></theme-switcher>
            </header>
        </section>

        {{ $slot }}
    </div>
</body>

</html>
