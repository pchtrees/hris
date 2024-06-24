<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Office;
use App\Models\Position;
use App\Models\Plantilla;
use App\Models\NonPlantilla;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        //get the counts for plantilla and non-Plantilla positions based on their creation dates for the current month
        $currentMonth = now()->month;

        $plantillaCounts = Plantilla::whereMonth('created_at', $currentMonth)->count();
        $nonPlantillaCounts = NonPlantilla::whereMonth('created_at', $currentMonth)->count();

        // Fetch other total counts
        $totalEmployees = Employee::count();
        $totalOffices = Office::count();
        $totalPositions = Position::count();
        $totalPlantillas = Plantilla::count();
        $totalNonPlantillas = NonPlantilla::count();

        $data = [
            'totalEmployees' => $totalEmployees,
            'totalOffices' => $totalOffices,
            'totalPositions' => $totalPositions,
            'totalPlantillas' => $totalPlantillas,
            'totalNonPlantillas' => $totalNonPlantillas,
            'plantillaCounts' => $plantillaCounts,
            'nonPlantillaCounts' => $nonPlantillaCounts,
        ];

        return Inertia::render('Admin/Dashboard/Index', [
            'data' => $data,
        ]);
    }
}

