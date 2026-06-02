<?php

namespace App\Http\Controllers;
use App\Models\CareerPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CareerPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $positions = CareerPosition::get();
            return view('adminpanel.career_positions', compact('positions'));
        } catch (\Throwable $th) {
            Log::error('Career Position Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'eligibility' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Career Position Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $careerPosition = new CareerPosition();
            $careerPosition->name = $request->name;
            $careerPosition->eligibility = $request->eligibility;
            $careerPosition->save();

            DB::commit();
            return redirect()->route('career-positions.index')->with('success', 'Career Position Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Career Position Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update team');
        try {
            $team = Team::findOrFail($id);
            return view('dashboard.teams.edit', compact('team'));
        } catch (\Throwable $th) {
            Log::error('Teams Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'eligibility' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $careerPosition = CareerPosition::findOrFail($id);
            $careerPosition->name = $request->name;
            $careerPosition->eligibility = $request->eligibility;
            $careerPosition->save();

            return redirect()->route('career-positions.index')->with('success', 'Career Position Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Career Position Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $careerPosition = CareerPosition::findOrFail($id);
            $careerPosition->delete();
            return redirect()->back()->with('success', 'Career Position Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Career Position Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    
    public function updateStatus(string $id)
    {
        try {
            $careerPosition = CareerPosition::findOrFail($id);
            $message = $careerPosition->status == '1' ? 'Career Position Deactivated Successfully' : 'Career Position Activated Successfully';
            if ($careerPosition->status == '1') {
                $careerPosition->status = '0';
                $careerPosition->save();
            } else {
                $careerPosition->status = '1';
                $careerPosition->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Career Position Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
