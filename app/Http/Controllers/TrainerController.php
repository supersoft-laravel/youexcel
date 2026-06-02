<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainers;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TrainerController extends Controller
{
    public function adminTrainers()
    {
        $trainers = Trainers::all();
        return view("adminpanel.trainers.index", compact('trainers'));
    }
    
    public function createTrainer()
    {
        return view("adminpanel.trainers.create");
    }
    
    function storeTrainer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:trainers,slug',
            'experience' => 'required|string',
            'rating' => 'nullable|numeric|min:1|max:5',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'bio' => 'required|string',
            'description' => 'nullable|string',
            'certifications' => 'nullable|array',
            'certifications.*' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', $validator->errors()->first());
        }

        try {
            DB::beginTransaction();
            $trainer = new Trainers();
            $trainer->name = $request->name;
            $trainer->slug = $request->slug;
            $trainer->experience = $request->experience;
            $trainer->rating = $request->rating;
            $trainer->phone = $request->phone ?? null;
            $trainer->linkedin = $request->linkedin ?? null;
            $trainer->facebook = $request->facebook ?? null;
            $trainer->instagram = $request->instagram ?? null;
            $trainer->bio = $request->bio;
            $trainer->description = $request->description ?? null;
            $trainer->certifications = $request->certifications ? json_encode($request->certifications) : null;
            
            if ($request->hasFile('picture')) {
                $image_url = $request->file('picture');
                $image_url_ext = $image_url->getClientOriginalExtension();
                $image_url_name = time() . '_picture.' . $image_url_ext;

                $image_url_path = 'uploads/trainers';
                $image_url->move(public_path($image_url_path), $image_url_name);
                $trainer->picture = $image_url_path . "/" . $image_url_name;
            }
            
            $trainer->save();

            DB::commit();
            return redirect()->route('trainers.index')->with('success', 'Trainer Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Trainer Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    
    public function editTrainer($id)
    {
        $trainer = Trainers::find($id);
        return view("adminpanel.trainers.edit", compact('trainer'));
    }
    
    function updateTrainer(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:trainers,slug,'.$id,
            'experience' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'bio' => 'required|string',
            'description' => 'nullable|string',
            'certifications' => 'nullable|array',
            'certifications.*' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', $validator->errors()->first());
        }

        try {
            DB::beginTransaction();
            $trainer = Trainers::findOrFail($id);
            $trainer->name = $request->name;
            $trainer->slug = $request->slug;
            $trainer->experience = $request->experience;
            $trainer->rating = $request->rating;
            $trainer->phone = $request->phone ?? null;
            $trainer->linkedin = $request->linkedin ?? null;
            $trainer->facebook = $request->facebook ?? null;
            $trainer->instagram = $request->instagram ?? null;
            $trainer->bio = $request->bio;
            $trainer->description = $request->description ?? null;
            $trainer->certifications = $request->certifications ? json_encode($request->certifications) : null;
            
            if ($request->hasFile('picture')) {
                if (isset($trainer->picture) && File::exists(public_path($trainer->picture))) {
                    File::delete(public_path($trainer->picture));
                }
                $image_url = $request->file('picture');
                $image_url_ext = $image_url->getClientOriginalExtension();
                $image_url_name = time() . '_picture.' . $image_url_ext;

                $image_url_path = 'uploads/trainers';
                $image_url->move(public_path($image_url_path), $image_url_name);
                $trainer->picture = $image_url_path . "/" . $image_url_name;
            }
            
            $trainer->save();

            DB::commit();
            return redirect()->route('trainers.index')->with('success', 'Trainer Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Trainer Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    
    public function updateStatus(string $id)
    {
        try {
            $trainer = Trainers::findOrFail($id);
            $message = $trainer->is_active == '1' ? 'Trainer Deactivated Successfully' : 'Trainer Activated Successfully';
            if ($trainer->is_active == '1') {
                $trainer->is_active = '0';
                $trainer->save();
            } else {
                $trainer->is_active = '1';
                $trainer->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Trainer Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }

    function delete($id)
    {
        try {
            $trainer = Trainers::findOrFail($id);
            $trainer->delete();
            return redirect()->back()->with('success', 'Trainer deleted successfully!');
        } catch (\Throwable $th) {
            Log::error('Trainer Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    
    
    
    
    //Website
    public function webTrainers()
    {
        $trainers = Trainers::where('is_active', '1')->get();
        return view("website.pages.trainers.index", compact('trainers'));
    }
    
    public function webTrainerShow($slug)
    {
        $trainer = Trainers::where('is_active', '1')->where('slug', $slug)->first();
        return view("website.pages.trainers.show", compact('trainer'));
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // function addtrainer(Request $req)
    // {
    //     $Trainer= new Trainers;
    //     if ($req->file('image')) {
    //         $file = $req->file('image');
    //         // foreach ($request->file('images') as $index => $file) {
    //             $fileOriginalName = $file->getClientOriginalName();
    //             $extension = $file->getClientOriginalExtension();
    //             $fileName  = md5(time()) . '.' . $extension;
    //             $file->storeAs('public/course-img', $fileName);
    //         // }
    //         $Trainer->image=$fileName;
    //     }
    //     $Trainer->name=$req->name;
    //     $Trainer->trainername=$req->trainername;
    //     $Trainer->trainerstudies=$req->trainerstudies;
    //     $Trainer->profession=$req->profession;
    //     $Trainer->description=$req->description;
    //     $Trainer->save();
    //     return redirect('add-trainer');
    // }
    // function show()
    // {
    //     $data= Trainers::all();
    //     // return view('add-course', ['Courses'=>$data]);
    //     return view('adminpanel.add-trainer', compact('data'));
    // }
    // function delete($id)
    // {
    //     $data= Trainers::find($id);
    //     $data->delete();
    //     return redirect('add-trainer');
    // }
    // function editShowdata($id)
    // {
    //     $Trainer= Trainers::find($id);
    //     return view('adminpanel.edit-trainer', compact('Trainer'));
    // }
    // function editTrainers(Request $req, $id)
    // {
    //     $Trainer= Trainers::find($id);
    //     if ($req->file('image')) {
    //         $file = $req->file('image');
    //         // foreach ($request->file('images') as $index => $file) {
    //             $fileOriginalName = $file->getClientOriginalName();
    //             $extension = $file->getClientOriginalExtension();
    //             $fileName  = md5(time()) . '.' . $extension;
    //             $file->storeAs('public/course-img', $fileName);
    //         // }
    //         $Trainer->image=$fileName;
    //     }
    //     $Trainer->name=$req->name;
    //     $Trainer->trainername=$req->trainername;
    //     $Trainer->trainerstudies=$req->trainerstudies;
    //     $Trainer->profession=$req->profession;
    //     $Trainer->description=$req->description;
    //     $Trainer->save();
    //     return redirect('add-trainer');
    // }
}
