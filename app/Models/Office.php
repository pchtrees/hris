<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',                 
        'is_active'
    ];
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
