<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

{{--<h1>Youexcel Training</h1>--}}

<?php

$merchant_id =  16670;
$secured_key = '4nDvm1_6K1n4K8uaizVloY2';
$num=17500;
/**$num=rand(100,1000);**/
$basket_id = rand(1,9999);
$trans_amount = $num;
if (count($_GET) > 0) {
    processResponse($merchant_id, $basket_id, $trans_amount, $_GET);
}

$token = getAccessToken($merchant_id, $secured_key, $basket_id, $trans_amount);

/**
 * get access token with merchant id, secured key, basket id, transaction amount
 *
 */

function getAccessToken($merchant_id, $secured_key, $basket_id, $trans_amount)
{
    $tokenApiUrl = 'https://ipg1.apps.net.pk/Ecommerce/api/Transaction/GetAccessToken';

    $urlPostParams = sprintf(
    //'MERCHANT_ID=%s&SECURED_KEY=%s',
        'MERCHANT_ID=%s&SECURED_KEY=%s&TXNAMT=%s&BASKET_ID=%s',
        $merchant_id,
        $secured_key,
        $trans_amount,
        $basket_id
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $tokenApiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $urlPostParams);
    curl_setopt($ch, CURLOPT_USERAGENT, 'CURL/PHP PayFast Example');
    $response = curl_exec($ch);
    curl_close($ch);
    $payload = json_decode($response);
    $token = isset($payload->ACCESS_TOKEN) ? $payload->ACCESS_TOKEN : '';
    return $token;
}

/**
 * process response coming from PayFast
 *
 */

function processResponse($merchant_id, $original_basket_id, $txnamt, $response)
{
    /**
     * following parameters sent from PayFast after success/failed transaction
     *
     */

    $trans_id = $response['transaction_id'];
    $err_code = $response['err_code'];
    $err_msg = $response['err_msg'];
    $basket_id = $response['basket_id'];
    $order_date = $response['order_date'];
    $response_key = $response['Response_Key'];
    $payment_name = $response['PaymentName'];

    $secretword = ''; // No secret code defined for merchant id 102, secret code can be entered in merchant portal.

    $response_string = sprintf("%s%s%s%s%s", $merchant_id, $original_basket_id, $secretword, $txnamt, $err_code);
    $response_hash = hash('MD5', $response_string);

    if (strtolower($response_hash) != strtolower($response_key)) {
        echo "<br/>Transaction could not be varified<br/>";
        return;
    }

    if ($err_code == '000' || $err_code == '00') {
        echo "<strong>Transaction Successfully Completed. Transaction ID: " . $trans_id . "</strong><br/>";
        echo "<br/>Date: " . $order_date;
        return;
    }

    echo "<br/>Transaction Failed. Message: " . $err_msg;
}

?>


@extends('website.app')

@section('content')
    <section class="section-demofeature">
        <div class="">
            <div class="container top-padding-register">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 section-demofeatur">
                        <img src="{{url("/img/Yourexcel-img/aboutuslogo.png")}}" style="
               background-size: cover; width: 93%; position: absolute; margin-top: 220px; opacity: 0.2;">
                    </div>
                    <!-- <img src="img/Yourexcel-img/aboutuslogo.png" alt="" style="position:absolute;"> -->
                    <div class="col-lg-12 main-banner-padding">
                        <div class="text-center mb-5">
                            <h1 class="font-register-h1">We are processing.Please wait.</h1>
                        </div>
                    </div>
                    <form style="display: none" id='payfast_payment_form' name='payfast-payment-form' method='post' action="https://ipg1.apps.net.pk/Ecommerce/api/Transaction/PostTransaction">
                        Currency Code: <input type="TEXT" name="CURRENCY_CODE" value="PKR" /><br />
                        Merchant ID: <input type="TEXT" name="MERCHANT_ID" value="<?php echo $merchant_id; ?>" /><br />
                        Merchant Name: <input type="TEXT" name="MERCHANT_NAME" value="Youexcel Training" /><br />
                        Token: <input type="TEXT" name="TOKEN" value="<?php echo $token; ?>" /><br />
                        Success URL: <input type="TEXT" name="SUCCESS_URL" value="http://youexceltraining.com/payment_success" /><br />
                        Failure URL: <input type="TEXT" name="FAILURE_URL" value="http://youexceltraining.com/" /><br />
                        Checkout URL: <input type="TEXT" name="CHECKOUT_URL" value="http://youexceltraining.com/" /><br />
                        Customer Email: <input type="TEXT" name="CUSTOMER_EMAIL_ADDRESS" value="mohammadwasiuddin@yahoo.com" /><br />
                        Customer Mobile: <input type="TEXT" name="CUSTOMER_MOBILE_NO" value="03363779580" /><br />
                        Transaction Amount: <input type="TEXT" name="TXNAMT" value="<?php echo $trans_amount; ?>" /><br />
                        Basket ID: <input type="TEXT" name="BASKET_ID" value="<?php echo $basket_id; ?>" /><br />
                        Transaction Date: <input type="TEXT" name="ORDER_DATE" value="<?php echo date('Y-m-d H:i:s', time()); ?>" /><br />
                        Signature: <input type="TEXT" name="SIGNATURE" value="SOME-RANDOM-STRING" /><br />
                        Version: <input type="TEXT" name="VERSION" value="MERCHANT-CART-0.1" /><br />
                        Item Description: <input type="TEXT" name="TXNDESC" value="Financial-Modeling" /><br />
                        Proccode: <input type="TEXT" name="PROCCODE" value="00" /><br />
                        Transaction Type: <input type="TEXT" name="TRAN_TYPE" value='ECOMM_PURCHASE' /><br />
                        Store ID/Terminal ID (optional): <input type="TEXT" name="STORE_ID" value=''  /><br />

                        <input type="SUBMIT" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function (){
            $("#payfast_payment_form").submit();
        })
    </script>
@endsection
