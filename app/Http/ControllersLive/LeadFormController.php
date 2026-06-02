<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\LeadForm;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Http\Controllers\HomeController;

class LeadFormController extends Controller
{
    function addregistration(Request $req)
    {
        $leadform= new LeadForm;

        $leadform->Name=$req->name;
        $leadform->Phone=$req->phone;
        $leadform->Email=$req->email;
        $leadform->CoursesIntrested=$req->coursesintrested;
        $leadform->Comments=$req->comments;

        $details = [
        'name' => $req->name,
        'phone' => $req->phone,
        'email' => $req->email,
        'coursesintrested' => $req->coursesintrested,
        'comments' => $req->comments
        ];

        $leadform->save();

        $data = $req->all();
        $data = [
            "name" => $req->name,
            "coursesintrested" => $req->coursesintrested,
        ];


        $to_name = $req->name;
        $to_email = $req->email;
        $to_email1 = 'nomanpeerzada9t9@gmail.com';

        Mail::send("emails.Leadformmail", ["email_data" => $data], function($message) use ($to_name, $to_email, $req) {
        $message->to($to_email, $to_name)->subject("YouExcel Training");
        $message->from($req->email,$req->name);
        });

        Mail::send("emails.Leadformmail", ["email_data" => $data], function($message) use ($to_name, $to_email1, $req) {
            $message->to($to_email1, $to_name)->subject("YouExcel Training");
            $message->from($req->email,$req->name);
            });

            Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/');
        
        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $leadform->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('/');
    }

    function showtable()
    {
        $data= LeadForm::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-Leadform',compact('data'));
    }
    function delete($id)
    {
        $data= LeadForm::find($id);
        $data->delete();
        return redirect('view-Leadform');
    }

}
