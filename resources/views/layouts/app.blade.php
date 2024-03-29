<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <title>{{ config('app.name') }} | @yield('title')</title>
    @include('layouts.partials.font')
    @yield('head_script')
</head>

<body class="antialiased font-jakarta">
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
    @yield('script')

    <script>
        $(document).ready(function () {
            // Mobile menu toggle
            $("#mobileMenuToggle").click(function (e) {
                e.preventDefault();
                $("#mobileMenu").toggle();
            });
            // Mobile Profile menu toggle
            $("#mobileProfileMenuToggle").click(function (e) {
                e.preventDefault();
                $("#profileMenu").toggle();
            });
        });
    </script>
</body>
</html>
