<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('non_plantillas', function (Blueprint $table) {
            $table->id();
            $table->string('position_title');
            $table->float('daily_rate');
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->foreignId('position_id')->constrained('positions');
            $table->string('employment_status');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('non_plantillas');
    }
};

