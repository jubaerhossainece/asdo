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
        	'name' => 'Access Roles',
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
        	'name' => 'Access Users',
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


        //Volunteer management permissions
        $moduleAppVolunteer = Module::updateOrCreate(['name' => 'Volunteer Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppVolunteer->id,
            'name' => 'Access Volunteers',
            'slug' => 'app.volunteers.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppVolunteer->id,
            'name' => 'Create Volunteer',
            'slug' => 'app.volunteers.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppVolunteer->id,
            'name' => 'Show Volunteer',
            'slug' => 'app.volunteers.show'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppVolunteer->id,
            'name' => 'Edit Volunteer',
            'slug' => 'app.volunteers.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppVolunteer->id,
            'name' => 'Delete Volunteer',
            'slug' => 'app.volunteers.destroy'
        ]);

        //Project management permissions
        $moduleAppProject = Module::updateOrCreate(['name' => 'Project Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProject->id,
            'name' => 'Access Projects',
            'slug' => 'app.projects.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProject->id,
            'name' => 'Create Project',
            'slug' => 'app.projects.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProject->id,
            'name' => 'Show Project',
            'slug' => 'app.projects.show'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProject->id,
            'name' => 'Edit Project',
            'slug' => 'app.projects.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppProject->id,
            'name' => 'Delete Project',
            'slug' => 'app.projects.destroy'
        ]);


        //Campaign management permissions
        $moduleAppCampaign = Module::updateOrCreate(['name' => 'Campaign Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppCampaign->id,
            'name' => 'Access Campaigns',
            'slug' => 'app.campaigns.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppCampaign->id,
            'name' => 'Create Campaign',
            'slug' => 'app.campaigns.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppCampaign->id,
            'name' => 'Show Campaign',
            'slug' => 'app.campaigns.show'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppCampaign->id,
            'name' => 'Edit Campaign',
            'slug' => 'app.campaigns.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppCampaign->id,
            'name' => 'Delete Campaign',
            'slug' => 'app.campaigns.destroy'
        ]);
    }
}
