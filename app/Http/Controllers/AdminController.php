<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/App');
    }

    public function dashboard(): Response
    {
        return Inertia::render('Admin/Dashboard');
    }

    public function employeesIndex(): Response
    {
        return Inertia::render('Admin/Employees');
    }
}
