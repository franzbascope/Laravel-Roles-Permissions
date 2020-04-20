<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin_user = User::create(['name' => 'admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin')]);
        User::create(['name' => 'test', 'email' => 'test@gmail.com', 'password' => Hash::make('admin')]);
        $role = Role::create(['name' => 'super_admin']);
        $permission_array = [];
        array_push($permission_array, Permission::create(['name' => 'create_books']));
        array_push($permission_array, Permission::create(['name' => 'edit_books']));
        array_push($permission_array, Permission::create(['name' => 'delete_books']));
        array_push($permission_array, Permission::create(['name' => 'view_books']));
        array_push($permission_array, Permission::create(['name' => 'reserve_books']));

        array_push($permission_array, Permission::create(['name' => 'create_users']));
        array_push($permission_array, Permission::create(['name' => 'edit_users']));
        array_push($permission_array, Permission::create(['name' => 'delete_users']));
        array_push($permission_array, Permission::create(['name' => 'view_users']));

        array_push($permission_array, Permission::create(['name' => 'create_roles']));
        array_push($permission_array, Permission::create(['name' => 'edit_roles']));
        array_push($permission_array, Permission::create(['name' => 'delete_roles']));
        array_push($permission_array, Permission::create(['name' => 'view_roles']));
        $super_admin_user->assignRole($role->id);
        $role->syncPermissions($permission_array);
    }
}
