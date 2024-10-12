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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->nullable()->constrained('users'); // O'quvchilar jadvalidan ID
            $table->foreignId('subject_id')->nullable()->constrained('subjects'); // Fanga bog'lanadi
            $table->enum('grade_type', ['class_activity', 'homework', 'exam']); // Baholash turi
            $table->float('grade'); // Bahosi
            $table->date('date'); // Baholash sanasi
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
