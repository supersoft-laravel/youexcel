<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $resources = Resource::orderBy('created_at', 'asc')->get();
            $courses = Courses::where('is_active', '1')->get();
            return view('adminpanel.resources.index', compact('resources','courses'));
        } catch (\Throwable $th) {
            Log::error("Resources Index Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $course = Courses::findOrFail($request->course_id);

            $resource = new Resource();
            $resource->course_id = $course->id;
            $resource->title = $course->coursename;
            
            if ($request->hasFile('image')) {
                $resourceImage = $request->file('image');
                $resourceImage_ext = $resourceImage->getClientOriginalExtension();
                $resourceImage_name = time() . '_image.' . $resourceImage_ext;
            
                $resourceImage_path = 'uploads/resources';
                $resourceImage->move(public_path($resourceImage_path), $resourceImage_name);
            
                $resource->image_path = $resourceImage_path . "/" . $resourceImage_name;
            }
            
            $resource->save();

            DB::commit();
            return redirect()->route('resources.index')->with('success', 'Resource Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Resource Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $resource = Resource::findOrFail($id);
            $courses = Courses::where('is_active', '1')->get();
            return view('adminpanel.resources.edit', compact('resource','courses'));
        } catch (\Throwable $th) {
            Log::error("Resource Edit Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'course_id' => 'required|exists:courses,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $course = Courses::findOrFail($request->course_id);
            $resource = Resource::findOrFail($id);
            $resource->course_id = $course->id;
            $resource->title = $course->coursename;
            if ($request->hasFile('image')) {
                if (isset($resource->image_path) && File::exists(public_path($resource->image_path))) {
                    File::delete(public_path($resource->image_path));
                }
                $resourceImage = $request->file('image');
                $resourceImage_ext = $resourceImage->getClientOriginalExtension();
                $resourceImage_name = time() . '_image.' . $resourceImage_ext;

                $resourceImage_path = 'uploads/resources';
                $resourceImage->move(public_path($resourceImage_path), $resourceImage_name);
                $resource->image_path = $resourceImage_path . "/" . $resourceImage_name;
            }
            $resource->save();

            DB::commit();
            return redirect()->route('resources.index')->with('success', 'Resource Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Resource Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $resource = Resource::findOrFail($id);
            if (isset($resource->image_path) && File::exists(public_path($resource->image_path))) {
                File::delete(public_path($resource->image_path));
            }
            $resource->delete();
            return redirect()->back()->with('success', 'Resource Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Resource Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function updateStatus(string $id)
    {
        try {
            $resource = Resource::findOrFail($id);
            $message = $resource->status == '1' ? 'Resource Deactivated Successfully' : 'Resource Activated Successfully';
            if ($resource->status == '1') {
                $resource->status = '0';
                $resource->save();
            } else {
                $resource->status = '1';
                $resource->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Resource Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
