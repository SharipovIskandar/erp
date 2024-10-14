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
        Schema::table('attendances', function (Blueprint $table) {
            // Avval eski foreign keyni o'chirish kerak
            $table->dropForeign(['student_id']);

            // Keyin student_id ustunini moonshine_users jadvaliga bog'lash
            $table->foreign('student_id')->references('id')->on('moonshine_users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            // Avval yangi foreign keyni o'chirish
            $table->dropForeign(['student_id']);

            // Keyin student_id ni users jadvaliga qaytarish
            $table->foreign('student_id')->references('id')->on('users')->nullOnDelete();
        });
    }
};
