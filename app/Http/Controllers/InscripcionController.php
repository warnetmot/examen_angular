<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Curso;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::with('estudiante', 'curso')->get();
        return view('Inscripciones.index', compact('inscripciones'));
    }

    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('Inscripciones.create', compact('estudiantes', 'cursos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'curso_id' => 'required|exists:cursos,id',
        ]);

        Inscripcion::create($request->all());
        return redirect()->route('Inscripciones.index')->with('success', 'La inscripción fue registrada correctamente');
    }

    public function show($id)
    {
        $inscripcion = Inscripcion::with('estudiante', 'curso')->findOrFail($id);
        return view('Inscripciones.show', compact('inscripcion'));
    }

    public function edit($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('Inscripciones.edit', compact('inscripcion', 'estudiantes', 'cursos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'curso_id' => 'required|exists:cursos,id',
        ]);

        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update($request->all());

        return redirect()->route('Inscripciones.index')->with('success', 'La inscripción fue actualizada correctamente');
    }

    public function destroy($id)
    {
        try {
            $inscripcion = Inscripcion::findOrFail($id);
            $inscripcion->delete();

            return redirect()->route('Inscripciones.index')->with('success', 'La inscripción fue eliminada correctamente');
        } catch (\Exception $e) {
            return redirect()->route('Inscripciones.index')->with('error', 'Error al eliminar la inscripción: ' . $e->getMessage());
        }
    }
}
