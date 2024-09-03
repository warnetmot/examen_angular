<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;


class CursoController extends Controller
{
    public function index()
    {
        $cursos =  Curso::all();
        return view('Cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('Cursos.create');
    }
    public function  store(Request $request)
    {
        Curso::create ($request->all());
        return redirect()->route('Cursos.index')->with('success', 'El nuevo Curso fue registrado correctamente');
    }
    public function show($id)
    {
        $cursos = Curso::findOrFail($id);
        return view('Cursos.show', compact('cursos'));
    }
    public function edit ($id)
    {
        $curso = Curso::find($id);
        return view('Cursos.edit', compact('curso'));
    }
    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        $curso->update($request->all());

        return redirect()->route("Cursos.index")->with('success', 'el curso fue modificado correctamente ');
    }
    public function destroy(Product $product)
    {
        try {
            $curso = Curso::findOrFail($id);
            $curso->delete();

            return redirect()->route('Cursos.index')->with('success', 'El Curso fue eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('Cursos.index')->with('error', 'Error al eliminar el curso: ' . $e->getMessage());
        }
    }
}
