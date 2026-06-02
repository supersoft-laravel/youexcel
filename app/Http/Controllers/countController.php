<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class countController extends Controller
{
    function countrecord()
    {
        $leadRole = DB::table('lead')->get()->count();
        return view('/kt',compact('leadRole'));
    }
    public function dashboard()
    {
        $countt = DB::table('lead')->count();
        $register = DB::table('registers')->count();
        $feedback = DB::table('feedback')->count();
        $career = DB::table('career')->count();
        $contact = DB::table('contactus')->count();
        $kamyabjawan = DB::table('kamyabjawan')->count();
        $funnelform = DB::table('funnel')->count();
        $bookappointment = DB::table('freedemo')->count();
        $assetscount = DB::table('assessments')->count();
        $cfmarecorded = DB::table('cfma_recorded')->count();
        return view('adminpanel.main-page', compact('assetscount', 'countt','register','feedback','career','contact','kamyabjawan','funnelform','bookappointment','cfmarecorded'));
    }
}
