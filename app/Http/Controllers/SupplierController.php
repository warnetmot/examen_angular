<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('Suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Supplier::create($request->all());
        return redirect()->route('Suppliers.index')->with('success', 'El proveedor fue registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $suppliers = Supplier::findOrFail($id);
        return view('Suppliers.show', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('Suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $supplier = Supplier::find($id);
        
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|max:50',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:100',
        ]);

        $supplier->update($request->all());

        return redirect()->route('Suppliers.index')->with('success', 'El proveedor fue modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $supplier = Supplier::findOrFail($id);
            $supplier->delete();

            return redirect()->route('Suppliers.index')->with('success', 'El proveedor fue eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('Suppliers.index')->with('error', 'Error al eliminar el proveedor: ' . $e->getMessage());
        }
    }
}
