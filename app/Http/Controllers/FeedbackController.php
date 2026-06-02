<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
use Illuminate\Support\Facades\Http;
// use App\Http\Controllers\HomeController;

class FeedbackController extends Controller
{
    function addregistration(Request $req)
    {
        $req->validate([
            'g-recaptcha-response' => 'required',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LcCcgErAAAAAGSNCKqdrhJSuFA1vOjs-r--1Mje',
            'response' => $req['g-recaptcha-response'],
        ]);
        $data = $response->json();

        if (!$data['success']) {
            // Handle failure (e.g., show an error message)
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed. Please try again.']);
        }
        $Feedbacks= new Feedback;

        $Feedbacks->Email=$req->email;
        $Feedbacks->YourCourse=$req->cfma;
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

        $Feedbacks->save();

        $data = $req->all();
        $data = [
            "fullname" => $req->fullname,
            "yourcourse" => $req->yourcourse,
        ];

        $to_name = $req->fullname;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        // Mail::send("emails.Feedbackmail", ["email_data" => $data], function ($message) use ($to_name, $to_email, $req) {
        //     $message->to($to_email, $to_name)->subject("Thank you for your valuable feedback");
        //     $message->from("info@youexceltraining.com", "YouExcel Training");
        // });

//        Mail::send("emails.Feedbackmail", ["email_data" => $data], function ($message) use ($to_name, $to_email_one, $req) {
//            $message->to($to_email_one, $to_name)->subject("Thank you for your valuable feedback");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });
//
//        Mail::send("emails.Feedbackmail", ["email_data" => $data], function ($message) use ($to_name, $to_email_two, $req) {
//            $message->to($to_email_two, $to_name)->subject("Thank you for your valuable feedback");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

        Mail::send("emails.Feedbackmail", ["email_data" => $data], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Thank you for your valuable feedback");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

//        Mail::send("emails.Feedbackmail", ["email_data" => $data], function ($message) use ($to_name, $to_email_four, $req) {
//            $message->to($to_email_four, $to_name)->subject("Thank you for your valuable feedback");
//            $message->from("info@youexceltraining.com", "YouExcel Training");
//        });

            Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
            // return redirect('Feedback-Form');
            return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $Feedbacks->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('Feedback-Form');
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
