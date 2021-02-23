<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Module;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dashboard management permissions
        $moduleAppDashboard = Module::updateOrCreate(['name' => 'Admin Dashboard']);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppDashboard->id,
        	'name' => 'Access Dashboard',
        	'slug' => 'app.dashboard' 
        ]);

        //Role management permissions
        $moduleAppRole = Module::updateOrCreate(['name' => 'Role Management']);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppRole->id,
        	'name' => 'Access Role',
        	'slug' => 'app.roles.index'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppRole->id,
        	'name' => 'Create Role',
        	'slug' => 'app.roles.create'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppRole->id,
        	'name' => 'Edit Role',
        	'slug' => 'app.roles.edit'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppRole->id,
        	'name' => 'Delete Role',
        	'slug' => 'app.roles.destroy'
        ]);

        //User management permissions
        $moduleAppUser = Module::updateOrCreate(['name' => 'User Management']);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Access User',
        	'slug' => 'app.users.index'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Create User',
        	'slug' => 'app.users.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Show User',
            'slug' => 'app.users.show'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Edit User',
        	'slug' => 'app.users.edit'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Delete User',
        	'slug' => 'app.users.destroy'
        ]);
    }
}
