<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Supplier;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::with('supplier')->get();
        return view('Inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('Inventories.create',  compact('suppliers'));
        

    }

    /**
     * Store a newly created resource in storage.
     */
  
    public function store(Request $request)
    {
        Inventory::create($request->all());
        return redirect()->route('Inventories.index')->with('success', 'El producto fue creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('Inventories.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        $suppliers = Supplier::all();
        return view('Inventories.edit', compact('inventory', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //encuanetra el inventario por id
        $inventory = Inventory::find($id);
        //actualiza el inventario con los datos del formulario
        $inventory->update($request->all());
        //redireccion a la vista de index
        return redirect()->route("Inventories.index")->with('success', 'Inventario actualisado ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Elimina el inventario
            $inventory = Inventory::findOrFail($id);
            $inventory->delete();
    
            // Redirige a la vista de index con un mensaje de éxito
            return redirect()->route('Inventories.index')->with('success', 'El inventario fue eliminado correctamente');
        } catch (\Exception $e) {
            // Redirige a la vista de index con un mensaje de error en caso de que ocurra una excepción
            return redirect()->route('Inventories.index')->with('error', 'Error al eliminar el inventario: ' . $e->getMessage());
        }
    }
}
