<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'view kpi dashboard']);

        Permission::create(['name' => 'view course']);
        Permission::create(['name' => 'create course']);
        Permission::create(['name' => 'update course']);
        Permission::create(['name' => 'delete course']);

        Permission::create(['name' => 'view trainer']);
        Permission::create(['name' => 'create trainer']);
        Permission::create(['name' => 'update trainer']);
        Permission::create(['name' => 'delete trainer']);

        Permission::create(['name' => 'view event']);
        Permission::create(['name' => 'create event']);
        Permission::create(['name' => 'update event']);
        Permission::create(['name' => 'delete event']);

        Permission::create(['name' => 'view trusted company']);
        Permission::create(['name' => 'create trusted company']);
        Permission::create(['name' => 'update trusted company']);
        Permission::create(['name' => 'delete trusted company']);

        Permission::create(['name' => 'view webinar']);
        Permission::create(['name' => 'create webinar']);
        Permission::create(['name' => 'update webinar']);
        Permission::create(['name' => 'delete webinar']);

        Permission::create(['name' => 'view gallery']);
        Permission::create(['name' => 'create gallery']);
        Permission::create(['name' => 'update gallery']);
        Permission::create(['name' => 'delete gallery']);

        Permission::create(['name' => 'view calendar']);
        Permission::create(['name' => 'create calendar']);
        Permission::create(['name' => 'update calendar']);
        Permission::create(['name' => 'delete calendar']);

        Permission::create(['name' => 'view blog']);
        Permission::create(['name' => 'create blog']);
        Permission::create(['name' => 'update blog']);
        Permission::create(['name' => 'delete blog']);

        Permission::create(['name' => 'view career position']);
        Permission::create(['name' => 'create career position']);
        Permission::create(['name' => 'update career position']);
        Permission::create(['name' => 'delete career position']);

        Permission::create(['name' => 'view career connect']);
        Permission::create(['name' => 'create career connect']);
        Permission::create(['name' => 'update career connect']);
        Permission::create(['name' => 'delete career connect']);

        Permission::create(['name' => 'view corporate course']);
        Permission::create(['name' => 'create corporate course']);
        Permission::create(['name' => 'update corporate course']);
        Permission::create(['name' => 'delete corporate course']);

        Permission::create(['name' => 'view popup']);
        Permission::create(['name' => 'create popup']);
        Permission::create(['name' => 'update popup']);
        Permission::create(['name' => 'delete popup']);

        Permission::create(['name' => 'view lead form']);
        Permission::create(['name' => 'delete lead form']);

        Permission::create(['name' => 'view demo confirmation form']);
        Permission::create(['name' => 'delete demo confirmation form']);

        Permission::create(['name' => 'view corporate lead']);
        Permission::create(['name' => 'delete corporate lead']);

        Permission::create(['name' => 'view certificate request form']);
        Permission::create(['name' => 'delete certificate request form']);

        Permission::create(['name' => 'view scholarship request form']);
        Permission::create(['name' => 'delete scholarship request form']);

        Permission::create(['name' => 'view registration form']);
        Permission::create(['name' => 'delete registration form']);

        Permission::create(['name' => 'view feedback form']);
        Permission::create(['name' => 'delete feedback form']);

        Permission::create(['name' => 'view one minute feedback form']);
        Permission::create(['name' => 'delete one minute feedback form']);

        Permission::create(['name' => 'view support form']);
        Permission::create(['name' => 'delete support form']);

        Permission::create(['name' => 'view careers form']);
        Permission::create(['name' => 'delete careers form']);

        Permission::create(['name' => 'view get in touch form']);
        Permission::create(['name' => 'delete get in touch form']);

        Permission::create(['name' => 'view navttc registration form']);
        Permission::create(['name' => 'delete navttc registration form']);

        Permission::create(['name' => 'view navttc enquiry form']);
        Permission::create(['name' => 'delete navttc enquiry form']);

        Permission::create(['name' => 'view bbshrrdb registration form']);
        Permission::create(['name' => 'delete bbshrrdb registration form']);

        Permission::create(['name' => 'view bbshrrdb enquiry form']);
        Permission::create(['name' => 'delete bbshrrdb enquiry form']);

        // Create Roles
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $supportRole = Role::create(['name' => 'support-team']);
        $admissionsRole = Role::create(['name' => 'admissions-team']);
        $maketingRole = Role::create(['name' => 'maketing-team']);

        // give all permissions to super-admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $superAdminRole->givePermissionTo($allPermissionNames);

        // Create User and assign Role to it.

        $superAdminUser = User::first();

        $superAdminUser->assignRole($superAdminRole);
    }
}
