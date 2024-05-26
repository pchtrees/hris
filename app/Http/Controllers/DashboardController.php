<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Office;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch any necessary data for the dashboard
        $data = [
            'totalEmployees' => Employee::count(),
            'totalDepartments' => Office::count(),
        ];

        return Inertia::render('Admin/Dashboard/Index', [
            'data' => $data,
        ]);
    }
}
