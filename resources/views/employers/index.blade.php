@extends('layouts.master')

@section('title', 'Employers')

@push('styles')
    <style>
        #backheader {
              height: 377.4px;
              width: 100%;
              background-image: url( {{asset('images/employers/home-bg.jpg')}} );

          }
          #ul_li{
              border-bottom: 1px solid grey;
          }
    </style>
@endpush

@section('content')
    <!-- Header -->
    <div class="jumbotron text-center" id="backheader"  >
        <h2 class="display-4 " style="margin-top: 150px; color: aliceblue ;" >Companies</h2><br>
        <h5 style="margin-top: -30px; color: aliceblue;"><a href="#" style=" color: aliceblue">home</a> -Company</h5>
    </div>
    
    <!-- Body -->
    <div class="container">
              <div class="row">
                  <div class="col-sm|md|lg|xl-4" >

                      <div class="container">
                          <div style="border: 1px solid grey" class="rounded">
                              <div class="container">
                                  <input type="text" placeholder="Company Title or Keyword" style="border-style: none; margin: 8px;width: 250px;">
                                  <a name="" href="#" role="button" style="border-style: none;"><img src="{{ asset('images/employers/search_icon.jpg')  }}" width="30px" height="30px"></a>
                              </div>
                          </div>
                      </div>

                      <div class="container" style="margin-top: 30px;">
                          <div style="border: 1px solid grey" class="rounded">
                              <div class="container">
                                  <input type="text" placeholder="All Location" style="border-style: none; margin: 8px;width: 250px;">
                                  <a name="" href="#" role="button" style="border-style: none;"><img src="{{ asset('images.employers.search-icon.jpg')  }}" width="30px" height="30px"></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm|md|lg|xl-8" style="border-left: 1px solid #606f7b ;">
                      <ul style="list-style-type: none;" >
                          <li id="ul_li">
                              <div class="container row">
                                  <div class="col-md-4 ">
                                      <img src="images.jpg" height="80px" width="80px" style="margin-top: 20px;">
                                  </div>
                                  <div class="col-md-8 ">
                                      <div style="width: 600px; margin-left: -80px; margin-top: 15px;">
                                          <h3>Torna international college</h3>
                                          <p style="color:#2779bd; margin-left: 450px; margin-top: -35px">0 open repository</p>
                                          <h6 style="color: red; margin-top: -10px;">Teaching</h6>
                                          <a name="" href="#" role="button" style="border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">Dhaka,Bangladesh</a><br>
                                          <p>Morna International College is located in the middle of the island of Ibiza, a few minutes from the beautiful village of Santa Gertrudis. The...</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li id="ul_li">
                              <div class="container row">
                                  <div class="col-md-4 ">
                                      <img src="images.jpg" height="80px" width="80px" style="margin-top: 20px;">
                                  </div >
                                  <div class="col-md-8 ">
                                      <div style="width: 600px;margin-left: -80px; margin-top: 15px;">
                                          <h3>Torna international college</h3>
                                          <p style="color:#2779bd; margin-left: 450px; margin-top: -35px">0 open repository</p>
                                          <h6 style="color: red; margin-top: -10px;">Teaching</h6>
                                          <a name="" href="#" role="button" style="border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">Dhaka,Bangladesh</a><br>
                                          <p>Morna International College is located in the middle of the island of Ibiza, a few minutes from the beautiful village of Santa Gertrudis. The...</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li id="ul_li">
                              <div class="container row">
                                  <div class="col-md-4 ">
                                      <img src="images.jpg" height="80px" width="80px" style="margin-top: 20px;">
                                  </div >
                                  <div class="col-md-8 ">
                                      <div style="width: 600px;margin-left: -80px; margin-top: 15px;">
                                          <h3>Torna international college</h3>
                                          <p style="color:#2779bd; margin-left: 450px; margin-top: -35px">0 open repository</p>
                                          <h6 style="color: red; margin-top: -10px;">Teaching</h6>
                                          <a name="" href="#" role="button" style="border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">Dhaka,Bangladesh</a><br>
                                          <p>Morna International College is located in the middle of the island of Ibiza, a few minutes from the beautiful village of Santa Gertrudis. The...</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li id="ul_li">
                              <div class="container row">
                                  <div class="col-md-4 ">
                                      <img src="images.jpg" height="80px" width="80px" style="margin-top: 20px;">
                                  </div >
                                  <div class="col-md-8 ">
                                      <div style="width: 600px;margin-left: -80px; margin-top: 15px;">
                                          <h3>Torna international college</h3>
                                          <p style="color:#2779bd; margin-left: 450px; margin-top: -35px">0 open repository</p>
                                          <h6 style="color: red; margin-top: -10px;">Teaching</h6>
                                          <a name="" href="#" role="button" style="border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">Dhaka,Bangladesh</a><br>
                                          <p>Morna International College is located in the middle of the island of Ibiza, a few minutes from the beautiful village of Santa Gertrudis. The...</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li id="ul_li">
                              <div class="container row">
                                  <div class="col-md-4 ">
                                      <img src="images.jpg" height="80px" width="80px" style="margin-top: 20px;">
                                  </div >
                                  <div class="col-md-8 ">
                                      <div style="width: 600px;margin-left: -80px; margin-top: 15px;">
                                          <h3>Torna international college</h3>
                                          <p style="color:#2779bd; margin-left: 450px; margin-top: -35px">0 open repository</p>
                                          <h6 style="color: red; margin-top: -10px;">Teaching</h6>
                                          <a name="" href="#" role="button" style="border-style: none;"><img src="search_icon.jpg" width="30px" height="30px">Dhaka,Bangladesh</a><br>
                                          <p>Morna International College is located in the middle of the island of Ibiza, a few minutes from the beautiful village of Santa Gertrudis. The...</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                      <center style="margin-left: 300px; margin-top: 30px; margin-bottom: 30px;">
                          <nav aria-label="Page navigation example">
                              <ul class="pagination">
                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                          </nav>
                      </center>
                  </div>
              </div>
          </div>

@stop