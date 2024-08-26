<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;

class AppointmentController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('client')->get();
        return view('Appointments.index', compact('appointments'));
    }
     /** 
     * Show the form for creating a new resource.
     */
    public function create()
{
    $clients = Client::all();
    return view('Appointments.create', compact('clients'));
}


    public function store(Request $request)
    {
        Appointment::create($request->all());
        return redirect()->route('Appointments.index')->with('success', 'La cita fue creado correctamente');
    }
    public function show(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('Appointments.show', compact('appointment'));
    }
    public function edit(Appointment $appointment)
    {
        $clients = Client::all();
        return view('Appointments.edit', compact('appointment', 'clients'));
    }
    public function update(Request $request, $id) 
    {
        //encuanetra el inventario por id
        $appointment = Appointment::find($id);
        //actualiza el inventario con los datos del formulario
        $appointment->update($request->all());
        //redireccion a la vista de index
        return redirect()->route("Appointments.index")->with('success', 'cita actualisado ');
    }
    public function destroy(string $id)
    {
        try {
            // Elimina el inventario
            $appointment = Appointment::findOrFail($id);
            $appointment->delete();
    
            // Redirige a la vista de index con un mensaje de éxito
            return redirect()->route('Appointments.index')->with('success', 'El inventario fue eliminado correctamente');
        } catch (\Exception $e) {
            // Redirige a la vista de index con un mensaje de error en caso de que ocurra una excepción
            return redirect()->route('Appointments.index')->with('error', 'Error al eliminar el inventario: ' . $e->getMessage());
        }
    }
}
