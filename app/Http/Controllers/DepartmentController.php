<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments =  Department::all();
        return view('Departments.index', compact('departments'));
    }
    public function create()
    {
        return view('Departments.create');
    } 
    public function  store(Request $request)
    {
        Department::create ($request->all());
        return redirect()->route('Departments.index')->with('success', 'El departamento fue registrado correctamente');
    }
    public function show($id)
    {
        $departments = Department::findOrFail($id);
        return view('Departments.show', compact('departments'));
    }
    public function  edit(Department $department)
    {
        return view('Departments.edit', compact('department'));
    }
    public function update(Request $request, $id)
    {
        $department = Department::find($id);

        $request->validate([
            'name' => 'required|string|max:30',
            'location' => 'required|string|max:100',
        ]);

        $department->update($request->all());
        return redirect()->route('Departments.index')->with('success', 'El departamento fue modificado correctamente');
        
    }
    public function destroy($id)
    {
        try {
            $department = Department::findOrFail($id);
            $department->delete();

            return redirect()->route('Departments.index')->with('success', 'El departamento fue eliminado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('Departments.index')->with('error', 'Error al eliminar el departamento: ' . $e->getMessage());
        }
    }
}
