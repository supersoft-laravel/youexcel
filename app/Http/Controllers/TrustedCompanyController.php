<?php

namespace App\Http\Controllers;

use App\Models\TrustedCompany;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TrustedCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $trustedCompanies = TrustedCompany::with('category')->get();
            $categories = CompanyCategory::where('is_active', '1')->get();
            return view('adminpanel.trustedCompanies.index', compact('trustedCompanies', 'categories'));
        } catch (\Throwable $th) {
            Log::error("Trusted Company Index Failed:" . $th->getMessage());
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
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:company_categories,id',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $lastPosition = TrustedCompany::max('position');
            $trustedCompany = new TrustedCompany();
            $trustedCompany->name = $request->name;
            $trustedCompany->category_id = $request->category_id;
            $trustedCompany->position = $lastPosition ? $lastPosition + 1 : 1;
            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logo_ext = $logo->getClientOriginalExtension();
                $logo_name = time() . '_logo.' . $logo_ext;

                $logo_path = 'uploads/trusted-companies';
                $logo->move(public_path($logo_path), $logo_name);
                $trustedCompany->logo = $logo_path . "/" . $logo_name;
            }
            $trustedCompany->save();

            DB::commit();
            return redirect()->route('trusted-companies.index')->with('success', 'Trusted Company Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Trusted Company Store Failed', ['error' => $th->getMessage()]);
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
            $trustedCompany = TrustedCompany::findOrFail($id);
            $categories = CompanyCategory::where('is_active', '1')->get();
            return view('adminpanel.trustedCompanies.edit', compact('trustedCompany','categories'));
        } catch (\Throwable $th) {
            Log::error("Trusted Company Edit Failed:" . $th->getMessage());
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
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:company_categories,id',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $trustedCompany = TrustedCompany::findOrFail($id);
            $trustedCompany->name = $request->name;
            $trustedCompany->category_id = $request->category_id;
            if ($request->hasFile('logo')) {
                if (isset($trustedCompany->logo) && File::exists(public_path($trustedCompany->logo))) {
                    File::delete(public_path($trustedCompany->logo));
                }
                $logo = $request->file('logo');
                $logo_ext = $logo->getClientOriginalExtension();
                $logo_name = time() . '_logo.' . $logo_ext;

                $logo_path = 'uploads/trusted-companies';
                $logo->move(public_path($logo_path), $logo_name);
                $trustedCompany->logo = $logo_path . "/" . $logo_name;
            }
            $trustedCompany->save();

            DB::commit();
            return redirect()->route('trusted-companies.index')->with('success', 'Trusted Company Updated Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Trusted Company Update Failed', ['error' => $th->getMessage()]);
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
            $trustedCompany = TrustedCompany::findOrFail($id);
            if (isset($trustedCompany->logo) && File::exists(public_path($trustedCompany->logo))) {
                File::delete(public_path($trustedCompany->logo));
            }
            $trustedCompany->delete();
            return redirect()->back()->with('success', 'Trusted Company Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Trusted Company Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function updateStatus(string $id)
    {
        try {
            $trustedCompany = TrustedCompany::findOrFail($id);
            $message = $trustedCompany->is_active == '1' ? 'Trusted Company Deactivated Successfully' : 'Trusted Company Activated Successfully';
            if ($trustedCompany->is_active == '1') {
                $trustedCompany->is_active = '0';
                $trustedCompany->save();
            } else {
                $trustedCompany->is_active = '1';
                $trustedCompany->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Trusted Company Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    public function shuffleShow()
    {
        try {
            $trustedCompanies = TrustedCompany::orderBy('position', 'asc')->get();
            return view('adminpanel.trustedCompanies.shuffle', compact('trustedCompanies'));
        } catch (\Throwable $th) {
            Log::error('Trusted Company Shuffle Show Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', $th->getMessage());
            throw $th;
        }
    }
    public function shuffleStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ids' => 'required|array',
            'ids.*' => 'exists:trusted_companies,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 404);
        }
        try {
            foreach ($request->ids as $index => $trustedCompanyId) {
                TrustedCompany::where('id', $trustedCompanyId)->update(['position' => $index + 1]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Trusted Company Shuffled Successfully!',
            ], 200);
        } catch (\Throwable $th) {
            Log::error('Trusted Company Shuffle Store Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Please try again later',
            ], 404);
            throw $th;
        }
    }
}
