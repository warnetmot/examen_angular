<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionsController extends Controller
{
    public function index()
    {
        $positions =  Position::all();
        return view('Positions.index', compact('positions'));
    }
    public function create()
    {
        return view('Positions.create');
    } 
    public function  store(Request $request)
    {
        Position::create ($request->all());
        return redirect()->route('Positions.index')->with('success', 'El nuevo cargo fue registrado correctamente');
    }
    public function show($id)
    {
        $positions = Position::findOrFail($id);
        return view('Positions.show', compact('positions'));
    }
    public function  edit(Position $position)
    {
        return view('Positions.edit', compact('position'));
    }
    public function update(Request $request, $id)
    {
        $position = Position::find($id);

        $request->validate([
            'job' => 'required|string|max:30',
            'description' => 'required|string',
        ]);

        $position->update($request->all());
        return redirect()->route('Positions.index')->with('success', 'El cargo fue modificado correctamente');
    }
    public function destroy($id)
    {
        try {
            $position = Position::findOrFail($id);
            $position->delete();

            return redirect()->route('Positions.index')->with('success', 'El cargo fue eliminado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('Positions.index')->with('error', 'Error al cargo el departamento: ' . $e->getMessage());
        }
    }
}
 