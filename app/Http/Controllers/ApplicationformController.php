<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
// use App\Http\Controllers\HomeController;

class ApplicationformController extends Controller
{
    function addregistration(Request $req)
    {
        //dd("I am here");
       
        $Application= new Application();

        $Application->course_first=$req->course_first;
        $Application->course_second=$req->course_second;
        $Application->course_third=$req->course_third;
        $Application->course_fourth=$req->course_fourth;
        $Application->class_timing=$req->class_timing;

        $Application->name=$req->name;
         $Application->fcnic=$req->fcnic;
        $Application->fname=$req->fname;
        $Application->district=$req->district;
        $Application->cnic=$req->cnic;
        $Application->gender=$req->gender;
        // $Application->status=$req->status;
        $Application->city=$req->city;
        $Application->taluka=$req->taluka;
        $Application->unioncouncil=$req->council;
        $Application->domocile=$req->domocile;
           $Application->country=$req->country;
        $Application->email=$req->email;
        $Application->dob=$req->dob;
        $Application->age=$req->age;
        $Application->mobileno=$req->mobileno;
        $Application->phoneno=$req->phoneno;
        $Application->address=$req->address;

        $Application->vstatus=$req->Vstatus;

        $Application->masterscustomername="MASTERS / POST GRADUATION";
        $Application->mastersfield=$req->mastersfield;
        $Application->mastersmarksobtained=$req->mastersmarksobtained;
        $Application->masterstotalmarks=$req->masterstotalmarks;

        $Application->bachelorscustomername="BACHELOR GRADUATION";
        $Application->bachelorsfield=$req->bachelorsfield;
        $Application->bachelorsmarksobtained=$req->bachelorsmarksobtained;
        $Application->bachelorstotalmarks=$req->bachelorstotalmarks;

        $Application->intercustomername="Intermediate";
        $Application->interfield=$req->interfield;
        $Application->intermarksobtained=$req->intermarksobtained;
        $Application->intertotalmarks=$req->intertotalmarks;

        $Application->matriccustomername="Matriculation";
        $Application->matricfield=$req->matricfield;
        $Application->matricmarksobtained=$req->matricmarksobtained;
        $Application->matrictotalmarks=$req->matrictotalmarks;

        $Application->education=$req->education;
        $Application->fdesignation=$req->fdesignation;
        $Application->fmonthlyincome=$req->fmonthlyincome;
        $Application->jobexperience=$req->jobexperience;
        $Application->fathername=$req->fathername;
        $Application->paddress=$req->paddress;
        $Application->caddress=$req->caddress;




        $Application->othercustomername=$req->othercustomername;
        $Application->otherfield=$req->otherfield;
        $Application->othermarksobtained=$req->othermarksobtained;
        $Application->othertotalmarks=$req->othertotalmarks;
        $Application->save();

 //dd($req->all());
        $email_data = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => "Training Registration Form",
            'comments' => $req->comments
        ];

        $to_name = $req->name;
        $to_email = $req->email;


        Mail::send("emails.freereg", ["email_data" => $email_data], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Thank you for registering  free Training");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });


        Mail::send("emails.freereg", ["email_data" => $email_data], function ($message) use ($to_name, $to_email, $req) {
            $message->to("info@youexceltraining.com",  "YouExcel Training")->subject("Thank you for registering  free Training");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });


        Session::flash('appoinmentbooked', 'Appoinment has been Successfully !!');
        return redirect('free-of-cost-training-registration-form'."/".$req->course_first);


    }
    function showtable()
    {
        $data= Application::all();
        return view('adminpanel.FreeOfCostTraning', compact('data'));
    }
    function delete($id)
    {
        $data= Application::find($id);
        $data->delete();
        return redirect('view-application-form');
    }

}
