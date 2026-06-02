<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Freedemo;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;

class freedemoController extends Controller
{
    function addregistration(Request $req)
    {
        $freedemo1= new Freedemo;

        $freedemo1->Name=$req->name;
        $freedemo1->Email=$req->email;
        $freedemo1->Course=$req->course;
        $freedemo1->Date=$req->date;
        $freedemo1->Time=$req->time;
     
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ]; 

        Mail::to($req)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        $freedemo1->save();
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('book-appointment');
    }
    function showtable()
    {
        $data= Freedemo::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-freedemo', compact('data'));
    }
    function delete($id)
    {
        $data= Freedemo::find($id);
        $data->delete();
        return redirect('view-freedemo');
    }
}
