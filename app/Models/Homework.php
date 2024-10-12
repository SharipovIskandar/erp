<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'class_id',
        'task',
        'due_date',
        'created_at',
        'updated_at',
    ];

    // Homework va Subject o'rtasidagi bog'lanish
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    // Homework va SchoolClass o'rtasidagi bog'lanish
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
