
@extends('website.app')

@section('content')
<section class="section-demofeature">
    <div class="container top-padding-register">
        <div class="row">
            <!-- <div class="col-lg-12 ">
                <div class="text-center mb-5">
                    <h1 class="font-register-h1">YouExcel Training Course Registration Form</h1>
                </div>
            </div> -->
            <div class="col-lg-1"></div>
            <div class="col-lg-10 main-banner-padding">
                <div class="card mb-5">

                    <div class="card-body">
                        <div class="col-lg-12 text-center mb-4">
                            <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                        </div>
                        <h2 class="mb-5 text-center">Financial Modeling and Analysis</h2>
                        <label for="">Email <span style="color: red;">*</span></label>
                        <form action="{{url('Registration-Form1')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp" placeholder="Enter email"
                                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                <h5>Please choose Programme: <span style="color: red;">*</span></h5>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="form-group mt-3">
                                        <label for="exampleInputPassword1">Course Name<span style="color: red;">
                                                *</span></label>
                                        <input type="text" class="form-control" value="Financial Modeling and Analysis" id="cfma" name="cfma" placeholder="Financial Modeling and Analysis"
                                            required readonly>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <br>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Father's Name <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            placeholder="Father Name" required>
                                    </div>
                                </div>

                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date & Time <span
                                                style="color: red;">*</span></label>
                                        <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                            placeholder="Date & Time" required>
                                    </div>
                                </div> -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Complete Address <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Complete Address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">City <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Employer Name <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="empname" name="empname"
                                            placeholder="Employer Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Designation <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="designation " name="designation"
                                            placeholder="Designation" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Cell / WhatsApp Number<span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="phone" name="cellnumber" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date of Birth (MM-DD-YYYY) <span
                                                style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="date " name="date"
                                            placeholder="Date Of Birth" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">CNIC/National ID No: <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="cnic" name="cnic"
                                            placeholder="CNIC/National ID No:" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Qualification <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="qualification"
                                            name="qualification" placeholder="Qualification" required>
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Image</label>
                                        <input type="file" class="form-control" id="file1" name="file1"
                                            placeholder="">
                                    </div>
                                </div>

                            <div class="row pl-4" style="display: inline-flex;">
                                <h2 class="">Declaration</h2>
                                <div class="col-lg-12 pl-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label" for="customCheck1"><span
                                                style="display: none;">.</span></label>
                                    </div>
                                </div>
                                <p style="margin-top: -6px;">
                                    &nbsp;&nbsp;&nbsp;I confirm that the information given on this form is
                                    complete and accurate and
                                    nothing has been omitted. I accept that if I don’t fully comply with the requirement
                                    of the institute it can reject my application at any stage. I understand that all
                                    the dues I have paid are non-refundable, and that I shall abide by the rule and
                                    regulation of YouExcel. I, hereby, give my consent to the <a href="Privacy-Policy"
                                        style="color: blue;">privacy policy </a>of
                                    YouExcel.
                                </p>           
                            </div>
                            
                            <div class="col-lg-4">
                            <button type="submit" id="submit1" class="btn btn-lmslogin1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
