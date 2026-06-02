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
                                <img src="{{url("/img/Yourexcel-img/excel-logo-new.png")}}" alt=""
                                     style="width: 170px;">
                            </div>
                            <h2 class="mb-5 text-center">Online Payment Form</h2>
                            <h4>{{"'".$course_name."'"}} Registration fee is {{$actual_amount}}</h4>
                            {{--                            <h1>{{\Carbon\Carbon::now()->addDay(2)->format('YmdHis')}}</h1>--}}
                            <div class="jsformWrapper">
                                <form name="jsform" method="post"
                                      action="https://sandbox.jazzcash.com.pk/CustomerPortal/transactionmanagement/merchantform/">

                                    <div style="display: none">


                                        <!-- For Card Tokenization Version should be 2.0 -->
                                        <div class="formFielWrapper">
                                            <label class="active">pp_Version: </label>
                                            <input type="text" name="pp_Version" value="1.1">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="">pp_TxnType: </label>
                                            <input type="text" name="pp_TxnType" value="">
                                        </div>


                                        <div class="formFielWrapper">
                                            <label class="active">pp_MerchantID: </label>
                                            <input type="text" name="pp_MerchantID" value="MC51009">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_Language: </label>
                                            <input type="text" name="pp_Language" value="EN">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="">pp_SubMerchantID: </label>
                                            <input type="text" name="pp_SubMerchantID" value="">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_Password: </label>
                                            <input type="text" name="pp_Password" value="u1y2z08zs9">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_TxnRefNo: </label>
                                            <input type="text" name="pp_TxnRefNo" id="pp_TxnRefNo"
                                                   value="{{rand(12312,10932000)}}">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_Amount: </label>
                                            <input type="text" name="pp_Amount" value="{{$fee}}">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="">pp_DiscountedAmount: </label>
                                            <input type="text" name="pp_DiscountedAmount" value="">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="">pp_DiscountBank: </label>
                                            <input type="text" name="pp_DiscountBank" value="">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_TxnCurrency: </label>
                                            <input type="text" name="pp_TxnCurrency" value="PKR">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_TxnDateTime: </label>
                                            <input type="text" name="pp_TxnDateTime" id="pp_TxnDateTime"
                                                   value="{{\Carbon\Carbon::now()->format('YmdHis')}}">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_TxnExpiryDateTime: </label>
                                            <input type="text" name="pp_TxnExpiryDateTime" id="pp_TxnExpiryDateTime"
                                                   value="{{\Carbon\Carbon::now()->addDay(2)->format('YmdHis')}}">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_BillReference: </label>
                                            <input type="text" name="pp_BillReference" value="billRef">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_Description: </label>
                                            <input type="text" name="pp_Description" value="{{$course_name}}">
                                        </div>

                                        <div class="formFielWrapper">
                                            <label class="active">pp_ReturnURL: </label>
                                            <input type="text" name="pp_ReturnURL"
                                                   value="https://youexceltraining.com/payment_success">
                                        </div>


                                        <div class="formFielWrapper">
                                            <label class="active">pp_SecureHash: </label>
                                            <input type="text" name="pp_SecureHash" value="0123456789">
                                        </div>

                                        <input type="hidden" name="salt" value="zt85fg9h83">
                                        <br><br>
                                        <div class="formFielWrapper" style="margin-bottom: 2rem;">
                                            <label class="">Hash values string: </label>
                                            <input type="text" id="hashValuesString" value="">
                                            <br><br>
                                        </div>


{{--                                        <div class="formFielWrapper">--}}
{{--                                            <label class="active">ppmpf 1: </label>--}}
{{--                                            <input type="text" name="ppmpf_1" value="1">--}}
{{--                                        </div>--}}

{{--                                        <div class="formFielWrapper">--}}
{{--                                            <label class="active">ppmpf 2: </label>--}}
{{--                                            <input type="text" name="ppmpf_2" value="2">--}}
{{--                                        </div>--}}

{{--                                        <div class="formFielWrapper">--}}
{{--                                            <label class="active">ppmpf 3: </label>--}}
{{--                                            <input type="text" name="ppmpf_3" value="3">--}}
{{--                                        </div>--}}

{{--                                        <div class="formFielWrapper">--}}
{{--                                            <label class="active">ppmpf 4: </label>--}}
{{--                                            <input type="text" name="ppmpf_4" value="4">--}}
{{--                                        </div>--}}

{{--                                        <div class="formFielWrapper">--}}
{{--                                            <label class="active">ppmpf 5: </label>--}}
{{--                                            <input type="text" name="ppmpf_5" value="5">--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="row">


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Name (As per your last education
                                                    document)</label>
                                                <input type="text" class="form-control" id="name"
                                                       placeholder=""
                                                       name="ppmpf_1"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                       aria-describedby="emailHelp" placeholder=""
                                                       name="ppmpf_2"
                                                       pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                       required="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">City <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="city"
                                                       placeholder=""
                                                       name="ppmpf_3"
                                                       required>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Cell / WhatsApp Number<span
                                                        style="color: red;">*</span></label>
                                                <input
                                                    data-inputmask="'mask': '0399-9999999'"
                                                    placeholder="Mobile No(XXXX-XXXXXXX)"
                                                    name="ppmpf_4"

                                                    type="text" class="form-control" id="phone"
                                                    required="">
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">CNIC/National ID No: <span
                                                        style="color: red;">*</span></label>
                                                <input type="text" class="form-control" id="cnic "
                                                       name="ppmpf_5"

                                                       placeholder="CNIC/National ID No:" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4">
                                        <button type="button" onclick="submitForm()" class="pay_now btn btn-lmslogin1">
                                            Proceed to  Payment
                                        </button>
                                    </div>
                                    {{--                                    <button type="button" onclick="submitForm()">Submit</button>--}}

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
            integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            // $(":input").inputmask();

        })


        $(".pay_now").on("click", function () {

            var IntegritySalt = "zt85fg9h83";

            hashString = '';

            hashString += IntegritySalt + '&';

            if (document.getElementsByName("pp_Amount")[0].value != '') {
                hashString += document.getElementsByName("pp_Amount")[0].value + '&';
            }

            if (document.getElementsByName("pp_BillReference")[0].value != '') {
                hashString += document.getElementsByName("pp_BillReference")[0].value + '&';
            }


            if (document.getElementsByName("pp_Description")[0].value != '') {
                hashString += document.getElementsByName("pp_Description")[0].value + '&';
            }

            if (document.getElementsByName("pp_Language")[0].value != '') {
                hashString += document.getElementsByName("pp_Language")[0].value + '&';
            }
            if (document.getElementsByName("pp_MerchantID")[0].value != '') {
                hashString += document.getElementsByName("pp_MerchantID")[0].value + '&';
            }
            if (document.getElementsByName("pp_Password")[0].value != '') {
                hashString += document.getElementsByName("pp_Password")[0].value + '&';
            }
            if (document.getElementsByName("pp_ReturnURL")[0].value != '') {
                hashString += document.getElementsByName("pp_ReturnURL")[0].value + '&';
            }
            if (document.getElementsByName("pp_SubMerchantID")[0].value != '') {
                hashString += document.getElementsByName("pp_SubMerchantID")[0].value + '&';
            }

            if (document.getElementsByName("pp_TxnCurrency")[0].value != '') {
                hashString += document.getElementsByName("pp_TxnCurrency")[0].value + '&';
            }
            if (document.getElementsByName("pp_TxnDateTime")[0].value != '') {
                hashString += document.getElementsByName("pp_TxnDateTime")[0].value + '&';
            }
            if (document.getElementsByName("pp_TxnExpiryDateTime")[0].value != '') {
                hashString += document.getElementsByName("pp_TxnExpiryDateTime")[0].value + '&';
            }
            if (document.getElementsByName("pp_TxnRefNo")[0].value != '') {
                hashString += document.getElementsByName("pp_TxnRefNo")[0].value + '&';
            }

            if (document.getElementsByName("pp_TxnType")[0].value != '') {
                hashString += document.getElementsByName("pp_TxnType")[0].value + '&';
            }

            if (document.getElementsByName("pp_Version")[0].value != '') {
                hashString += document.getElementsByName("pp_Version")[0].value + '&';
            }
            if (document.getElementsByName("ppmpf_1")[0].value != '') {
                hashString += document.getElementsByName("ppmpf_1")[0].value + '&';
            }
            if (document.getElementsByName("ppmpf_2")[0].value != '') {
                hashString += document.getElementsByName("ppmpf_2")[0].value + '&';
            }
            if (document.getElementsByName("ppmpf_3")[0].value != '') {
                hashString += document.getElementsByName("ppmpf_3")[0].value + '&';
            }
            if (document.getElementsByName("ppmpf_4")[0].value != '') {
                hashString += document.getElementsByName("ppmpf_4")[0].value + '&';
            }
            if (document.getElementsByName("ppmpf_5")[0].value != '') {
                hashString += document.getElementsByName("ppmpf_5")[0].value + '&';
            }

            hashString = hashString.slice(0, -1);
            document.getElementById("hashValuesString").value = hashString;


            var IntegritySalt = document.getElementsByName("salt")[0].value;
            var hash = CryptoJS.HmacSHA256(document.getElementById("hashValuesString").value, IntegritySalt);
            document.getElementsByName("pp_SecureHash")[0].value = hash + '';

            console.log('string: ' + hashString);
            console.log('hash: ' + document.getElementsByName("pp_SecureHash")[0].value);

            document.jsform.submit();
        })

    </script>
    <script src="https://sandbox.jazzcash.com.pk/Sandbox/Scripts/hmac-sha256.js"></script>
@endsection
