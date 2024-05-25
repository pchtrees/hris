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
        'offices_id',
        'user_id',
        'casual_or_jo',
        'is_active',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
