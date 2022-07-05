<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | @yield('title')</title>
    @include('layouts.partials.font')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('dashboard.layouts.partials.style')
    @yield('head_script')
</head>

<body class="antialiased font-jakarta">
    @include('dashboard.layouts.partials.header')

    {{-- Page Content --}}
    <div class="flex">
        @include('dashboard.layouts.partials.leftsidemenu')
        <div class="min-h-screen bg-gray p-10 flex-grow">
            @yield('content')
        </div>
    </div>

    @include('dashboard.layouts.partials.scripts')
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
