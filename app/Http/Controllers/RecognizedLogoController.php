<?php

namespace App\Http\Controllers;

use App\Models\RecognizedLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class RecognizedLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $recognizedLogos = RecognizedLogo::get();
            return view('adminpanel.recognizedLogos.index', compact('recognizedLogos'));
        } catch (\Throwable $th) {
            Log::error("Recognized Logo Index Failed:" . $th->getMessage());
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $lastPosition = RecognizedLogo::max('position');
            $recognizedLogo = new RecognizedLogo();
            $recognizedLogo->title = $request->title;
            $recognizedLogo->description = $request->description;
            $recognizedLogo->position = $lastPosition ? $lastPosition + 1 : 1;
            if ($request->hasFile('image')) {
                $logo = $request->file('image');
                $logo_ext = $logo->getClientOriginalExtension();
                $logo_name = time() . '_logo.' . $logo_ext;

                $logo_path = 'uploads/recognized-logos';
                $logo->move(public_path($logo_path), $logo_name);
                $recognizedLogo->image = $logo_path . "/" . $logo_name;
            }
            $recognizedLogo->save();

            DB::commit();
            return redirect()->route('recognized-logos.index')->with('success', 'Recognized Logo Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Recognized Logo Store Failed', ['error' => $th->getMessage()]);
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
            $recognizedLogo = RecognizedLogo::findOrFail($id);
            return view('adminpanel.recognizedLogos.edit', compact('recognizedLogo'));
        } catch (\Throwable $th) {
            Log::error("Recognized Logo Edit Failed:" . $th->getMessage());
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $recognizedLogo = RecognizedLogo::findOrFail($id);
            $recognizedLogo->title = $request->title;
            $recognizedLogo->description = $request->description;
            if ($request->hasFile('image')) {
                if (isset($recognizedLogo->image) && File::exists(public_path($recognizedLogo->image))) {
                    File::delete(public_path($recognizedLogo->image));
                }
                $logo = $request->file('image');
                $logo_ext = $logo->getClientOriginalExtension();
                $logo_name = time() . '_logo.' . $logo_ext;

                $logo_path = 'uploads/recognized-logos';
                $logo->move(public_path($logo_path), $logo_name);
                $recognizedLogo->image = $logo_path . "/" . $logo_name;
            }
            $recognizedLogo->save();

            DB::commit();
            return redirect()->route('recognized-logos.index')->with('success', 'Recognized Logo Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Recognized Logo Update Failed', ['error' => $th->getMessage()]);
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
            $recognizedLogo = RecognizedLogo::findOrFail($id);
            if (isset($recognizedLogo->image) && File::exists(public_path($recognizedLogo->image))) {
                File::delete(public_path($recognizedLogo->image));
            }
            $recognizedLogo->delete();
            return redirect()->back()->with('success', 'Recognized Logo Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Recognized Logo Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function updateStatus(string $id)
    {
        try {
            $recognizedLogo = RecognizedLogo::findOrFail($id);
            $message = $recognizedLogo->is_active == '1' ? 'Recognized Logo Deactivated Successfully' : 'Recognized Logo Activated Successfully';
            if ($recognizedLogo->is_active == '1') {
                $recognizedLogo->is_active = '0';
                $recognizedLogo->save();
            } else {
                $recognizedLogo->is_active = '1';
                $recognizedLogo->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Recognized Logo Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function shuffleShow()
    {
        try {
            $recognizedLogos = RecognizedLogo::orderBy('position', 'asc')->get();
            return view('adminpanel.recognizedLogos.shuffle', compact('recognizedLogos'));
        } catch (\Throwable $th) {
            Log::error('Recognized Logo Shuffle Show Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    public function shuffleStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ids' => 'required|array',
            'ids.*' => 'exists:recognized_logos,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 404);
        }
        try {
            foreach ($request->ids as $index => $recognizedLogoId) {
                RecognizedLogo::where('id', $recognizedLogoId)->update(['position' => $index + 1]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Recognized Logo Shuffled Successfully!',
            ], 200);
        } catch (\Throwable $th) {
            Log::error('Recognized Logo Shuffle Store Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Please try again later',
            ], 404);
            throw $th;
        }
    }
}
