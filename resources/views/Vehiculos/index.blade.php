@extends('adminlte::page')

@section('title', 'Vehículos')

@section('content_header')
    <h1>Vehículos</h1>
@stop

@section('content')
    <a href="{{ route('Vehiculos.create') }}" class="btn btn-primary">Registrar un Vehículo</a></br>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Matrícula</th> 
                <th>Marca</th>
                <th>Año de Fabricación</th>
                <th>Nombre del Propietario</th>
                <th>Teléfono del Propietario</th>
                <th>Fecha de Registro</th>
                <th>Kilometraje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->id }}</td>
                    <td>{{ $vehiculo->matricula }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->anio_fabricacion }}</td>
                    <td>{{ $vehiculo->propietario_nombre }}</td>
                    <td>{{ $vehiculo->propietario_telefono }}</td>
                    <td>{{ $vehiculo->fecha_registro }}</td>
                    <td>{{ $vehiculo->kilometraje }}</td>
                    <td>
                        <a href="{{ route('Vehiculos.edit', $vehiculo->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Vehiculos.show', $vehiculo->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este vehículo?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
