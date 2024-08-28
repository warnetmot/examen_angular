<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emplooye;
use App\Models\Department;
use App\Models\Position;

class EmplooyeController extends Controller
{
    public function index()
    {
        $emplooyes = Emplooye::with(['department', 'position'])->get();
        return view('Emplooyes.index', compact('emplooyes'));
    }

    public function create()
    {
        $departments = Department::all();
        $positions = Position::all();

        return view('Emplooyes.create', compact('departments', 'positions'));
    }

    public function store(Request $request)
    {
        Emplooye::create($request->all());
        return redirect()->route('Emplooyes.index')->with('success', 'El empleado fue creado correctamente');
    }

    public function show(string $id)
    {
        $emplooye = Emplooye::findOrFail($id);
        return view('Emplooyes.show', compact('emplooye'));
    }

    public function edit(Emplooye $emplooye)
    {
        $departments = Department::all();
        $positions = Position::all();
        return view('Emplooyes.edit', compact('emplooye', 'departments', 'positions'));
    }

    public function update(Request $request, $id)
    {
        // Encuentra el empleado por ID
        $emplooye = Emplooye::find($id);
        // Actualiza el empleado con los datos del formulario
        $emplooye->update($request->all());
        // Redirecciona a la vista de index
        return redirect()->route("Emplooyes.index")->with('success', 'Empleado actualizado correctamente');
    }

    public function destroy(string $id)
    {
        try {
            // Encuentra el empleado por ID y lo elimina
            $emplooye = Emplooye::findOrFail($id);
            $emplooye->delete();

            // Redirige a la vista de index con un mensaje de éxito
            return redirect()->route('Emplooyes.index')->with('success', 'El empleado fue eliminado correctamente');
        } catch (\Exception $e) {
            // Redirige a la vista de index con un mensaje de error si ocurre una excepción
            return redirect()->route('Emplooyes.index')->with('error', 'Error al eliminar el empleado: ' . $e->getMessage());
        }
    }
}

