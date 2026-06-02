@extends('website.app')

@section('content')
    <style>

        #booking {
            font-family: 'Rubik', sans-serif;

        }

        .booking-form {
            background: #fff;
            padding: 40px;
            border-radius: 6px;
            margin-top: 185px;
            margin-bottom: 50px;
        }

        .booking-form .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .booking-form .form-control {
            background-color: #fff;
            height: 50px;
            color: #191a1e;
            border: 1px solid #ccc;
            font-size: 16px;
            font-weight: 400;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0px;

            padding: 0px 25px;
        }

        .booking-form .form-control::-webkit-input-placeholder {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form .form-control:-ms-input-placeholder {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form .form-control::placeholder {
            color: rgba(82, 82, 84, 0.4);
        }

        .booking-form input[type="date"].form-control:invalid {
            color: rgba(82, 82, 84, 0.4);
        }

        /*.booking-form select.form-control {*/
        /*    -webkit-appearance: none;*/
        /*    -moz-appearance: none;*/
        /*    appearance: none;*/
        /*}*/

        /*.booking-form select.form-control + .select-arrow {*/
        /*    position: absolute;*/
        /*    right: 10px;*/
        /*    bottom: 6px;*/
        /*    width: 32px;*/
        /*    line-height: 32px;*/
        /*    height: 32px;*/
        /*    text-align: center;*/
        /*    pointer-events: none;*/
        /*    color: rgba(0, 0, 0, 0.3);*/
        /*    font-size: 14px;*/
        /*}*/

        /*.booking-form select.form-control + .select-arrow:after {*/
        /*    content: '\279C';*/
        /*    display: block;*/
        /*    -webkit-transform: rotate(90deg);*/
        /*    transform: rotate(90deg);*/
        /*}*/

        /*.booking-form .form-label {*/
        /*    display: block;*/
        /*    margin-left: 0px;*/
        /*    margin-bottom: 5px;*/
        /*    font-weight: 400;*/
        /*    text-transform: uppercase;*/
        /*    line-height: 24px;*/
        /*    height: 24px;*/
        /*    font-size: 12px;*/
        /*    color: #000;*/
        /*}*/

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .booking-form .form-checkbox input {
            position: absolute !important;
            margin-left: -9999px !important;
            visibility: hidden !important;
        }

        .booking-form .form-checkbox label {
            position: relative;
            padding-top: 4px;
            padding-left: 30px;
            font-weight: 400;
            color: #000;
        }

        .booking-form .form-checkbox label + label {
            margin-left: 8px;
        }

        .booking-form .form-checkbox input + span {
            position: absolute;
            left: 2px;
            top: 4px;
            width: 20px;
            height: 20px;
            background: #fff;
            border-radius: 50%;
            border: 1px #ccc solid;
        }

        .booking-form .form-checkbox input + span:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0px;
            height: 0px;
            border-radius: 50%;
            background-color: #000;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .booking-form .form-checkbox input:not(:checked) + span:after {
            opacity: 0;
        }

        .booking-form .form-checkbox input:checked + span:after {
            opacity: 1;
            width: 10px;
            height: 10px;
        }

        .logo img {
            margin: 0 auto;
            text-align: center;
            display: block;
            margin-bottom: 43px;
        }


        .booking-form .form-btn {
            margin-top: 5px;
        }

        .booking-form .submit-btn {
            color: #fff;
            background-color: #73ae42;
            font-weight: 400;
            height: 33px;
            font-size: 14px;
            border: none;
            width: 65%;
            border-radius: none;
            text-transform: uppercase;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .booking-form .submit-btn:hover,
        .booking-form .submit-btn:focus {
            opacity: 0.9;
        }


        @media screen and (max-width: 620px) {

            .logo img {
                margin: 0 auto;
                text-align: center;
                display: block;
                margin-bottom: 43px;
                width: 50% !important;
            }


        }


    </style>
    <section class="section-demofeature">
        <div class="container top-padding-register">
            <div id="booking" class="section">
                <div class="section-center">
                    <div class="container">

                        <div class="row">
                            <div class="booking-form">


                                <form method="post" enctype="multipart/form-data"
                                      action="{{url("/submit-free-training")}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!--<img src="img/22.png" class="center"/>-->

                                        </div>

                                        <div class="col-md-6">
                                            <div class="logo">
                                                {{--                       <h1 style="text-align: center; font-size: 20px;"><strong>Benazir Bhutto Shaheed Human Resource</strong></h1>--}}
                                                {{--					   <h2 style="text-align: center; font-size: 18px; margin-top: -5px;"><strong>Research and Development Board</strong></h2>--}}
                                                <h2 style="text-align: center; font-size: 22px; margin-top: -5px;">
                                                    <strong>Application Form for 100% Free of Cost </strong></h2><br/>
                                                <h2 style="text-align: center; font-size: 22px; margin-top: -5px;">
                                                    <strong>Training with Job Facilitation </strong></h2>
                                                <h2 style="text-align: center; font-size: 22px; margin-top: -5px;">
                                                    <strong>(Year 2023)</strong></h2>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <!--	<img src="img/33.png" class="center" />-->
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="row"
                                             style="background-color: #73ae42; padding: 20px; margin-bottom: 25px;">
                                            <h2 style="margin-top: auto; margin-bottom: auto; font-size: 15px; color: #fff;">
                                                CANDIDATE INFORMATION</h2>
                                        </div>
                                        <div class="row">


                                            <div class="col-md-12 text-center">
                                                <h4 style="color:red">Important Note: Kindly Fill this form
                                                    carefully.</h4><br/>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Course Name: <span
                                                            style="color: red;">*</span></label>
{{--                                                    <input type="hidden" value="{{$course}}" name="course_first">--}}
{{--                                                    <input class="form-control" disabled value="{{$course}}">--}}
                                                    <select required class="selectpicker" name="course_first"
                                                            id="yourcourse"
                                                            aria-label="Default select example"
                                                            data-live-search="true"
                                                            placeholder="Choose from dropdown list">
                                                        <option value="Computerized Accounting">Computerized
                                                            Accounting
                                                        </option>
                                                        <option value="Digital Marketing">Digital Marketing</option>
                                                        <option value="Certificate in Office Management">Certificate in
                                                            Office Management
                                                        </option>
                                                        <option value="Customer Services">Customer Services</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Select course(Second
                                                        preference): <span style="color: red;">*</span></label>
                                                    <select required class="selectpicker" name="course_second"
                                                            id="yourcourse"
                                                            aria-label="Default select example"
                                                            data-live-search="true"
                                                            placeholder="Choose from dropdown list">
                                                        <option value="Computerized Accounting">Computerized
                                                            Accounting
                                                        </option>
                                                        <option value="Digital Marketing">Digital Marketing</option>
                                                        <option value="Certificate in Office Management">Certificate in
                                                            Office Management
                                                        </option>
                                                        <option value="Customer Services">Customer Services</option>
                                                        <option value="NA">NA</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-6">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="exampleFormControlSelect1">Select course(Third preference): <span style="color: red;">*</span></label>-->
                                        <!--        <select class="selectpicker" name="course_third" id="yourcourse"-->
                                        <!--                aria-label="Default select example"-->
                                        <!--                data-live-search="true" placeholder="Choose from dropdown list">-->
                                        <!--            <option value="Computerized Accounting">Computerized Accounting</option>-->
                                        <!--            <option value="Digital Marketing">Digital Marketing</option>-->
                                        <!--            <option value="Certificate in Office Management">Certificate in Office Management</option>-->
                                        <!--            <option value="Customer Services">Customer Services</option>-->
                                        <!--        </select>-->

                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="col-md-6">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="exampleFormControlSelect1">Select course(Fourth preference): <span style="color: red;">*</span></label>-->
                                        <!--        <select class="selectpicker" name="course_fourth" id="yourcourse"-->
                                        <!--                aria-label="Default select example"-->
                                        <!--                data-live-search="true" placeholder="Choose from dropdown list">-->
                                        <!--            <option value="Computerized Accounting">Computerized Accounting</option>-->
                                        <!--            <option value="Digital Marketing">Digital Marketing</option>-->
                                        <!--            <option value="Certificate in Office Management">Certificate in Office Management</option>-->
                                        <!--            <option value="Customer Services">Customer Services</option>-->
                                        <!--        </select>-->

                                        <!--    </div>-->
                                        <!--</div>-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Name(Complete Name in Block Letters)<span
                                                            style="color: red;">*</span></span>
                                                    <input class="form-control" type="text" name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Applicant CNIC<span
                                                            style="color: red;">*</span></span>
                                                    <input

                                                        data-inputmask="'mask': '99999-9999999-9'"
                                                        placeholder="XXXXX-XXXXXXX-X"
                                                        required class="form-control" type="text" name="cnic">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Father Name<span
                                                            style="color: red;">*</span></span>
                                                    <input class="form-control" type="text" name="fathername" required>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">

                                                     <span class="form-label">Father CNIC<span
                                                             style="color: red;">*</span></span>
                                                    <input
                                                    <input
                                                        data-inputmask="'mask': '99999-9999999-9'"
                                                        placeholder="XXXXX-XXXXXXX-X"
                                                        class="form-control" type="text" name="fcnic" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Father Designation</span>
                                                    <input class="form-control" type="text" name="fdesignation">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Father monthly Income</span>
                                                    <input class="form-control" type="text" name="fmonthlyincome">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span class="form-label">Job Experience (If any one have)</span>
                                                    <input class="form-control" type="text" name="jobexperience">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Country<span
                                                            style="color: red;">*</span></span>
                                                    <select required class="selectpicker" name="country" id="country"
                                                            aria-label="Default select example"
                                                            data-live-search="true"
                                                            placeholder="Select Country">

                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Aland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="PW">Belau</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="XK">Kosovo</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao S.A.R., China</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="ST">São Tomé and Príncipe</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syria</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                        <option value="UM">United States (US) Minor Outlying Islands
                                                        </option>
                                                        <option value="VI">United States (US) Virgin Islands</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Present City<span
                                                            style="color: red;">*</span></span>
                                                    <input required class="form-control" type="text" name="city">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <span class="form-label">Gender<span
                                                                style="color: red;">*</span></span>
                                                        <label for="male">
                                                            <input value="male" type="radio" id="male" required
                                                                   name="gender">

                                                            <span></span>Male
                                                        </label>
                                                        <label for="female">
                                                            <input value="Female" type="radio" id="female"
                                                                   name="gender">
                                                            <span></span>Female
                                                        </label>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-checkbox">
                                                        <span class="form-label">Class Timing Preference</span>

                                                        <label for="Morning">
                                                            <input value="Morning: 9 AM to 1 PM" type="radio"
                                                                   id="Morning"
                                                                   name="class_timing">
                                                            <span></span>Morning: 9 AM to 1 PM
                                                        </label>

                                                        <label for="Afternoon">
                                                            <input value="Afternoon: 2:00 PM to 6 PM" type="radio"
                                                                   id="Afternoon"
                                                                   name="class_timing">
                                                            <span></span>Afternoon: 2:00 PM to 6 PM
                                                        </label>
                                                        <label for="Available">
                                                            <input value="Available on both times" type="radio"
                                                                   id="Available"
                                                                   name="class_timing">
                                                            <span></span>Available on both times
                                                        </label>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">


                                        </div>


                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Domocile<span style="color: red;">*</span></span>
                                                    <input class="form-control" type="text" name="domocile" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Email<span
                                                            style="color: red;">*</span></span>
                                                    <input id="email" class="form-control" type="email" name="email"
                                                           required>
                                                    <span class="email-error form-label"
                                                          style="color: red;display: none">Please use different email address. Email already registered<span
                                                            style="color: red;">*</span></span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Date of Birth<span
                                                            style="color: red;">*</span></span>
                                                    <input class="form-control" type="date" name="dob" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Age<span
                                                            style="color: red;">*</span></span>
                                                    {{--                                                    <span class="form-label" id="age_error"--}}
                                                    {{--                                                          style="display:none;color:red">Age must be between 18 & 35</span>--}}
                                                    <input class="form-control" type="number" name="age" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Mobile No<span style="color: red;">*</span></span>
                                                    <input class="form-control"
                                                           data-inputmask="'mask': '0399-9999999'"
                                                           placeholder="Mobile No(XXXX-XXXXXXX)"
                                                           type="text" name="mobileno" required>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <span class="form-label">Whatsapp No.</span>
                                                    <input class="form-control" type="number" name="whatsapp">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Phone No.</span>
                                                    <input class="form-control" type="number" name="phoneno">
                                                </div>
                                            </div> -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="form-label">Current Address<span
                                                            style="color: red;">*</span></span>
                                                    <input class="form-control" type="text" name="caddress" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <span class="form-label">Permanent Address<span style="color: red;">*</span></span>
                                                    <input class="form-control" type="text" name="paddress" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row"
                                             style="background-color: #73ae42;  padding: 20px; margin-bottom: 25px;">
                                            <h2 style="margin-top: auto; margin-bottom: auto; font-size: 15px; color: #fff;">
                                                EDUCATION DETAIL </h2>
                                        </div>


                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Education <span
                                                        style="color: red;">*</span></label>
                                                <select frquired class="selectpicker" name="education" id="education"
                                                        aria-label="Default select example"
                                                        data-live-search="true"
                                                        placeholder="Choose from dropdown list">
                                                    <option value="0">Please select option</option>
                                                    <option value="Masters/Equivalent">Masters/Equivalent</option>
                                                    <option value="Bachelors/Equivalent">Bachelors/Equivalent</option>
                                                    <option value="intermediate/Equivalent">intermediate/Equivalent
                                                    </option>

                                                </select>

                                            </div>
                                        </div>


                                        <div class="row"
                                             style="background-color: #73ae42;  padding: 20px; margin-bottom: 25px;">
                                            <h2 style="margin-top: auto; margin-bottom: auto; font-size: 15px; color: #fff;">
                                                UNDERTAKING </h2>
                                        </div>

                                        <div class="row">
                                            <div class="form-checkbox">

                                                <label for="solem">
                                                    <input value="male" type="checkbox" id="solem" required
                                                           name="gender">

                                                    <span></span>I solemnly state that the information given on this
                                                    form is true &
                                                    correct.
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-btn">
                                                <button type="submit" class="submit-btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        // $(function () {
        //     $("#age").keydown(function () {
        //         // Save old value.
        //         if (!$(this).val() || (parseInt($(this).val()) <= 18 && parseInt($(this).val()) >= 35)) {
        //
        //
        //             $("#age_error").css("display", "none");
        //             $(this).data($(this).val());
        //         } else
        //             $("#age_error").css("display", "block");
        //     });
        //     $("#age").keyup(function () {
        //         // alert("Age must be between 18 yo 35 years old");
        //         if (!$(this).val() || (parseInt($(this).val()) <= 18 && parseInt($(this).val()) >= 35)) {
        //             $("#age_error").css("display", "none");
        //
        //             $(this).data($(this).val());
        //         } else
        //             $("#age_error").css("display", "block");
        //
        //     });
        // });
    </script>
@endsection
