<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MoonshineUser extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'moonshine_user_role_id', // ro'yxatdan o'tgan foydalanuvchi roli
        'email',                  // foydalanuvchi emaili
        'password',               // foydalanuvchi paroli
        'avatar',                 // foydalanuvchi rasmi
        'name',                   // foydalanuvchi ismi
        'last_name',              // foydalanuvchi familiyasi
        'class_id',               // sinf identifikatori
        'enrolled_year',          // ro'yxatdan o'tgan yili
        'remember_token',         // parolni eslab qolish uchun token
        'created_at',             // yaratilgan sana
        'updated_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
