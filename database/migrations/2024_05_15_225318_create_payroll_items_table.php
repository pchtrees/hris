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
        Schema::create('payroll_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->integer('treasure_id');
            $table->foreignId('holiday_id')->nullable()->constrained('holidays')->onDelete('cascade');
            $table->date('date_created');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('cash_avail')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->integer('approved_user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_items');
    }
};
