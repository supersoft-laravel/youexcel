<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoCourse;

class DemoCourseController extends Controller
{
    public function index()
    {
        $demoCourse = DemoCourse::get();
        return view('adminpanel.demo_course_name', compact('demoCourse'));
    }

    public function adddemocourse(Request $request)
    {
        // dd($request);
        DemoCourse::create([
            'course_name' => $request->course_name,
        ]);

        return redirect()->route('demo.course.name');
    }

    function Deletedemocourse($id)
    {
        $data = DemoCourse::find($id);
        $data->delete();
        return redirect()->back();
    }

}
