<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contactus;
use App\Mail\ContactMail;
use App\Models\Resource;
use Mail;
use Session;
use Auth;


class contactusController extends Controller
{
    function addregistration(Request $req)
    {
        // dd($req->toArray());
        $contactus= new Contactus;

        $contactus->Fullname=$req->name;
        $contactus->Email=$req->email;
        $contactus->Phoneno=$req->number;
        // $contactus->DateTimeform=$req->datetime;
        $contactus->Subject=$req->subject;
        $contactus->Message=$req->message;     

        $details = [
        'name' => $req->name,
        'phone' => $req->number,
        'email' => $req->email,
        'coursesintrested' => $req->subject,
        'comments' => $req->message
        ];

        $contactus->save();

        // Data for user confirmation email
        $userEmailData = [
            'name' => $req->name,
        ];
    
        // Data for admin notification email
        $adminEmailData = [
            'name'              => $req->name,
            'phone'             => $req->number,
            'email'             => $req->email,
            'coursesintrested'  => $req->subject,
            'comments'          => $req->message
        ];
    
        // Send confirmation email to user
        Mail::send('emails.contact-us-user', ['email_data' => $userEmailData], function($message) use ($req) {
            $message->to($req->email, $req->name)
                    ->subject("Thanks for contacting YouExcel Training")
                    ->from('support@youexceltraining.com', 'YouExcel Training');
        });
    
        // Send detailed email to admin
        // Mail::send('emails.contact-us-admin', ['email_data' => $adminEmailData], function($message) use ($req) {
        //     $message->to('farhanq@youexceltraining.com', 'Admin')
        //             ->subject("New Contact Submission")
        //             ->from('support@youexceltraining.com', 'YouExcel Website');
        // });
            
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('/contact');
        return redirect()->route('thankyou')->with('success', 'Form Submitted Successfully!');
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
   function popup(Request $req){
        $data = Resource::where('status', 1)->get();

        return response()->json($data);
    }
    
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;
    
        if (!$ids) {
            return back()->with('error', 'No records selected.');
        }
    
        Contactus::whereIn('id', $ids)->delete();
    
        return back()->with('success', 'Selected records deleted successfully.');
    }

    
}
