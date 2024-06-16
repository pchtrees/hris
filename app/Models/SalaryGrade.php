<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plantilla;

class SalaryGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade',
        'step',
        'value'
    ];
    public function plantillas()
    {
        return $this->hasOne(Plantilla::class);
    }
}
