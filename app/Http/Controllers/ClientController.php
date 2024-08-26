<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('Clientss.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clientss.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:30',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:10',
        ]);

        // Calcula la edad
        $age = Carbon::parse($request->birth_date)->age;

        // Crea el cliente con la edad incluida
        Client::create(array_merge($validated, ['age' => $age]));

        return redirect()->route('Clientss.index')->with('success', 'El cliente fue registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
    
        $age = Carbon::parse($client->birth_date)->age;
    
        return view('Clientss.show', compact('client', 'age'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('Clientss.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validación
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:30',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|string|max:10',
        ]);

        // Calcula la edad
        $age = Carbon::parse($request->birth_date)->age;

        $client = Client::findOrFail($id);
        $client->update(array_merge($validated, ['age' => $age]));

        return redirect()->route('Clientss.index')->with('success', 'Cliente actualizado correctamente.');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->delete();

            return redirect()->route('Clientss.index')->with('success', 'El cliente fue eliminado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('Clientss.index')->with('error', 'Error al eliminar el cliente: ' . $e->getMessage());
        }
    }
}
