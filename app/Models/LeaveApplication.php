<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'leave_types_id',
        'details_of_leave',
        'num_of_working_days',
        'commutation',
        'is_recommended',
        'approved_for',
        'disapproved_due_to',
        'recommended_by',
        'not_recommended_reason',
        'recommended_reason',
        'office_id',
    ];
}
