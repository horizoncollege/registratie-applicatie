<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forms')->insert([
            [
                'id' => 21,
                'name' => 'FieldlabHub',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Jeffry Visser',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'j.visser2@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:17:09'),
                'updated_at' => Carbon::parse('2024-07-04 04:17:09'),
                'status' => 'pending'
            ],
            [
                'id' => 22,
                'name' => 'Literatuurlijst app',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Onno Timmermans',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'o.t.timmermans@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:18:03'),
                'updated_at' => Carbon::parse('2024-07-04 04:18:03'),
                'status' => 'pending'
            ],
            [
                'id' => 23,
                'name' => 'My journey through the lens',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Eleni Petousia',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'e.patousia@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:18:55'),
                'updated_at' => Carbon::parse('2024-07-04 04:18:55'),
                'status' => 'pending'
            ],
            [
                'id' => 24,
                'name' => 'Private library',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Eleni Petousia',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'e.patousia@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:19:31'),
                'updated_at' => Carbon::parse('2024-07-04 04:19:31'),
                'status' => 'pending'
            ],
            [
                'id' => 25,
                'name' => 'Appeltaartrecensie app',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Onno Timmermans',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'o.t.timmermans@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:20:08'),
                'updated_at' => Carbon::parse('2024-07-04 04:20:08'),
                'status' => 'pending'
            ],
            [
                'id' => 26,
                'name' => 'Cookbook corner',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Eleni Petousia',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'e.patousia@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:20:56'),
                'updated_at' => Carbon::parse('2024-07-04 04:20:56'),
                'status' => 'pending'
            ],
            [
                'id' => 27,
                'name' => 'MaaltijdPlanner',
                'company' => 'Talland College',
                'place' => 'Alkmaar',
                'contactperson' => 'Jeffry Visser',
                'function' => 'Functie',
                'phone' => '0612345678',
                'email' => 'j.visser2@horizoncollege.nl',
                'website' => 'https://talland.nl',
                'activity' => 'Bedrijfsactiviteit',
                'workers' => '20',
                'kvk_number' => '1934768162',
                'fileInput' => NULL,
                'created_at' => Carbon::parse('2024-07-04 04:21:29'),
                'updated_at' => Carbon::parse('2024-07-04 04:46:10'),
                'status' => 'approved'
            ],
        ]);
    }
}
