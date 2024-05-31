<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        return Inertia::render('Admin/Office/Index', [
            'offices' => $offices,
        ]);
    }
    
    public function create()
    {
        return Inertia::render('Admin/Office/Create');
    }

    public function store(Request $request)
    {
        // Vvlidate and store office
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);
        
        Office::create($validatedData);

        return redirect()->route('admin.dashboard.index')->with('success', 'Office created successfully.');
    }

    public function edit($id)
    {
        $office = Office::findOrFail($id);
        return Inertia::render('Admin/Office/Edit', [
            'office' => $office
        ]);
    }

    public function update(Request $request, $id)
    {
        // validate and update office
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'required|boolean',
        ]);

        $office = Office::findOrFail($id);
        $office->update($request->all());

        return redirect()->route('admin.dashboard.index')->with('success', 'Office updated successfully.');
    }
}
