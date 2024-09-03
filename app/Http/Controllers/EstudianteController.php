<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Estudiante;


class EstudianteController extends Controller
{
    
    public function index()
    {
        $estudiantes =  Estudiante::all();
        return view('Estudiantes.index', compact('estudiantes'));
    }
    public function create()
    {
        return view('Estudiantes.create');
    }
    public function  store(Request $request)
    {
        Estudiante::create ($request->all());
        return redirect()->route('Estudiantes.index')->with('success', 'El nuevo Estudiante fue registrado correctamente');
    }
    public function show($id)
    {
        $estudiantes = Estudiante::findOrFail($id);
        return view('Estudiantes.show', compact('estudiantes'));
    }
    public function edit ($id)
    {
        $estudiante = Estudiante::find($id);
        return view('Estudiantes.edit', compact('estudiante'));
    }
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante->update($request->all());

        return redirect()->route("Estudiantes.index")->with('success', 'el estudiante fue modificado correctamente ');
    }
    public function destroy(Product $product)
    {
        try {
            $estudiante = Estudiante::findOrFail($id);
            $estudiante->delete();

            return redirect()->route('Estudiantes.index')->with('success', 'El Estudiante fue eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('Estudiantes.index')->with('error', 'Error al eliminar el estudiante: ' . $e->getMessage());
        }
    }

}
