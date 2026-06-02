<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\cfmarecorded;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;

class cfmarecordedController extends Controller
{
    function addregistration(Request $req)
    {
        $cfma_recorded= new cfmarecorded;
        if ($req->file('file1')) {
            $file = $req->file('file1');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('cfmarecorded/', $fileName);
            // }
            $cfma_recorded->Image=$fileName;
        }
        $cfma_recorded->email=$req->email;
        $cfma_recorded->chooseprogramme=$req->cfma;
        $cfma_recorded->name=$req->name;
        $cfma_recorded->fathername=$req->fname;
        $cfma_recorded->address=$req->address;
        $cfma_recorded->city=$req->city;
        $cfma_recorded->employeename=$req->empname;
        $cfma_recorded->designation=$req->designation;
        $cfma_recorded->cellnumber=$req->cellnumber;
        $cfma_recorded->dateofbirth=$req->date;
        $cfma_recorded->cnic=$req->cnic;
        $cfma_recorded->qualification=$req->qualification;
        
        $details = [
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
            'coursesintrested' => $req->coursesintrested,
            'comments' => $req->comments
        ]; 

        $cfma_recorded->save();

        $data = $req->all();
        $data = [
            "name" => $req->name,
            "cfma" => $req->cfma,
        ];

        $to_name = $req->name;
        $to_email = $req->email;
        $to_email1 = 'youexceltraining@gmail.com';

        Mail::send("emails.ContactMail", ["email_data" => $data], function($message) use ($to_name, $to_email, $req) {
        $message->to($to_email, $to_name)->subject("YouExcel Training");
        $message->from($req->email,$req->name);
        });

        Mail::send("emails.ContactMail", ["email_data" => $data], function($message) use ($to_name, $to_email1, $req) {
        $message->to($to_email1, $to_name)->subject("YouExcel Training");
        $message->from($req->email,$req->name);
        });

            Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
            return redirect('CFMA-video-form');

        // Mail::to($req)->send(new ContactMail($details));
        // Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        // $cfma_recorded->save();
        // Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        // return redirect('CFMA-video-form');
    }
    function showtable()
    {
        $data= cfmarecorded::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.cfma-recorded', compact('data'));
    }
    function delete($id)
    {
        $data= cfmarecorded::find($id);
        $data->delete();
        return redirect('cfma-recorded');
    }
}
