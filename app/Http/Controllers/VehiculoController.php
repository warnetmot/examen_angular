<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos = Vehiculo::all();
        return view('Vehiculos.index', compact('vehiculos'));
    }

    public function create(){
        return view('Vehiculos.create');
    }

    public function store(Request $request){
        $request->validate([
            'matricula' => 'required|max:30',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'anio_fabricacion' => 'required|integer|min:1886|max:' . date('Y'),
            'propietario_nombre' => 'required|string|max:50',
            'propietario_direccion' =>  'required|string|max:255',
            'propietario_telefono' => 'required|string|max:15',
            'fecha_registro' => 'required|date',
            'tipo_combustible' => 'required|string|max:50',
            'kilometraje' => 'required|numeric|min:0',
        ]);
        
        vehiculo::create($request->all());
        return redirect()->route('Vehiculos.index')->with('success', 'El vehículo fue registrado correctamente');
    }
    public function edit(Vehiculo $vehiculo)
    {
        return view('Vehiculos.edit', compact('vehiculo'));
    }
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([

            'matricula' => 'required|max:30',
            'marca' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'anio_fabricacion' => 'required|integer|min:1886|max:' . date('Y'),
            'propietario_nombre' => 'required|string|max:50',
            'propietario_direccion' =>  'required|string|max:255',
            'propietario_telefono' => 'required|string|max:15',
            'fecha_registro' => 'required|date',
            'tipo_combustible' => 'required|string|max:50',
            'kilometraje' => 'required|numeric|min:0',
        ]);

        $vehiculo->update($request->all());
        return redirect()->route('Vehiculos.index')->with('success', 'El vehículo fue actualizado correctamente');
    }
    public function destroy($id)
{
    try {
        $vehiculo = Vehiculo::findOrFail($id);

        $vehiculo->delete();

        return redirect()->route('Vehiculos.index')->with('success', 'El vehículo fue eliminado correctamente');
    } catch (\Exception $e) {
        return redirect()->route('Vehiculos.index')->with('error', 'Error al eliminar el vehículo: ' . $e->getMessage());
    }
}


    public function show($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('Vehiculos.show', compact('vehiculo'));
    }
    
}
