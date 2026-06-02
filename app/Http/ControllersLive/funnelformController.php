<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\funnelform;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;

class funnelformController extends Controller
{
    function addregistration(Request $req)
    {
        $Funnel= new funnelform;

        $Funnel->name=$req->name;
        $Funnel->email=$req->email;
        $Funnel->cnic=$req->cnic;
        $Funnel->number=$req->pnumber;
        $Funnel->address=$req->address;
        $Funnel->age=$req->age;
        $Funnel->city=$req->city;

        
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ]; 

        Mail::to($req)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        $Funnel->save();
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('funnel-form');
    }
    function showtable()
    {
        $data= funnelform::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-funnel', compact('data'));
    }
    function delete($id)
    {
        $data= funnelform::find($id);
        $data->delete();
        return redirect('view-funnel');
    }
}
