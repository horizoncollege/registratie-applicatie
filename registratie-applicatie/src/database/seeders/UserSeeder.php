<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Jeroen de Wit',
            'email' => 'jeroen@tallandcollege.nl',
            'password' => Hash::make('12345678'),
            'company' => 'Talland college',
            'place' => 'Alkmaar',
            'contactperson' => 'Michel Ranzijn',
            'function' => 'Docent',
            'phone' => '0612345678',
            'website' => 'https://www.tallandcollege.com',
            'activity' => 'activiteit',
            'workers' => '5',
            'kvk_number' => '12345678',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
