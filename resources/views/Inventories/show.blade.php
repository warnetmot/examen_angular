@extends('adminlte::page')

@section('title', 'Detalles del Inventario')


@section('content_header')
    <h1>Detalles del Inventario</h1>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>{{ $inventory->iten_name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $inventory->iten_name }}</p>
            <p><strong>Cantidad:</strong> {{ $inventory->quantity }}</p>
            <p><strong>Precio:</strong> ${{ $inventory->price }}</p>
            <p><strong>Proveedor:</strong> {{ $inventory->supplier->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('Inventories.edit', $inventory) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('Inventories.destroy', $inventory) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este inventario?')">Eliminar</button>
            </form>
            <a href="{{ route('Inventories.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
