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
        Schema::table('school_classes', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']); // users bilan bo'lgan foreign key'ni o'chirish

            $table->foreign('teacher_id')->references('id')->on('moonshine_users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_classes', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']); // moonshine_users bilan bo'lgan foreign key'ni o'chirish

            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('set null');
        });
    }
};
