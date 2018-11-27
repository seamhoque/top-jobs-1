@extends('layouts.master')

    @section('title','Jobs')
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





    <!-- Global stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- /Global stylesheets -->






</head>



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
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="font-weight-bold" align="center">Jobs</h1>
        </div>
    </div>
<div class="row justify-content-center">
    <div class="col-lg-3" >
        <form>
            <div class="input-group mb-3">
                <form>
                    <input type="text" class="form-control" placeholder="Job titles, keywords or company names" name="searchName">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="jobTitle"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </form><br>

        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="All Locations" name="searchLocation">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class='fas fa-map-marker-alt'></i></button>
                </div>
            </div>
        </form><br>
        <div>
            <ul>
                <li class="list__item">
                    <a  href="#">Last Hour</a>
                </li>
                <li class="list__item">
                    <a  href="#">Last 24 Hours</a>
                </li>
                <li class="list__item">
                    <a  href="#">Last 7 Days</a>
                </li>
                <li class="list__item">
                    <a  href="#">Last 14 Days</a>
                </li>
                <li class="list__item">
                    <a  href="#">Last 30 Days</a>
                </li>
                <li class="list__item">
                    <a  href="#">All</a>
                </li>
            </ul>
        </div>

        <br>
        <br>
        <div>
            <span>Job Type</span>
            <ul>
                <li>
                    <a href="#">Freelance<span class="count">(3)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Full Time<span class="count">(5)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Internship<span class="count">(3)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Part Time<span class="count">(5)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Temporary<span class="count">(5)</span>
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <span>Specialism</span>
            <ul>
                <li>
                    <a href="#">Construction<span class="count">(2)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Coordinator<span class="count">(1)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Employer<span class="count">(4)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Financial Career<span class="count">(1)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Information Technology<span class="count">(4)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Marketing<span class="count">(3)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Quality Check<span class="count">(1)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Real Estate<span class="count">(1)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Sales<span class="count">(2)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Teaching<span class="count">(1)</span>
                    </a>
                </li>
                <li>
                    <a href="#">Supporting<span class="count">(1)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight"><b>Showing 1–10 of 21 jobs</b></div>
            <div class="p-2 bd-highlight">
                <label>Sort by</label>
            </div>
            <div class="p-2 bd-highlight">
                <form>
                    <select name="orderby" class="orderby">
                        <option selected="selected">New Jobs</option>
                        <option value="menu_order">Menu Order</option>
                        <option value="title-asc">Name: Ascending</option>
                        <option value="title-desc">Name: Descending</option>
                    </select>
                </form>
            </div>
            <div class="p-2 bd-highlight">
                <form>
                    <select name="TopJobs" class="topjobs-select">
                        <option selected="selected">Show 10</option>
                        <option value="20">Show 20</option>
                        <option value="-1">Show All</option>
                    </select>
                </form>
            </div>
        </div>



        <div class="d-flex  mb-3" id="zoom" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-tv' style='font-size:75px; color:blueviolet;'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">Networking Engineer</a></h4>
                <p>GUXOFT</p>
                <p><i class='fas fa-map-marker-alt'></i> Ukraine</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-success">Full Time</button><br><br>
                <small>4 Months Ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3"style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-file-code' style='font-size:75px;color:greenyellow; padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">Front End Developer</a></h4>
                <p>Norson</p>
                <p><i class='fas fa-map-marker-alt'></i> Athens, Greece</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-danger">Temporary</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-flask' style='font-size:75px;color:red; padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">Senior UX Designer</a></h4>
                <p>NetSuite</p>
                <p><i class='fas fa-map-marker-alt'></i> Uruguay</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-danger">Temporary</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-folder-open' style='font-size:75px;color:mediumorchid; padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">JEB Product Sales Specialist, Russia & CIS</a></h4>
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
                <h4><a href="JobDescription.html">Production/Assembly Worker</a></h4>
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
                <h4><a href="JobDescription.html">Compliance Associate - London</a></h4>
                <p>AMP Capital</p>
                <p><i class='fas fa-map-marker-alt'></i> London, UK</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-primary">Part Time</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-broadcast-tower' style='font-size:75px;color:rgb(255, 0, 170); padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">USA - CO, Colorado Springs - Donor Relations Manager</a></h4>
                <p>Habitat For Humanity International</p>
                <p><i class='fas fa-map-marker-alt'></i> Colorado Springs, CO, USA</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-success">Full Time</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-paper-plane' style='font-size:75px;color:salmon; padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">Sales General Manager</a></h4>
                <p>Local Telecom Services</p>
                <p><i class='fas fa-map-marker-alt'></i> Jeddah, Saudi Arabia</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-primary">Internship</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-paperclip' style='font-size:75px;color:navy; padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">Hardware Verification & Validation Engineer</a></h4>
                <p>Fhilips</p>
                <p><i class='fas fa-map-marker-alt'></i> Bothell, WA, USA</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-primary">Part Time</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <div class="d-flex  mb-3" style="border-bottom: 1px solid; border-top: 1px solid;">
            <div class="p-2"><br>
                <i class='fas fa-flask' style='font-size:75px;color:cornflowerblue; padding-left: 30px'></i>
            </div>
            <div class="p-2">
                <h4><a href="JobDescription.html">Technical Support Specialist</a></h4>
                <p>Man Power Group</p>
                <p><i class='fas fa-map-marker-alt'></i> Croatia</p>
            </div>
            <div class="ml-auto p-2"><br>
                <button type="button" class="btn btn-outline-primary">Freelance</button><br><br>
                <small>4 months ago</small>
            </div>
        </div>

        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>
</div>



        <!-- End Page Container -->
