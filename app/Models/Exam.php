<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'exam_date',
        'exam_grade',
        'created_at',
        'updated_at',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // Exam va Subject o'rtasidagi bog'lanish
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}

