<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::updateOrCreate([
        	'role_id' => Role::where('slug', 'superAdmin')->first()->id,
        	'name' => 'Mohammad Jahidul Islam Jewel',
        	'email' => 'superadmin@mailnator.com',
        	'password' => Hash::make('12345678')
        ]);
    }
}
