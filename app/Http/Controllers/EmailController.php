<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
use Mail;
use Mail1;
use Session;

class EmailController extends Controller
{
    public function Contact()
    {
        return view('send-message');
        
    }
    public function sendEmail(Request $request)
    {
        $details = [
            'email' => $request->email,
            'customRadio' => $request->customRadio
        ]; 

        Mail::to($request)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('demo-features');
        return back()->with('message_sent', 'Your message has been sent successfully!');
    }
}
