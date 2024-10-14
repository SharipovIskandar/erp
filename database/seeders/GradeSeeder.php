<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    public function run()
    {
        Grade::create([
            'student_id' => 1,  // O'zgarishi mumkin
            'subject_id' => 1,  // O'zgarishi mumkin
            'grade_type' => 'midterm',
            'grade' => 90,      // O'zgarishi mumkin
            'date' => now(),
        ]);
    }
}
