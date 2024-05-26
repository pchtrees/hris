<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Position;

class PositionController extends Controller
{
    public function create()
    {
        return Inertia::render('Admin/Position/Create');
    }

    public function store(Request $request)
    {
        // Validate and store position
        $request->validate([
            'title' => 'required|string|max:255',
            'salary_grade' => 'required|integer',
            'is_active' => 'required|boolean',
        ]);

        Position::create($request->all());

        return redirect()->route('admin.dashboard.index')->with('success', 'Position created successfully.');
    }
}
