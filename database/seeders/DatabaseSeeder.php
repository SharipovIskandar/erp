<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            MoonshineUserSeeder::class,
            SchoolClassSeeder::class,
            SubjectSeeder::class,
            HomeworkSeeder::class,
            GradeSeeder::class,
            ExamSeeder::class,
        ]);
    }


}
