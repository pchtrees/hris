<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonPlantilla extends Model
{
    use HasFactory;
    protected $fillable = [
        'position_title',
        'daily_rate',
        'office_id', 
        'position_id', 
        'employment_status',
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
