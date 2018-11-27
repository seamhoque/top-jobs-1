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

    <!-- Page Container -->
    @yield('content')
    <div class="row justified-content-center">
        <div class="col 12 text-center">
            <div class="jumbotron">
                <h1 class="font-weight-bold" align="center">Lorem Ipsum Dolor</h1><br>
                <div class="d-flex justify-content-center">
                    <div class="p-2">
                        <button type="button" class="btn btn-outline-primary btn-sm" style="padding-right: 20px">Full Time</button>
                    </div>
                    <div class="p-2">
                        <a><i class='fa fa-map-marker'></i>  Location</a>
                    </div>
                    <div class="p-2">
                        <a><i class='fa fa-calender'></i>  Posted 4 months ago</a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container" style="margin: fill">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-around" style="border-bottom: 5px solid">
                    <div class="p-2" style="padding-left: 10px"><br>
                        <i class='fas fa-tv' style='font-size:60px; color:blueviolet;'></i>
                    </div>
                    <div class="p-2">
                        <br><strong>Example</strong><br>
                        <i class='fa fa-link'></i><a class=link href=#> www.example.com</a>
                    </div>
                    <div class="p-2"><br>
                        <br><i class='fa fa-phone-square'></i> +880 1788 888 888
                    </div>
                    <div class="p-2"><br>
                        <br><i class="fas fa-envelope-square"></i> example@demo.com
                    </div>
                </div>
                <br><h5>Job Description</h5><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <br><br>
                <h5>Experience</h5>
                <br>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                <br><br>
                <h5>Must Have</h5>
                <br>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Aliquam ut sapien id quam sagittis tempus id at nisl.</li>
                    <li>Quisque malesuada odio condimentum est mollis, quis imperdiet libero sollicitudin.</li>
                    <li>Nunc hendrerit ligula at sodales consequat. </li>
                    <li>Duis eget orci vel mi suscipit eleifend at eu purus.</li>
                    <li>Praesent molestie ex ut ligula fringilla, eu feugiat urna pulvinar.</li>
                    <li>Cras vitae odio sit amet eros semper ullamcorper.</li>
                    <li>Nulla condimentum augue in quam condimentum, non accumsan lectus tincidunt.</li>
                </ul>
                <br><br>
                <h5>Nice to Have</h5> <br>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Aliquam ut sapien id quam sagittis tempus id at nisl.</li>
                    <li>Quisque malesuada odio condimentum est mollis, quis imperdiet libero sollicitudin.</li>
                    <li>Nunc hendrerit ligula at sodales consequat. </li>
                    <li>Duis eget orci vel mi suscipit eleifend at eu purus.</li>
                    <li>Praesent molestie ex ut ligula fringilla, eu feugiat urna pulvinar.</li>
                    <li>Cras vitae odio sit amet eros semper ullamcorper.</li>
                    <li>Nulla condimentum augue in quam condimentum, non accumsan lectus tincidunt.</li>
                    <li>Nunc hendrerit ligula at sodales consequat. </li>
                    <li>Aliquam ut sapien id quam sagittis tempus id at nisl.</li>
                </ul>
                <br><br>
                <h5>Just to Add</h5>
                <br>
                Fusce tincidunt elit vel volutpat tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Nunc non magna mattis, consequat ante in, aliquam mauris. Integer in dictum orci. In hac habitasse platea dictumst.
                <br>
                <b>Some perks:</b> Ut non arcu erat. Sed erat elit, varius in pellentesque et, viverra vel ligula. Etiam hendrerit enim semper porta vehicula.
                Nullam pretium tincidunt diam.



                <br><br><br><h4><strong>Related Jobs</strong></h4><br>
                <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
                    <div class="p-2"><br>
                        <i class='fas fa-folder-open' style='font-size:75px;color:mediumorchid; padding-left: 30px'></i>
                    </div>
                    <div class="p-2">
                        <h4><a href="#">JEB Product Sales Specialist, Russia & CIS</a></h4>
                        <p>General Electric</p>
                        <p><i class='fas fa-map-marker-alt'></i> Moscow, Russia</p>
                    </div>
                    <div class="ml-auto p-2"><br>
                        <button type="button" class="btn btn-outline-primary">Part Time</button><br><br>
                        <small>4 months ago</small>
                    </div>
                </div>
                <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
                    <div class="p-2"><br>
                        <i class='fas fa-paper-plane' style='font-size:75px;color:tomato; padding-left: 30px'></i>
                    </div>
                    <div class="p-2">
                        <h4><a href="#">Production/Assembly Worker</a></h4>
                        <p>Mandstad</p>
                        <p><i class='fas fa-map-marker-alt'></i> Hindmarsh SA, Australia</p>
                    </div>
                    <div class="ml-auto p-2"><br>
                        <button type="button" class="btn btn-outline-danger">Temporary</button><br><br>
                        <small>4 months ago</small>
                    </div>
                </div>

                <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
                    <div class="p-2"><br>
                        <i class='fas fa-briefcase' style='font-size:75px;color:yellow; padding-left: 30px'></i>
                    </div>
                    <div class="p-2">
                        <h4><a href="#">Compliance Associate - London</a></h4>
                        <p>AMP Capital</p>
                        <p><i class='fas fa-map-marker-alt'></i> London, UK</p>
                    </div>
                    <div class="ml-auto p-2"><br>
                        <button type="button" class="btn btn-outline-primary">Part Time</button><br><br>
                        <small>4 months ago</small>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <br><br><button class="btn btn-danger btn-lg btn-block">Apply For This Job</button>
                <br><br><br>
                <h4 align="center">Job Overview</h4>
                <br><br>
                <div class="container" style="border: 1px solid">
                    <b>Offered Salary</b>
                    <br> <i class="fa fa-money" style="font-size:24px"></i>
                    $5000 - $10000
                    <br><br>
                    <b>Gender</b>
                    <br> <i class='fas fa-mars-double' style='font-size:24px'></i>
                    Male<br><br>
                    <b> Career Level</b><br> <i class='fas fa-chart-bar' style='font-size:24px'></i>
                    Lead<br><br>
                    <b>Industry</b><br> <i class='fas fa-industry' style='font-size:24px'></i>
                    Information Technology<br><br>
                    <b>Experience</b><br><i class='fas fa-hourglass' style='font-size:24px'></i>
                    6-7 Years <br> <br>
                    <b>Qualification</b> <br> <i class='fas fa-graduation-cap' style='font-size:24px'></i>Bachelor Degree
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Container -->

    <!-- Footer -->
@section('footer')
    @include('layouts.components.footer')
@show
<!-- End Footer -->

</div>


</body>
</html>
