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

        Mail::to($req)->send(new ContactMail($details));
        Mail::to('youexceltraining@gmail.com')->send(new ContactMail($details));
        $cfma_recorded->save();
        Session::flash('appoinmentbooked','Appoinment has been Successfully !!');
        return redirect('CFMA-video-form');
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
        return redirect('view-cfma-recorded');
    }
}
