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
        Schema::create('homework', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->nullable()->constrained('subjects'); // Fanga bog'lanadi
            $table->foreignId('class_id')->nullable()->constrained('school_classes'); // Qaysi sinfga berilgan
            $table->text('task'); // Uy vazifasi
            $table->date('due_date'); // Muddati
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homework');
    }
};
