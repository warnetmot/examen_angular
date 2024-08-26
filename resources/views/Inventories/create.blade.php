@extends('adminlte::page')

@section('title', 'crear inventario')

@section('content_header')

@section('content')
<div class="container">
    <h1>Crear Nuevo Inventario</h1>
    <form action="{{ route('Inventories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="iten_name">Nombre</label>
            <input type="text" name="iten_name" id="iten_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">fecha</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="supplier_id">Proveedor</label>
            <select name="supplier_id" id="supplier_id" class="form-control" required>
                @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
