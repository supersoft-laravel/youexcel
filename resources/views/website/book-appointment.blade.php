<head>
    <style>
        .header_area{
            display: none;
        }
        .footer-area{
            display: none;
        }
        .top-padding-register1{
            margin-top: 0px!important;
        }
    </style>
</head>
@extends('website.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <!-- <div class="main_title" data-aos="fade-up">
                    <h2 class="mb-3">Founder and CEO</h2>
                </div> -->
            </div>
        </div>
        <div class="row top-padding-register1" style="padding-top: 30px;">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="card mb-5">

                    <div class="card-body">
                        <!--                        <div class="row">-->
                        <!--<div class="col-lg-3"></div>-->
                        <!--<div class="col-lg-6 text-center mb-4">-->
                        <!--    <img src="funnelimg/certificate.png" alt="" style="width: 100%; text-align: center;">-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="col-lg-12 text-center mb-4">
                            <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                            <div class="col-lg-12">
                                <div class="main_titl" data-aos="fade-up">
                                    <h1 class="mb-2 mt-4">Schedule Your Free Counseling Session</h1>
                                </div>
                            </div>
                        </div>
                        <!-- <h2 class="mb-5 text-center">Career Form</h2> -->
                        <form action="{{route('Free-demo')}}" method="POST">
                            @csrf
                            <div class="row p-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name<span style="color: red;">
                                                *</span></label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                        <label for="exampleInputPassword1">Email<span style="color: red;">
                                                *</span></label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                            required>
                                    </div>
                                </div>

                                    <div class="col-lg-12">
                                      <div class="form-group mt-3">
                                        <label for="exampleInputPassword1">Course Name<span style="color: red;">
                                                *</span></label>
                                        <input type="text" class="form-control" value="Financial Modeling and Analysis" id="course" name="course" placeholder="Financial Modeling and Analysis"
                                            required readonly>
                                    </div>
                                    <!-- <div class="form-group"> -->
                                        <!-- <label for="exampleFormControlSelect1">Course Name<span
                                                style="color: red;">
                                                *</span></label></label>
                                        <select class="selectpicker" name="course" id="course" >
                                            <option value="">Select Course</option>
                                            <option value="Financial Modeling and Analysis">Financial Modeling and
                                                Analysis</option>
                                            <option value="Dashboard Reporting">Dashboard Reporting</option>
                                            <option value="Advanced MS Excel">Advanced MS Excel</option>
                                            <option value="Data Analytics with Tableau">Data Analytics with Tableau
                                            </option>
                                            <option value="Computerized Accounting">Computerized Accounting</option>
                                            <option value="Financial Accounting">Financial Accounting</option>
                                        </select> -->
                                    <!-- </div> -->
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="exampleInputPassword1">Select Date<span style="color: red;">
                                                *</span></label>
                                        <input type="date" class="form-control" id="date" name="date"
                                            placeholder="Select Date" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="exampleInputPassword1">Select Time<span style="color: red;">
                                                *</span></label>
                                        <input type="time" class="form-control" id="time" name="time"
                                            placeholder="Select Date" required>
                                    </div>
                                </div>


                                <!-- <div class="row pl-4"> -->
                                <div class="col-lg-12 text-center mt-4">
                                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    @endsection