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
        Schema::dropIfExists('exams'); // Eski jadvalni o'chirish

        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->nullable()->constrained('moonshine_users'); // O'quvchilar jadvalidan ID
            $table->foreignId('subject_id')->nullable()->constrained('subjects'); // Fanga bog'lanadi
            $table->date('exam_date'); // Imtihon sanasi
            $table->float('exam_grade'); // Imtihon bahosi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
