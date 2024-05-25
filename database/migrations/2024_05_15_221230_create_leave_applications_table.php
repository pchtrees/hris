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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('leave_types_id')->constrained('leave_types')->onDelete('cascade');
            $table->string('details_of_leave', 255);
            $table->integer('num_of_working_days');
            $table->string('commutation', 20);
            $table->boolean('is_recommended');
            $table->string('approved_for', 255)->nullable();
            $table->string('disapproved_due_to', 255)->nullable();
            $table->foreignId('recommended_by')->constrained('users');
            $table->string('not_recommended_reason', 25)->nullable();
            $table->string('recommended_reason', 25)->nullable();
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_applications');
    }
};
