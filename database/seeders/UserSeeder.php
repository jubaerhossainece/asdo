<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::updateOrCreate([
        // 	// 'role_id' => Role::where('slug', 'user')->first()->id,
        // 	'name' => 'Md. Jubaer Hossain',
        // 	'email' => 'user@example.com',
        // 	'password' => Hash::make('12345678')
        // ]);

        User::updateOrCreate([
            // 'role_id' => Role::where('slug', 'user')->first()->id,
            'name' => 'Md. Murad Hasan',
            'email' => 'murad@example.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
