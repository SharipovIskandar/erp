<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolClass;

class SchoolClassSeeder extends Seeder
{
    public function run()
    {
        SchoolClass::create([
            'class_name' => '10-A',
            'teacher_id' => 1,  // O'zgarishi mumkin
        ]);
    }
}
