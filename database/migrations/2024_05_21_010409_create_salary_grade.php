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
        Schema::create('salary_grade', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->float('step_1');
            $table->float('step_2');
            $table->float('step_3');
            $table->float('step_4');
            $table->float('step_5');
            $table->float('step_6');
            $table->float('step_7');
            $table->float('step_8');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_grade');
    }
};
