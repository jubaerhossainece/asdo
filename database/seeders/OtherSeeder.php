<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Other;

class OtherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Other::updateOrCreate([
        	'name' => 'A positive (A+)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'A negative (A-)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'B positive (B+)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'B negative (B-)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'AB positive (AB+)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'AB negative (AB-)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'O positive (O+)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'O negative (O-)',
        	'category' => 'blood group'
        ]);

        Other::updateOrCreate([
        	'name' => 'Islam',
        	'category' => 'religion'
        ]);

        Other::updateOrCreate([
        	'name' => 'Hinduism',
        	'category' => 'religion'
        ]);

        Other::updateOrCreate([
        	'name' => 'Christianity',
        	'category' => 'religion'
        ]);

        Other::updateOrCreate([
        	'name' => 'Buddhism',
        	'category' => 'religion'
        ]);

        Other::updateOrCreate([
        	'name' => 'Other',
        	'category' => 'religion'
        ]);

        Other::updateOrCreate([
        	'name' => 'Member',
        	'category' => 'member type'
        ]);

        Other::updateOrCreate([
        	'name' => 'Donar',
        	'category' => 'member type'
        ]);

        Other::updateOrCreate([
        	'name' => 'Some',
        	'category' => 'member type'
        ]);

        Other::updateOrCreate([
        	'name' => 'Other',
        	'category' => 'member type'
        ]);
    }
}
