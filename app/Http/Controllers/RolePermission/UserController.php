<?php

namespace App\Http\Controllers\RolePermission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view user');
        try {
            $users = User::get();
            $totalUsers = User::count();
            $totalDeactivatedUsers = User::where('is_active', 'inactive')->count();
            $totalActiveUsers = User::where('is_active', 'active')->count();
            return view('adminpanel.role-permission.users.index', compact('users', 'totalUsers', 'totalDeactivatedUsers', 'totalActiveUsers'));
        } catch (\Throwable $th) {
            // Handle the exception
            // throw $th;
            Log::error("User Index Failed:" . $th->getMessage());
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
        $this->authorize('create user');
        try {
            $roles = Role::get();
            return view('adminpanel.role-permission.users.create', compact('roles'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("User Create Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create user');
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'role' => 'required|exists:roles,name',
            'password' => 'required|string|min:6',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->email_verified_at = now();
            $user->save();
            
            $user->syncRoles($request->role);
            DB::commit();

            return redirect()->route('users.index')->with('success', 'User created successfully');
        } catch (\Throwable $th) {
            // throw $th;
            DB::rollback();
            Log::error("User Create Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
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
        $this->authorize('update user');
        try {
            $roles = Role::get();
            $user = User::findOrFail($id);
            return view('adminpanel.role-permission.users.edit', compact('roles', 'user'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("User Edit Failed:" . $th->getMessage());
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
        $this->authorize('update user');
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'role' => 'required|exists:roles,name',
            'password' => 'nullable|string|min:6',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();

            $user = User::findOrFail($id);
            $user->name = $request->name;
            if($request->password) { 
                $user->password = Hash::make($request->password);
            }
            $user->save();
            
            $user->syncRoles($request->role);
            DB::commit();

            return redirect()->route('users.index')->with('success', 'User updated successfully');
        } catch (\Throwable $th) {
            // throw $th;
            DB::rollback();
            Log::error("User Update Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
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
        $this->authorize('delete user');
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->back()->with('success', 'Account Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Account Deletion Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    
    /**
     * Update status of the specified resource from storage.
     */
    public function updateStatus(string $id)
    {
        $this->authorize('update user');
        try {
            $user = User::findOrFail($id);
            $message = $user->is_active == 'active' ? 'Account Deactivated Successfully' : 'Account Activated Successfully';
            if ($user->is_active == 'active') {
                $user->is_active = 'inactive';
                $user->save();
            } else {
                $user->is_active = 'active';
                $user->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Account Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
