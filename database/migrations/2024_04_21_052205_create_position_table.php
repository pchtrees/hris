<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('salary_grade');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // insert initial data into positions table
        DB::table('positions')->insert([
            ['title' => 'MGDH I', 'salary_grade' => 24, 'is_active' => true],
            ['title' => 'Sr. Admin. Asst. I', 'salary_grade' => 13, 'is_active' => true],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
