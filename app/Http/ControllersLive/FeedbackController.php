<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use App\Http\Controllers\HomeController;

class FeedbackController extends Controller
{
    function addregistration(Request $req)
    {
        $Feedbacks= new Feedback;

        $Feedbacks->Email=$req->email;
        $Feedbacks->YourCourse=$req->yourcourse;
        $Feedbacks->Fullname=$req->fullname;
        $Feedbacks->Question1=$req->radio1;
        $Feedbacks->Question2=$req->radio2;
        $Feedbacks->Question3=$req->radio3;
        $Feedbacks->Question4=$req->radio4;
        $Feedbacks->Question5=$req->radio5;
        $Feedbacks->Question6=$req->radio6;
        $Feedbacks->Question7=$req->radio7;
        $Feedbacks->Question8=$req->radio8;
        $Feedbacks->Question9=$req->radio9;
        $Feedbacks->Question10=$req->radio10;
        $Feedbacks->SocialmediaAnswer=$req->socailmedia;
        $Feedbacks->PersonallivesAnswer=$req->personallive;
        $Feedbacks->PowerBIAnswer=$req->powerbi;
        
        
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ]; 

        Mail::to($req)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        $Feedbacks->save();
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('Feedback-Form');
    }
    function showtable()
    {
        $data= Feedback::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-feedback', compact('data'));
    }
    function delete($id)
    {
        $data= Feedback::find($id);
        $data->delete();
        return redirect('view-feedback');
    }

}
