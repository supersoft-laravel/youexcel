<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registers;
use App\Mail\ContactMail;
use Mail;
use Session;
use Auth;
// use App\Http\Controllers\HomeController;

class RegistrationController extends Controller
{
    function addregistration(Request $req)
    {
        $Register= new Registers;
        if ($req->file('file1')) {
            $file = $req->file('file1');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('cfmarecorded/', $fileName);
            // }
            $Register->Image=$fileName;
        }
        $Register->email=$req->email;
        $Register->chooseprogramme=$req->cfma;
        $Register->name=$req->name;
        $Register->fathername=$req->fname;
        $Register->address=$req->address;
        $Register->city=$req->city;
        $Register->employeename=$req->empname;
        $Register->designation=$req->designation;
        $Register->cellnumber=$req->cellnumber;
        $Register->dateofbirth=$req->date;
        $Register->cnic=$req->cnic;
        $Register->qualification=$req->qualification;

               $details = [
        'Image' => $req->Image,
        'email' => $req->email,
        'cfma' => $req->cfma,
        'name' => $req->name,
        'fname' => $req->fname,
        'address' => $req->address,
        'city' => $req->city,
        'empname' => $req->empname,
        'designation' => $req->designation,
        'cellnumber' => $req->cellnumber,
        'coursesintrested' => $req->date,
        'cnic' => $req->cnic,
        'qualification' => $req->qualification
        ];

        Mail::to($req)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        $Register->save();
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
            return redirect('Registration-Form');
    }
    function showtable()
    {
        $data= Registers::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.view-registered', compact('data'));
    }
    function delete($id)
    {
        $data= Registers::find($id);
        $data->delete();
        return redirect('view-registered');
    }
}
