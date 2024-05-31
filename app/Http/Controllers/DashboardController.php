<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Office;
use Inertia\Inertia;
use App\Models\Position;
use App\Models\LeaveApplication;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch any necessary data for the dashboard
        $data = [
            'totalEmployees' => Employee::count(),
            'totalOffices' => Office::count(),
            'totalPosition' => Position::count(),
            'totalLeaveApplication' => LeaveApplication::count(),
        ];

        return Inertia::render('Admin/Dashboard/Index', [
            'data' => $data,
        ]);
    }
}
