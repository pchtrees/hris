<?php

namespace App\Http\Controllers;

use App\Models\LeaveApplication;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaveApplications = LeaveApplication::all();
        return inertia('LeaveApplications/Index', compact('leaveApplications'));
    }

    // Other CRUD methods go here...
}
