<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Office;
use App\Models\User;
use App\Models\Plantilla;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname', 
        'mname', 
        'lname', 
        'extension', // optional (Jr., Sr.)
        'dob', // Date of Birth
        'place_of_birth', // Place of Birth
        'sex', // 1 = male, 2 = female (integer)
        'civil_status', // 1 = single, 2 = married, 3 = widowed, 4 = separated, 5 = divorced (integer)
        'height', // height in cm
        'weight', // weight in kg
        'blood_type', //  1 = A, 2 = B, 3 = AB, 4 = O (integer)
        'gsis_id_no', 
        'pag_ibig_id_no', 
        'philhealth_id_no', 
        'sss_no', 
        'tin_no', 
        'agency_employee_no',
        'citizenship', 
        'dual_citizenship', // 1 = Yes, 0 = No (integer)
        'citizenship_country', // country of dual citizenship
        'mob_no', 
        'residential_add', 
        'residential_zip_code', 
        'residential_house_number', 
        'residential_street', 
        'residential_subdivision', 
        'residential_barangay', 
        'residential_city_municipality', 
        'residential_province', 
        'permanent_add', 
        'permanent_zip_code', 
        'permanent_house_number', 
        'permanent_street', 
        'permanent_subdivision', 
        'permanent_barangay', 
        'permanent_city_municipality', 
        'permanent_province', 
        'office_id',
        'tel_no',
        'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function office()
    {
        return $this->belongsTo(Office::class);
    }
    public function plantilla()
    {
        return $this->hasOne(Plantilla::class);
    }
    
}
