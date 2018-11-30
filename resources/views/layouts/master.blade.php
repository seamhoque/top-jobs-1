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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/candidate.js"></script>


    <!-- /core JS files -->

    <!-- Plugin JS Files -->
    @stack('scripts-plugin')
    <script>
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 300 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
        };
    </script>
    <!-- Page Scripts -->
    @stack('scripts')

</body>
</html>
