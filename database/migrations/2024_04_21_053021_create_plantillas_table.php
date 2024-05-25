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
        Schema::create('plantillas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->string('plantilla_item_no', 255);
            $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
            $table->integer('salary_grade');
            $table->float('anual_salary');
            $table->integer('step');
            $table->date('date_of_original_appointment');
            $table->date('date_of_last_promotion');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantillas');
    }
};
