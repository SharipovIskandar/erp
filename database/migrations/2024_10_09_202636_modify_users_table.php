<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('moonshine_users', function (Blueprint $table) {
            $table->dropForeign(['class_id']); // class_id ustunidagi chet el kalitini olib tashlash
            $table->dropColumn('class_id'); // class_id ustunini olib tashlash
            $table->dropColumn('enrolled_year'); // enrolled_year ustunini olib tashlash
            $table->dropColumn('first_name'); // first_name ustunini olib tashlash
            $table->dropColumn('last_name'); // last_name ustunini olib tashlash

            $table->string('name', 100); // name ustunini qaytarish (o'lchamni kerak bo'lsa o'zgartiring)
        });
    }

};
