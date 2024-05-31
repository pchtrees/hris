<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Office;
use App\Models\Position;
use App\Models\Employee;

class Plantilla extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_id',
        'plantilla_item_no',
        'position_id',
        'salary_grade',
        'anual_salary',
        'step',
        'date_of_original_appointment',
        'date_of_last_promotion',
        'is_active',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    
}
