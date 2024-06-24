<?php

namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Plantilla;
use App\Models\Employee;
use App\Models\Office;
use App\Models\Position;
use App\Models\SalaryGrade;

class PlantillaController extends Controller
{
    public function index()
    {
        $plantillas = Plantilla::with(['employee', 'salaryGrade'])->get();
    
        $officeNames = Office::pluck('name', 'id')->all();
        $positionNames = Position::pluck('title', 'id')->all();
    
        return Inertia::render('Admin/Plantilla/Index', [
            'plantillas' => $plantillas,
            'officeNames' => $officeNames,
            'positionNames' => $positionNames,
        ]);
    }    

    public function create()
    {
        return Inertia::render('Admin/Plantilla/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add your validation rules here
        ]);

        Plantilla::create($request->all());

        return redirect()->route('admin.plantilla.index')->with('success', 'Plantilla created successfully.');
    }

    public function edit($id)
    {
        $plantilla = Plantilla::findOrFail($id);
        return Inertia::render('Admin/Plantilla/Edit', ['plantilla' => $plantilla]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add your validation rules here
        ]);

        $plantilla = Plantilla::findOrFail($id);
        $plantilla->update($request->all());

        return redirect()->route('admin.plantilla.index')->with('success', 'Plantilla updated successfully.');
    }

    public function destroy($id)
    {
        $plantilla = Plantilla::findOrFail($id);
        $plantilla->delete();

        return redirect()->route('admin.plantilla.index')->with('success', 'Plantilla deleted successfully.');
    }
}
