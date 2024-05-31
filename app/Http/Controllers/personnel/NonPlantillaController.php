<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\NonPlantilla;

class NonPlantillaController extends Controller
{
    public function create()
    {
        return Inertia::render('Admin/NonPlantilla/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'office_id' => 'required|integer|exists:offices,id',
            'plantilla_item_no' => 'required|integer',
            'position_id' => 'required|integer|exists:positions,id',
            'employment_status' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        NonPlantilla::create($request->all());

        return redirect()->route('admin.dashboard.index')->with('success', 'Non-Plantilla created successfully.');
    }

    public function edit($id)
    {
        $nonPlantilla = NonPlantilla::findOrFail($id);
        return Inertia::render('Admin/NonPlantilla/Edit', [
            'nonPlantilla' => $nonPlantilla
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'office_id' => 'required|integer|exists:offices,id',
            'plantilla_item_no' => 'required|integer',
            'position_id' => 'required|integer|exists:positions,id',
            'employment_status' => 'required|string',
            'is_active' => 'required|boolean',
        ]);

        $nonPlantilla = NonPlantilla::findOrFail($id);
        $nonPlantilla->update($request->all());

        return redirect()->route('admin.dashboard.index')->with('success', 'Non-Plantilla updated successfully.');
    }

    public function assign()
    {
        return Inertia::render('Admin/NonPlantilla/Assign');
    }

    public function assignPersonnel(Request $request)
    {
        $request->validate([
            'personnel_id' => 'required|integer|exists:personnel,id',
            'non_plantilla_id' => 'required|integer|exists:non_plantillas,id',
        ]);

        $personnel = Personnel::findOrFail($request->personnel_id);
        $personnel->nonPlantillas()->attach($request->non_plantilla_id);

        return redirect()->route('admin.dashboard.index')->with('success', 'Personnel assigned to Non-Plantilla successfully.');
    }
}
