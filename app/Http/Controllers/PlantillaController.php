<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Plantilla;

class PlantillaController extends Controller
{
    public function create()
    {
        return Inertia::render('Admin/Plantilla/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'office_id' => 'required|integer|exists:office,id',
            'plantilla_item_no' => 'required|integer',
            'position_id' => 'required|integer|exists:position,id',
            'employment_status' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        Plantilla::create($request->all());

        return redirect()->route('admin.dashboard.index')->with('success', 'Plantilla created successfully.');
    }

    public function edit($id)
    {
        $plantilla = Plantilla::findOrFail($id);
        return Inertia::render('Admin/Plantilla/Edit', [
            'plantilla' => $plantilla
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'office_id' => 'required|integer|exists:office,id',
            'plantilla_item_no' => 'required|integer',
            'position_id' => 'required|integer|exists:position,id',
            'employment_status' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $plantilla = Plantilla::findOrFail($id);
        $plantilla->update($request->all());

        return redirect()->route('admin.dashboard.index')->with('success', 'Plantilla updated successfully.');
    }

    public function assign()
    {
        return Inertia::render('Admin/Plantilla/Assign');
    }

    public function assignPersonnel(Request $request)
    {
        // Validate and assign personnel to plantilla
        $request->validate([
            'personnel_id' => 'required|integer|exists:personnel,id',
            'plantilla_id' => 'required|integer|exists:plantilla,id',
        ]);

        // Assuming you have a pivot table for the assignment
        $personnel = Personnel::findOrFail($request->personnel_id);
        $personnel->plantillas()->attach($request->plantilla_id);

        return redirect()->route('admin.dashboard.index')->with('success', 'Personnel assigned to Plantilla successfully.');
    }
}