<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonPlantilla extends Model
{
    use HasFactory;
    protected $fillable = [
        'office_id', 
        'plantilla_item_no', 
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
