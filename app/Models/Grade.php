<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'grade_type',
        'grade',
        'date',
        'created_at',
        'updated_at',
    ];

    // Grade va User o'rtasidagi bog'lanish
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // Grade va Subject o'rtasidagi bog'lanish
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}

