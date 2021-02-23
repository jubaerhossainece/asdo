<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Permission;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = Permission::all();
 			   	
      Role::updateOrCreate([
      	'name' => 'Super Admin',
      	'slug' => 'superAdmin',
      	'deletable' => false
      ])->permissions()->sync($adminPermissions->pluck('id'));

      Role::updateOrCreate([
        'name' => 'Admin',
        'slug' => 'admin',
        'deletable' => false
      ]);

      Role::updateOrCreate([
        'name' => 'Moderator',
        'slug' => 'moderator',
        'deletable' => true
      ]);

      Role::updateOrCreate([
      	'name' => 'User',
      	'slug' => 'user',
      	'deletable' => true
      ]);
    }
}
