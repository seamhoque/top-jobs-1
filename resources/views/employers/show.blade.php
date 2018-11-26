@extends('layouts.master')

@section('title','Show Employer Information')

@push('styles')
    <style>
        body{
            font-family: Quicksand;
        }
        nav{
            color: aliceblue;
        }
        #backheader {
            height: 377.4px;
            width: 100%;
            background-image: url( {{asset('images/employers/home-bg.jpg')}} );

        }
        #ul_li{
            border-bottom: 1px solid grey;
        }
        #lastdiv {
            max-height: 0px;
            margin-top: -50px;
            margin-bottom: -70px;
        }
    </style>
@endpush

@section('content')

    <header>
        <div class="jumbotron text-center" id="backheader"  >
            <h2 class="display-4 " style="margin-top: 150px; color: aliceblue ;" >Companies</h2><br>
            <h5 style="margin-top: -30px; color: aliceblue;"><a href="#" style=" color: aliceblue">home</a> -Company</h5>
        </div>
    </header>


    <section>
        <div class="container" style="border-bottom: 1px solid grey">
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-sm|md|lg|xl-2">
                    <img src="images.jpg" height="100px" width="100px" style="margin-top: 40px;">
                </div>
                <div class="col-sm|md|lg|xl-8">
                    <div style="width: 600px; margin-left: 40px; margin-top: 15px;">
                        <h3>Torna international college</h3>
                        <a  name="" href="#" role="button" style="font-size:13px; border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">Dhaka,Bangladesh</a><br>
                        <a name="" href="#" role="button" style="font-size:13px;border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">http://www.micibiza.com</a>
                        <a name="" href="#" role="button" style="font-size:13px;border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">+880 1950082890</a>
                        <a name="" href="#" role="button" style="font-size:13px;border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">chakrichai@gmail.com</a>
                        <p style="border: 1px solid blue;width: 120px; font-size: 13px; text-align:center; margin-top: 15px; height:30px ;" class="rounded text-primary">0 open repository</p>
                    </div>
                </div>
                <div class="col-sm|md|lg|xl-2" style="margin-left: 200px;">
                    <a name="" id="" class="btn rounded" style="border: 1px solid blueviolet ;margin-right: 10px;" href="#" role="button"><img src="search_icon.jpg" width="20px" height="20px"></a>
                    <a name="" id="" class="btn rounded" style="border: 1px solid blueviolet ;margin-right: 10px;" href="#" role="button"><img src="search_icon.jpg" width="20px" height="20px"></a>
                    <a name="" id="" class="btn rounded" style="border: 1px solid blueviolet ;margin-right: 10px;" href="#" role="button"><img src="search_icon.jpg" width="20px" height="20px"></a>
                    <br>
                    <a name="" id="" class="btn btn-danger rounded" style=" width: 170px; margin-top: 20px;" href="#" role="button"><img src="search_icon.jpg" width="30px" height="30px"> See On Map</a>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="panel panel-default" style="margin-top: 30px; margin-bottom: 30px; width: 60%; position: relative; align-content: start;">
                <div class="panel-heading">
                    <h3 class="panel-title">About Business Network</h3>
                </div>
                <div class="panel-body">
                    aaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaaaaa.
                    aaaaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaaaaaa.
                </div>
            </div>

            <div class="panel panel-default" style="margin-top: 30px; margin-bottom: 30px; width: 40%; align-content: end;">
                <div class="panel-heading">
                    <h3 class="panel-title">Company Information</h3>
                </div>
                <div class="panel-body rounded " style="border: 1px solid blueviolet ;">
                    Panel body
                </div>
            </div>
        </div>
    </section>

@endsection