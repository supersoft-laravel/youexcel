<head>
    <style>
    .form-control {
        display: block !important;
    }
    </style>
</head>
@extends('website.app')

@section('content')
<section class="section-demofeature">
    <div class="container top-padding-register">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 main-banner-padding">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="col-lg-12 text-center mb-4">
                            <img src="img/Yourexcel-img/excel-logo-new.png" alt="" style="width: 170px;">
                        </div>
                        <h2 class="mb-5 text-center">NAVTTC-Skills for All-Registration form</h2>
                        <form action="{{url('Kamyab-jawan-Form')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row p-3">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name" maxlength="70" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Gender <span
                                                style="color: red;">*</span></label>
                                        <select class="form-control" id="gender" name="gender"
                                            style="display: block!important;" required="">
                                            <option value="" readonly>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">CNIC <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" onchange="checkNumber();" data-inputmask="'mask': '99999-9999999-9'" placeholder="xxxxx-xxxxxxx-x" id="cnic" name="cnic"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Father's Name <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            placeholder="Father's Name"  maxlength="70" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Father Monthly Income <span
                                                style="color: red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="70" id="fmonthlyincome"
                                            name="fmonthlyincome" placeholder="Father Monthly Income" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Father Occupation <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="70" id="foccupation" name="foccupation"
                                            placeholder="Father Occupation" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone No <span
                                                style="color: red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="70" id="mobileno" name="mobileno"
                                            placeholder="Mobile No" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Domicile <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="70" id="domicile " name="domicile"
                                            placeholder="Domicile" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date of Birth <span
                                                style="color: red;">*</span></label>
                                        <input type="date" class="form-control" id="dateofbirth" name="dateofbirth"
                                            required="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Religion <span
                                                style="color: red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="70" id="religion " name="religion"
                                            placeholder="Religion" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">District <span style="color: red;">*
                                            </span></label>
                                        <input type="text" class="form-control" maxlength="70" id="district " name="district"
                                            placeholder="District" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">E-mail <span style="color: red;">*
                                            </span></label>
                                        <input type="email" class="form-control" maxlength="70" id="email" name="email"
                                            placeholder="E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Present Address <span
                                                style="color: red;">*</span></label>
                                        <textarea class="form-control" id="presentaddress" name="presentaddress"
                                            rows="1" placeholder="Present Address" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <h3>Educational Background</h3>
                                    <table class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Certificate / Degree</th>
                                                <th>Year</th>
                                                <th>Grade / Division</th>
                                                <th>School / Board / University</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Primary / Middle / Matric</th>
                                                <td><input type="number" class="form-control" maxlength="70" id="primarymiddlematricyear1"
                                                        name="primarymiddlematricyear1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="primarymiddlematricgrade1"
                                                        name="primarymiddlematricgrade1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="primarymiddlematricschool1"
                                                        name="primarymiddlematricschool1"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Intermediate / Diploma </th>
                                                <td><input type="number" class="form-control" maxlength="70" id="intermediatediplomayear1"
                                                        name="intermediatediplomayear1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="intermediatediplomagrade1"
                                                        name="intermediatediplomagrade1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="intermediatediplomaschool1"
                                                        name="intermediatediplomaschool1"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">BA / BSC</th>
                                                <td><input type="number" class="form-control" maxlength="70" id="babscyear1" name="babscyear1">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="babscgrade1" name="babscgrade1">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="babscschool1" name="babscschool1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Other</th>
                                                <td><input type="number" class="form-control" maxlength="70" id="otheryear1" name="otheryear1">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="othergrade1" name="othergrade1">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="otherschool1" name="otherschool1">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <h3>Experience</h3>
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Rank</th>
                                                <th scope="col">Name of Institution</th>
                                                <th scope="col">Duration i-e (10-10-2010 to 01-01-2011)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" maxlength="70" id="rank1" name="rank1">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="nameintitution1"
                                                        name="nameintitution1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="duration1"
                                                        name="duration1"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" maxlength="70" id="rank2" name="rank2">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="nameintitution2"
                                                        name="nameintitution2"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="duration2"
                                                        name="duration2"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" maxlength="70" id="rank3" name="rank3">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="nameintitution3"
                                                        name="nameintitution3"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="duration3"
                                                        name="duration3"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <h3>Course Information / Admission</h3>
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preferences</th>
                                                <th scope="col">Name of Institution</th>
                                                <th scope="col">Trade Name</th>
                                                <th scope="col">District</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" maxlength="70" id="prefernce1" name="prefernce1">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="coursenameintitution1"
                                                        name="coursenameintitution1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="tradename1"
                                                        name="tradename1"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="coursedistrict1"
                                                        name="coursedistrict1"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" maxlength="70" id="prefernce2" name="prefernce2">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="coursenameintitution2"
                                                        name="coursenameintitution2"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="tradename2"
                                                        name="tradename2"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="coursedistrict2"
                                                        name="coursedistrict2"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" class="form-control" maxlength="70" id="prefernce3" name="prefernce3">
                                                </td>
                                                <td><input type="text" class="form-control" maxlength="70" id="coursenameintitution3"
                                                        name="coursenameintitution3"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="tradename3"
                                                        name="tradename3"></td>
                                                <td><input type="text" class="form-control" maxlength="70" id="coursedistrict3"
                                                        name="coursedistrict3"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-lg-3">
                                    <label for="">Sports Person:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sportsperson"
                                            id="exampleRadios1" value="Yes" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sportsperson"
                                            id="exampleRadios1" value="No" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            No
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <label for="">Hafiz Quran:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hafizquran"
                                            id="exampleRadios1" value="Yes" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hafizquran"
                                            id="exampleRadios1" value="No" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            No
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <label for="">Any physical disability:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="physicaldisale"
                                            id="exampleRadios1" value="Yes" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="physicaldisale"
                                            id="exampleRadios1" value="No" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            No
                                        </label>
                                    </div>

                                </div>

                                <div class="col-lg-3">
                                    <label for="">Other Data:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="otherdata"
                                            id="exampleRadios1" value="Widow" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Widow
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="otherdata"
                                            id="exampleRadios1" value="Orphan" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                        Orphan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="otherdata"
                                            id="exampleRadios1" value="None" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                        None
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mt-4">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Your Photo <span style="color: red;">*
                                            </span></label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            placeholder="Image" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 text-center">
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
