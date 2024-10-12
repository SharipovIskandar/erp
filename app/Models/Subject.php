<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher_id',
        'class_id',
        'created_at',
        'updated_at'
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'subject_id');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class, 'subject_id');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class, 'subject_id');
    }
}
