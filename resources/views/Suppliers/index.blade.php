@extends('adminlte::page')

@section('title', 'Suplliers')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')
    <a href="{{ route('Suppliers.create') }}" class="btn btn-primary">agregar Proveedor</a></br>
    <table class="table table-bordered mt-12">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>telefono</th>
                <th>direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $suppliers as $supplier )
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->phone }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>
                        <a href="{{ route('Suppliers.edit', $supplier->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Suppliers.show', $supplier->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Proveedor?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
