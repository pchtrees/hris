<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $fillable = [
        'salary_rata',
        'pera_comm',
        'gov_share_hdmf',
        'personal_share_hdmf',
        'deduct_loans_with_tax_lbp',
        'deduct_loans_with_ibig_loan_housing',
        'deduct_loans_uoli_dbp',
        'deduct_loans_gfal_ibig_cal',
        'deduct_loans_producer_mp2',
        'earned_deduct',
    ];
}

