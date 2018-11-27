@extends('layouts.master')
@section('title', 'Post A Job')

<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css"/>

@push('scripts-plugin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
@endpush

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".editor").editor({
                uiLibrary: 'bootstrap4'
            });

            $(".editor1").editor({
                uiLibrary: 'bootstrap4'
            });
        });
    </script>
@endpush

@section('content')
    <!-Header-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="font-weight-bold" align="center">Post For a Job</h1>
        </div>
    </div>

    <!-Info Bar-->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <label>Already Have an Account?</label>
                <li class="list-group-item list-group-item-info"><p align="center">If you don't have an account you can create one below by entering your email address/username. Your account details will be confirmed via email</p>
                    <button type="button" class="btn btn-primary" align="center">Log in</button>
                </li>
            </div>
        </div>
    </div>
    <br><br>

    <!-Whole Body-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" class="form-control" id="jobTitle">
                    </div>

                    <div class="row">

                        <div class="col">
                            <label>Location</label>
                            <input type="email" class="form-control" id="location">
                        </div>

                        <div class="col">
                            <label>Job Type</label>
                            <select class="form-control" id="jobType" name="jobtype">
                                <option>Freelance</option>
                                <option>Full Time</option>
                                <option>Internship</option>
                                <option>Part time</option>
                                <option>Temporary</option>
                            </select>
                        </div>

                        <div class="col">
                            <label>Job Type</label>
                            <select class="form-control" id="jobCategory" name="jobcategory">
                                <option>Construction</option>
                                <option>Cordinator</option>
                                <option>Employer</option>
                                <option>Financial Career</option>
                                <option>Information Technology</option>      \
                                <option>Marketing</option>
                                <option>Quality Check</option>
                                <option>Real Estate</option>
                                <option>Sales</option>
                                <option>Supporting</option>
                                <option>Teaching</option>
                            </select>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="salary">Job Salary</label>
                            <input type="text" class="form-control" id="salary" placeholder="i.e. 10000-15000">
                        </div>
                        <div class="col">
                            <label>Job Career Level</label>
                            <select class="form-control" id="jobCarrer" name="jobCarrer">
                                <option>Asistant Manager</option>
                                <option>Department Head</option>
                                <option>Executive</option>
                                <option>Intermediate</option>
                                <option>Junior</option>
                                <option>Lead</option>
                                <option>Manager</option>
                                <option>Senior</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Job Experience</label>
                            <select class="form-control" id="experience" name="experience">
                                <option>0-2 Years</option>
                                <option>2-3 Years</option>
                                <option>3-5 Years</option>
                                <option>5-7 Years</option>
                                <option>8-9 Years</option>      \
                                <option>9-10 Years</option>
                                <option>Not Required</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Job Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Both</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Job Industry</label>
                            <select class="form-control" id="jobIndustry" name="JobIndustry">
                                <option>Agriculture</option>
                                <option>Arts</option>
                                <option>Construction</option>
                                <option>Education</option>
                                <option>Electricity</option>
                                <option>Financial</option>
                                <option>Health Care</option>
                                <option>Information Technology</option>
                                <option>Manufacturing</option>
                                <option>Mining</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Job Qualification</label>
                            <select class="form-control" id="qualification" name="qualification">
                                <option>Associate Degree</option>
                                <option>Bachelor Degree</option>
                                <option>Certificate</option>
                                <option>Doctorate Degree</option>
                                <option>Master Degree</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <label>Description</label>
                    <textarea class="editor" placeholder="Enter Description" style="background-color: white"></textarea>
                    <br>
                    <label>Application URL or Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Email/URL</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Email or URL" aria-label="url" aria-describedby="basic-addon1">
                    </div>
                    <br><br>

                    <h4><strong>Company Details</strong></h4>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="email" class="form-control" id="ComName" placeholder="Enter Company Name">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Website</label>
                            <input type="email" class="form-control" id="web" placeholder="http://">
                        </div>
                        <div class="col">
                            <label>Tagline</label>
                            <input type="email" class="form-control" id="tagline" placeholder="Briefly describe your company">
                        </div>
                        <div class="col">
                            <label>Twitter Username</label>
                            <input type="email" class="form-control" id="twuser" placeholder="@yourcompany">
                        </div>
                    </div>
                    <br>
                    <label for="logo">Logo</label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logo">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>

                    <label>Description</label>
                    <div class="input-group">
                        <textarea class="form-control editor1" aria-label="With textarea" placeholder="Enter Description"></textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Team Size</label>
                            <select class="form-control" id="teamsize" name="teamsize">
                                <option>-</option>
                                <option>1-50</option>
                                <option>100-200</option>
                                <option>200-300</option>
                                <option>300-500</option>
                                <option>500+</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Category</label>
                            <select class="form-control" id="category" name="category">
                                <option>Construction</option>
                                <option>Customer Electronics</option>
                                <option>Employer</option>
                                <option>Financial Career</option>
                                <option>Marketing</option>
                                <option>Sales</option>
                                <option>Software</option>
                                <option>Supporting</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Location</label>
                            <input type="email" class="form-control" id="comLocation" placeholder="i.e. Dhaka">
                        </div>
                        <div class="col">
                            <label>Email</label>
                            <input type="email" class="form-control" id="Com_mail" placeholder="Enter Company Email">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Phone</label>
                            <input type="email" class="form-control" id="comPhone" placeholder="Phone Number">
                        </div>
                        <div class="col">
                            <label>Facebook</label>
                            <input type="email" class="form-control" id="facebookURL" placeholder="Facebook Page URL">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>Google+</label>
                            <input type="email" class="form-control" id="gPlusURL" placeholder="Google+ URL">
                        </div>
                        <div class="col">
                            <label>LinkedIn</label>
                            <input type="email" class="form-control" id="linkedInURL" placeholder="LinkedIn URL">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Since</label>
                        <input type="text" class="form-control" id="Since" placeholder="Established Year/Date">
                    </div>

                    <div class="form-group">
                        <label>Video</label>
                        <input type="text" class="form-control" id="video" placeholder="URL of a video about your company">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col align-self-center">
                            <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <br><br>
@stop

