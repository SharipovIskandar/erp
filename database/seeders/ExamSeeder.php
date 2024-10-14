<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exam;

class ExamSeeder extends Seeder
{
    public function run()
    {
        Exam::create([
            'student_id' => 1,  // O'zgarishi mumkin
            'subject_id' => 1,  // O'zgarishi mumkin
            'exam_date' => now(),
            'exam_grade' => 85, // O'zgarishi mumkin
        ]);
    }
}
