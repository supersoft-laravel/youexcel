<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainers;
use Auth;

class TrainerController extends Controller
{
    function addtrainer(Request $req)
    {
        $Trainer= new Trainers;
        if ($req->file('image')) {
            $file = $req->file('image');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('public/course-img', $fileName);
            // }
            $Trainer->image=$fileName;
        }
        $Trainer->name=$req->name;
        $Trainer->trainername=$req->trainername;
        $Trainer->trainerstudies=$req->trainerstudies;
        $Trainer->profession=$req->profession;
        $Trainer->description=$req->description;
        $Trainer->save();
        return redirect('add-trainer');
    }
    function show()
    {
        $data= Trainers::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.add-trainer', compact('data'));
    }
    function delete($id)
    {
        $data= Trainers::find($id);
        $data->delete();
        return redirect('add-trainer');
    }
    function editShowdata($id)
    {
        $Trainer= Trainers::find($id);
        return view('adminpanel.edit-trainer', compact('Trainer'));
    }
    function editTrainers(Request $req, $id)
    {
        $Trainer= Trainers::find($id);
        if ($req->file('image')) {
            $file = $req->file('image');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('public/course-img', $fileName);
            // }
            $Trainer->image=$fileName;
        }
        $Trainer->name=$req->name;
        $Trainer->trainername=$req->trainername;
        $Trainer->trainerstudies=$req->trainerstudies;
        $Trainer->profession=$req->profession;
        $Trainer->description=$req->description;
        $Trainer->save();
        return redirect('add-trainer');
    }
}
