<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $webinars = Webinar::orderBy('date', 'asc')->get();
            return view('adminpanel.webinars.index', compact('webinars'));
        } catch (\Throwable $th) {
            Log::error("Webinars Index Failed:" . $th->getMessage());
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reg_link' => 'required|string|max:255',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $webinar = new Webinar();
            $webinar->title = $request->title;
            $webinar->description = $request->description;
            $webinar->reg_link = $request->reg_link;
            $webinar->date = Carbon::parse($request->date, 'Asia/Karachi');
            if ($request->hasFile('image')) {
                $webinarImage = $request->file('image');
                $webinarImage_ext = $webinarImage->getClientOriginalExtension();
                $webinarImage_name = time() . '_image.' . $webinarImage_ext;

                $webinarImage_path = 'uploads/webinar';
                $webinarImage->move(public_path($webinarImage_path), $webinarImage_name);
                $webinar->image = $webinarImage_path . "/" . $webinarImage_name;
            }
            $webinar->save();

            DB::commit();
            return redirect()->route('webinars.index')->with('success', 'Webinar Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Webinar Store Failed', ['error' => $th->getMessage()]);
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
            $webinar = Webinar::findOrFail($id);
            return view('adminpanel.webinars.edit', compact('webinar'));
        } catch (\Throwable $th) {
            Log::error("Webinar Edit Failed:" . $th->getMessage());
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'reg_link' => 'required|string|max:255',
            'date' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $webinar = Webinar::findOrFail($id);
            $webinar->title = $request->title;
            $webinar->description = $request->description;
            $webinar->reg_link = $request->reg_link;
            $webinar->date = Carbon::parse($request->date, 'Asia/Karachi');
            if ($request->hasFile('image')) {
                if (isset($webinar->image) && File::exists(public_path($webinar->image))) {
                    File::delete(public_path($webinar->image));
                }
                $webinarImage = $request->file('image');
                $webinarImage_ext = $webinarImage->getClientOriginalExtension();
                $webinarImage_name = time() . '_image.' . $webinarImage_ext;

                $webinarImage_path = 'uploads/webinar';
                $webinarImage->move(public_path($webinarImage_path), $webinarImage_name);
                $webinar->image = $webinarImage_path . "/" . $webinarImage_name;
            }
            $webinar->save();

            DB::commit();
            return redirect()->route('webinars.index')->with('success', 'Webinar Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Webinar Update Failed', ['error' => $th->getMessage()]);
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
            $webinar = Webinar::findOrFail($id);
            if (isset($webinar->image) && File::exists(public_path($webinar->image))) {
                File::delete(public_path($webinar->image));
            }
            $webinar->delete();
            return redirect()->back()->with('success', 'Webinar Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Webinar Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function updateStatus(string $id)
    {
        try {
            $webinar = Webinar::findOrFail($id);
            $message = $webinar->is_active == 'active' ? 'Webinar Deactivated Successfully' : 'Webinar Activated Successfully';
            if ($webinar->is_active == 'active') {
                $webinar->is_active = 'inactive';
                $webinar->save();
            } else {
                $webinar->is_active = 'active';
                $webinar->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Webinar Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function webWebinars()
    {
        try {
            $webinars = Webinar::orderBy('date', 'asc')->where('is_active', 'active')->latest()->get();
            return view('website.pages.webinars', compact('webinars'));
        } catch (\Throwable $th) {
            Log::error("Webinars Index Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }
}
