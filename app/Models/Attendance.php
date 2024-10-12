<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'attendance_date',
        'status',
        'created_at',
        'updated_at'
    ];

    // Attendance va User o'rtasidagi bog'lanish
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    // Attendance va Subject o'rtasidagi bog'lanish
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
