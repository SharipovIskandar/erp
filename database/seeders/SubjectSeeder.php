<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        Subject::create([
            'name' => 'Mathematics',
            'teacher_id' => 1,  // O'zgarishi mumkin
            'class_id' => 3,    // O'zgarishi mumkin
        ]);
    }
}
