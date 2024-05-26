<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('extension')->nullable();
            $table->date('dob');
            $table->string('place_of_birth');
            $table->integer('sex');
            $table->integer('civil_status');
            $table->float('height');
            $table->float('weight');
            $table->string('blood_type');
            $table->string('gsis_id_no');
            $table->string('pag_ibig_id_no');
            $table->string('philhealth_id_no');
            $table->string('sss_no');
            $table->string('tin_no');
            $table->string('citizenship');
            $table->integer('dual_citizenship');
            $table->string('citizenship_country')->nullable();
            $table->string('mob_no');
            $table->string('residential_zip_code')->nullable();
            $table->string('residential_house_number')->nullable();
            $table->string('residential_street')->nullable();
            $table->string('residential_subdivision')->nullable();
            $table->string('residential_barangay')->nullable();
            $table->string('residential_city_municipality')->nullable();
            $table->string('residential_province')->nullable();
            $table->string('permanent_zip_code')->nullable();
            $table->string('agency_employee_no');
            $table->string('permanent_house_number')->nullable();
            $table->string('permanent_street')->nullable();
            $table->string('permanent_subdivision')->nullable();
            $table->string('permanent_barangay')->nullable();
            $table->string('permanent_city_municipality')->nullable();
            $table->string('permanent_province')->nullable();
            $table->foreignId('office_id')->constrained('offices')->onDelete('cascade');
            $table->string('tel_no');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
