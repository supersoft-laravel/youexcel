<?php

namespace App\Http\Controllers\RolePermission;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view role');
        try {
            $adminRoles = Role::whereIn('name', ['super-admin', 'admin'])->get();
            $allRoles = Role::get();
            $permissions = Permission::get();
            return view('adminpanel.role-permission.role.index', compact('adminRoles','allRoles','permissions'));
        } catch (\Throwable $th) {
            Log::error("Roles Index Failed:" . $th->getMessage());
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
        $this->authorize('create role');
        try {
            $permissions = Permission::get();
            return view('adminpanel.role-permission.role.create', compact('permissions'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error("Roles Create Failed:" . $th->getMessage());
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
        $this->authorize('create role');
        $validate = Validator::make($request->all(), [
            'role_name' => 'required|string|max:255|unique:roles,name',
            'permission' => 'nullable|array',
            'permission.*' => 'exists:permissions,name',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $slug = str_replace(' ', '-', strtolower($request->role_name));
            $role = new Role();
            $role->name = $slug;
            $role->save();

            if($request->permission)
            {
                $role->syncPermissions($request->permission);
            }

            DB::commit();
            return redirect()->route('roles.index')->with('success', 'Role created successfully');
        } catch (\Throwable $th) {
            // throw $th;
            DB::rollBack();
            Log::error("Roles store Failed:" . $th->getMessage());
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
        $this->authorize('update role');
        try {
            $role = Role::findOrFail($id);
            $permissions = Permission::get();
            $rolePermissions = DB::table('role_has_permissions')
                ->join('permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
                ->where('role_has_permissions.role_id', $role->id)
                ->pluck('permissions.name')
                ->all();
                
            return view('adminpanel.role-permission.role.edit', compact('role', 'rolePermissions', 'permissions'));

        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Roles Edit Failed:" . $th->getMessage());
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
        $this->authorize('update role');
        $validate = Validator::make($request->all(), [
            'role_name' => 'required|string|max:255|unique:roles,name,'. $id,
            'permission' => 'nullable|array',
            'permission.*' => 'exists:permissions,name',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $slug = str_replace(' ', '-', strtolower($request->role_name));
            $role = Role::findOrFail($id);
            $role->name = $slug;
            $role->save();

            if($request->permission)
            {
                $role->syncPermissions($request->permission);
            }

            DB::commit();
            return redirect()->route('roles.index')->with('success', 'Role updated successfully');
        } catch (\Throwable $th) {
            // throw $th;
            DB::rollBack();
            Log::error("Roles update Failed:" . $th->getMessage());
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
        $this->authorize('delete role');
        try {
            $role = Role::has('users')->find($id);
            if(is_null($role)){
                Role::find($id)->delete();
                return redirect()->route('roles.index')->with('success','Role deleted successfully');
            }else{
                return redirect()->route('roles.index')->with('error','You cannot delete a role that has users');
            }
        } catch (\Throwable $th) {
            // throw $th;
            Log::error("Roles destroy Failed:" . $th->getMessage());
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
        }
    }
}
