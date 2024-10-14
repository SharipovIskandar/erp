<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'teacher_id',
        'created_at',
        'updated_at',
    ];

    public function students()
    {
        return $this->hasMany(User::class, 'class_id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'class_id');
    }
    public function moonshineUsers()
    {
        return $this->hasMany(MoonshineUser::class, 'class_id');
    }
}

