<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use Auth;

class CoursesController extends Controller
{
    function addcourses(Request $req)
    {
        $Course= new Courses;
        if ($req->file('image')) {
            $file = $req->file('image');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('careerimg/', $fileName);
            // }
            $Course->image=$fileName;
        }
        $Course->duration=$req->duration;
        $Course->coursename=$req->coursename;
        $Course->description=$req->description;
        $Course->save();
        return redirect('add-course');
    }
    function show()
    {
        $data= Courses::all();
        // return view('add-course', ['Courses'=>$data]);
        return view('adminpanel.add-course', compact('data'));
    }
    function delete($id)
    {
        $data= Courses::find($id);
        $data->delete();
        return redirect('add-course');
    }
    function editShowdata($id)
    {
        $Course= Courses::find($id);
        return view('adminpanel.edit', compact('Course'));
    }
    function editCourses(Request $req, $id)
    {
        $Course= Courses::find($id);
        if ($req->file('image')) {
            $file = $req->file('image');
            // foreach ($request->file('images') as $index => $file) {
                $fileOriginalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $fileName  = md5(time()) . '.' . $extension;
                $file->storeAs('public/course-img', $fileName);
            // }
            $Course->image=$fileName;
        }
        $Course->duration=$req->duration;
        $Course->coursename=$req->coursename;
        $Course->description=$req->description;
        $Course->save();
        return redirect('add-course');
    }
    public function logout($id)
    {
        return view('login-form.main-page', ['user' => User::findOrFail($id)]);
    }
}
