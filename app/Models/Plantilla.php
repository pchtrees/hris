<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Office;
use App\Models\Position;
use App\Models\Employee;
use App\Models\SalaryGrade;

class Plantilla extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'office_id',
        'plantilla_item_no',
        'position_id',
        'salary_grade_id',
        'date_of_original_appointment',
        'date_of_last_promotion',
        'is_active',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    
    public function salaryGrade()
    {
        return $this->belongsTo(SalaryGrade::class);
    }
    
}
