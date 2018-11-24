<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Data -->
    @yield('meta-data')

    <title>@yield('title', config('app.name'))</title>

    <!-- Global stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- /Global stylesheets -->

    <!-- Custom Styles -->
    @stack('styles')

    <!-- Header Script -->
    <script>
        const app_root = `{{ url('/') }}`;
    </script>

    @stack('header-scripts')

</head>
<body @section('body-attrs') @show>

    <div id="app">

        <!-- Navbar -->
        @section('navbar')
            @include('layouts.components.navbar')
        @show
        <!-- End Navbar -->

        <!-- Flash Message -->
        @section('flash-message')
        @show
        <!-- Flash Message -->

        <!-- Page Container -->
        <div class="page-content">
            @yield('content')
        </div>
        <!-- End Page Container -->

    </div>

    <!-- Modals -->
    @yield('modals')
    <!-- End Modals -->

    <!-- Core JS files -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- /core JS files -->

    <!-- Plugin JS Files -->
    @stack('scripts-plugin')

    <!-- Page Scripts -->
    @stack('scripts')

</body>
</html>
