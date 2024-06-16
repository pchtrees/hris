<?php

namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use App\Models\SalaryGrade;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SalaryGradeController extends Controller
{
    public function index()
    {
        $salaryGrades = SalaryGrade::with('plantillas')->get();
        return Inertia::render('Admin/SalaryGrade/Index', [
            'salaryGrades' => $salaryGrades,
        ]);
    }
}
