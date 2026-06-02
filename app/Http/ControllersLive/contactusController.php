<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;


class contactusController extends Controller
{
    function addregistration(Request $req)
    {
        $contactus= new Contactus;

        $contactus->Fullname=$req->name;
        $contactus->Email=$req->email;
        $contactus->Phoneno=$req->phone;
        $contactus->DateTimeform=$req->datetime;
        $contactus->Subject=$req->subject;
        $contactus->Message=$req->message;

        $details = [
        'name' => $req->name,
        'phone' => $req->phone,
        'email' => $req->email,
        'coursesintrested' => $req->coursesintrested,
        'comments' => $req->comments
        ];
        $contactus->save();

        $to_name = $req->name;
        $to_email = $req->email;
        $to_email_one = 'info@youexceltraining.com';
        $to_email_two = 'youexceltraining@gmail.com';
        $to_email_three = 'youexcel.connect@gmail.com';
        $to_email_four = 'muneera.amer@youexceltraining.com';

        Mail::send("emails.contact_us", ["email_data" => $details], function ($message) use ($to_name, $to_email, $req) {
            $message->to($to_email, $to_name)->subject("Contact Us Form Data");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

        Mail::send("emails.contact_us", ["email_data" => $details], function ($message) use ($to_name, $to_email_one, $req) {
            $message->to($to_email_one, $to_name)->subject("Contact Us Form Data");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

        Mail::send("emails.contact_us", ["email_data" => $details], function ($message) use ($to_name, $to_email_two, $req) {
            $message->to($to_email_two, $to_name)->subject("Contact Us Form Data");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

        Mail::send("emails.contact_us", ["email_data" => $details], function ($message) use ($to_name, $to_email_three, $req) {
            $message->to($to_email_three, $to_name)->subject("Contact Us Form Data");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });

        Mail::send("emails.ContactMail1", ["email_data" => $details], function ($message) use ($to_name, $to_email_four, $req) {
            $message->to($to_email_four, $to_name)->subject("Contact Us Form Data");
            $message->from("info@youexceltraining.com", "YouExcel Training");
        });


        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/contact-us');
    }
    function showtable()
    {
        $data= Contactus::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-Contactus', compact('data'));
    }
    function delete($id)
    {
        $data= Contactus::find($id);
        $data->delete();
        return redirect('view-Contactus');
    }
}
