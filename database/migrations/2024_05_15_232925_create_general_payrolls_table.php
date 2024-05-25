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
        Schema::create('general_payrolls', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->float('monthly_salary');
            $table->float('salary_rata');
            $table->float('pera_comm');
            $table->float('gov_share_hdmf');
            $table->float('personal_share_hdmf');
            $table->float('deduct_loans_with_tax_lbp');
            $table->float('deduct_loans_with_ibig_loan_housing');
            $table->float('deduct_loans_uoli_dbp');
            $table->float('deduct_loans_gfal_ibig_cal');
            $table->float('deduct_loans_producer_mp2');
            $table->float('earned_deduct');
            $table->float('netpay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_payrolls');
    }
};
