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
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (!in_array($model->employment_status, [
                'Casual', 
                'Coterminous', 
                'Contractual', 
                'Job Order', 
                'Consultancy/Contract of service'
            ])) {
                throw new \InvalidArgumentException("Invalid employment status value.");
            }
        });
    }
}
