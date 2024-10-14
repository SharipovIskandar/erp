<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Homework;

class HomeworkSeeder extends Seeder
{
    public function run()
    {
        Homework::create([
            'subject_id' => 1,  // O'zgarishi mumkin
            'class_id' => 1,    // O'zgarishi mumkin
            'task' => 'Math homework',
            'due_date' => now()->addDays(7), // 1 hafta o'tgach
        ]);
    }
}
