<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Plantilla;

class PlantillaController extends Controller
{
    public function index()
    {
       /* $plantillas = Plantilla::all();
        return Inertia::render('Plantilla/Index', ['plantillas' => $plantillas]);*/
        return Inertia::render('Admin/Plantilla/Index',);
    }

    public function create()
    {
        return Inertia::render('Plantilla/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add your validation rules here
        ]);

        Plantilla::create($request->all());

        return redirect()->route('plantilla.index')->with('success', 'Plantilla created successfully.');
    }

    public function edit($id)
    {
        $plantilla = Plantilla::findOrFail($id);
        return Inertia::render('Plantilla/Edit', ['plantilla' => $plantilla]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add your validation rules here
        ]);

        $plantilla = Plantilla::findOrFail($id);
        $plantilla->update($request->all());

        return redirect()->route('plantilla.index')->with('success', 'Plantilla updated successfully.');
    }

    public function destroy($id)
    {
        $plantilla = Plantilla::findOrFail($id);
        $plantilla->delete();

        return redirect()->route('plantilla.index')->with('success', 'Plantilla deleted successfully.');
    }
}
