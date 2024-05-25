<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'plantillas_id',
        'user_id', 
        'appointment_date', 
        'is_active', 
        'type'
    ];

    public function plantilla()
    {
        return $this->belongsTo(Plantilla::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
