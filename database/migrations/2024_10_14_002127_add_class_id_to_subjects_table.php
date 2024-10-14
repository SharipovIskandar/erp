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
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreignId('class_id')->nullable()->constrained('school_classes'); // class_id ustunini qo'shish
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropForeign(['class_id']); // Agar mavjud bo'lsa, cheklovni olib tashlash
            $table->dropColumn('class_id'); // class_id ustunini olib tashlash
        });
    }
};
