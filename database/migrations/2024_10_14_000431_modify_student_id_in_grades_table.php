<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('grades', function (Blueprint $table) {
            // Avvalgi foreign key ni o'chiramiz
            $table->dropForeign(['student_id']);

            // Yangi foreign key bog'laymiz 'moonshine_users' jadvaliga
            $table->foreign('student_id')->references('id')->on('moonshine_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('grades', function (Blueprint $table) {
            // 'moonshine_users' ga bo'lgan foreign key ni o'chirib, eski holatga qaytaramiz
            $table->dropForeign(['student_id']);

            // Eski foreign keyni 'users' jadvaliga bog'laymiz
            $table->foreign('student_id')->references('id')->on('users')->onDelete('set null');
        });
    }
};
