<?php

namespace Database\Seeders;

// database/seeders/UserSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Insert admin user
        DB::table('users')->insert([
            'name' => 'deco',
            'email' => 'deco@gmail.com',
            'password' => Hash::make('deco1234'),
            'role' => 3, // Assuming role 3 represents admin
        ]);

        // Insert utilisateur user
        DB::table('users')->insert([
            'name' => 'utilisateur',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user1234'),
            'role' => 2, // Assuming role 2 represents utilisateur
        ]);
        // Insert utilisateur user
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'role' => 1, // Assuming role 2 represents utilisateur
        ]);
    }
}
