<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CareerForm;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;

class CareerFormController extends Controller
{
    function addregistration(Request $req)
    {
        $careerform= new CareerForm;
        if ($req->file('filee')) {
            $file = $req->file('filee');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('careerimg/', $fileName);
            // }
            $careerform->Image=$fileName;
        }

        $careerform->Fullname=$req->fullname;
        $careerform->Cellno=$req->cellno;
        $careerform->Email=$req->email;
        $careerform->PositionApplyingFor=$req->applyfor;
        $careerform->Coverletter=$req->coverletter;

        $details = [
        'name' => $req->name,
        'phone' => $req->phone,
        'email' => $req->email,
        'coursesintrested' => $req->coursesintrested,
        'comments' => $req->comments
        ];

        Mail::to($req)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        $careerform->save();
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('/Careers');
    }
    function showtable()
    {
        $data= CareerForm::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-careers', compact('data'));
    }
    function delete($id)
    {
        $data= CareerForm::find($id);
        $data->delete();
        return redirect('view-careers');
    }
}
