<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Data -->
    @yield('meta-data')

    <title>@yield('title', config('app.name'))</title>

    <!-- Global stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
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
        <!-- Action bar -->
    @section('actionbar')
        @include('layouts.components.actionbar')
    @show
    <!-- End Action bar -->

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

        <!-- Footer -->
        @section('footer')
            @include('layouts.components.footer')
        @show
        <!-- End Footer -->

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
