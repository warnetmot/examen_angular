@extends('adminlte::page')

@section('title', 'editar inventario')

@section('content_header')


@section('content')
<div class="container">
    <h1>Editar Inventario</h1>
    <form action="{{ route('Inventories.update', $inventory) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="iten_name">Nombre</label>
            <input type="text" name="iten_name" id="iten_name" class="form-control" value="{{ $inventory->iten_name }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $inventory->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $inventory->price }}" required>
        </div>

        <div class="form-group">
            <label for="supplier_id">Proveedor</label>
            <select name="supplier_id" id="supplier_id" class="form-control" required>
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
