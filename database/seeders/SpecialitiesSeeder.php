<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define an array of specialties
        $specialities = [
            ['name' => 'Cuisine'],
            ['name' => 'Salon'],
            ['name' => 'Bureau'],
            ['name' => 'Chambres'],
            // Add more specialties as needed
        ];

        // Insert the specialties into the database using the DB facade
        DB::table('specialities')->insert($specialities);
    }
}
