<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MoonshineUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('moonshine_users')->insert([
            [
                'class_id' => 3, // Mavjud class_id
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'name' => 'Iskandar',
                'last_name' => 'Sharipov',
                'enrolled_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'class_id' => 3, // Mavjud class_id
                'email' => 'student@example.com',
                'password' => bcrypt('password'),
                'name' => 'O‘rmon',
                'last_name' => 'Jalilov',
                'enrolled_year' => 2023,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
