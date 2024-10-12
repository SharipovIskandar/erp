<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->enum('role', ['super_admin', 'teacher', 'student']);
            $table->dropColumn('name');
            $table->foreignId('class_id')->nullable()->constrained('school_classes')->nullOnDelete();
            $table->year('enrolled_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['class_id']);
            $table->dropColumn('class_id');
            $table->dropColumn('enrolled_year');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('role'); // role ustunini olib tashlash

            $table->string('name', 100); // name ustunini qaytarish (o'lchamni kerak bo'lsa o'zgartiring)
        });
    }
};
