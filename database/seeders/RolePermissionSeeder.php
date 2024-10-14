<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Rollarni yaratish
        $teacherRole = Role::create(['name' => 'teacher']);
        $studentRole = Role::create(['name' => 'student']);

        // Huquqlarni yaratish
        $createPermission = Permission::create(['name' => 'create post']);
        $editPermission = Permission::create(['name' => 'edit post']);
        $deletePermission = Permission::create(['name' => 'delete post']);

        // Admin roliga barcha huquqlarni berish

        // Teacher faqat post yaratishi va tahrirlashi mumkin
        $teacherRole->givePermissionTo([$createPermission, $editPermission]);

        // Student faqat ko‘rishi mumkin (bu huquq alohida yozilmagan, faqat ko‘rish uchun controllerlarda check qilinadi)
    }
}

