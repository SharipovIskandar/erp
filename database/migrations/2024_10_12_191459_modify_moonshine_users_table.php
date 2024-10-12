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
        Schema::table('moonshine_users', function (Blueprint $table) {
            $table->string('first_name', 50);
            $table->string('last_name', 50);
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
        Schema::table('moonshine_users', function (Blueprint $table) {
            //
        });
    }
};
