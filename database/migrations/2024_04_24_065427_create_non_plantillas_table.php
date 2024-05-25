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
        Schema::create('nonplantillas', function (Blueprint $table) {
            $table->id();
            $table->string('position_title', 255);
            $table->float('daily_rate');
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('casual_or_jo');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonplantillas');
    }
};
