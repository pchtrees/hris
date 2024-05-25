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
        Schema::create('leave_credits', function (Blueprint $table) {
            $table->id();
            $table->date('period');
            $table->float('particulars');
            $table->foreignId('leave_types_id')->constrained('leave_types')->onDelete('cascade');
            $table->float('earned');
            $table->float('abs_wp');
            $table->float('bal');
            $table->float('abs_wop');
            $table->date('date_taken_leave');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_credits');
    }
};
