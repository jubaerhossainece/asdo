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
        $moduleAppAdmin = Module::updateOrCreate(['name' => 'Admin Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Access Admins',
            'slug' => 'app.admins.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Create Admin',
            'slug' => 'app.admins.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Show Admin',
            'slug' => 'app.admins.show'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Edit Admin',
            'slug' => 'app.admins.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppAdmin->id,
            'name' => 'Delete Admin',
            'slug' => 'app.admins.destroy'
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
        $moduleAppUser = Module::updateOrCreate(['name' => 'Member Management']);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Access Members',
        	'slug' => 'app.members.index'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Create Member',
        	'slug' => 'app.members.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppUser->id,
            'name' => 'Show Member',
            'slug' => 'app.members.show'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Edit Member',
        	'slug' => 'app.members.edit'
        ]);

        Permission::updateOrCreate([
        	'module_id' => $moduleAppUser->id,
        	'name' => 'Delete Member',
        	'slug' => 'app.members.destroy'
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

        //Campaign management permissions
        $moduleAppSlider = Module::updateOrCreate(['name' => 'Slider image Management']);

        Permission::updateOrCreate([
            'module_id' => $moduleAppSlider->id,
            'name' => 'Access Sliders',
            'slug' => 'app.sliders.index'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppSlider->id,
            'name' => 'Create Slider',
            'slug' => 'app.sliders.create'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppSlider->id,
            'name' => 'Show Slider',
            'slug' => 'app.sliders.show'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppSlider->id,
            'name' => 'Edit Slider',
            'slug' => 'app.sliders.edit'
        ]);

        Permission::updateOrCreate([
            'module_id' => $moduleAppSlider->id,
            'name' => 'Delete Slider',
            'slug' => 'app.sliders.destroy'
        ]);
    }
}
