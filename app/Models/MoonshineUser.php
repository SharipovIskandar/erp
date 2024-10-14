<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;

class MoonshineUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'moonshine_user_role_id',
        'email',
        'password',
        'avatar',
        'name',
        'last_name',
        'class_id',
        'enrolled_year',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Userning rolini olish
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'moonshine_user_role_id');
    }

    /**
     * Userning sinfini olish
     */
    // App\Models\MoonshineUser.php

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id'); // class_id ga mos keluvchi 'SchoolClass' modelini aniqlang
    }


    /**
     * Userning ishtirok etgan imtihonlarini olish
     */
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
