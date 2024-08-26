@extends('adminlte::page')

@section('title', 'Inventarios')

@section('content_header')
    <h1>Inventario</h1>
@stop

@section('content')
    <a href="{{ route('Inventories.create') }}" class="btn btn-primary">Agregar inventario</a></br>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->id }}</td>
                    <td>{{ $inventory->iten_name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->price }}</td>
                    <td>{{ $inventory->supplier->name}}</td>

                    <td>
                        <a href="{{ route('Inventories.edit', $inventory->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Inventories.show', $inventory->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Inventories.destroy', $inventory) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
