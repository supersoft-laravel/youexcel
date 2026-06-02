<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JazzCashController extends Controller
{
    public function index()
    {
        return view("sample_jazz_cash");
    }

    public function jazzcash_payment_success(Request $request)
    {
        // dd("Stop");
            dd($request->all());

        return view("payment_success");
    }

    public function course_checkout($course_name,$fee)
    {

//        dd($fee);
        return view("checkout_page",['course_name'=>$course_name,'fee'=>$fee*100,"actual_amount"=>$fee]);
//        dD($course_name);
    }
}
