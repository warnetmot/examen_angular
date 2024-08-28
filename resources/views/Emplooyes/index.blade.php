@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
    <a href="{{ route('Emplooyes.create') }}" class="btn btn-primary">Agregar empleado</a></br>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Posición</th>
                <th>Departamento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emplooyes as $emplooye)
                <tr>
                    <td>{{ $emplooye->id }}</td>
                    <td>{{ $emplooye->first_name }}</td>
                    <td>{{ $emplooye->last_name }}</td>
                    <td>{{ $emplooye->ci }}</td>
                    <td>{{ $emplooye->email }}</td>
                    <td>{{ $emplooye->phone }}</td>
                    <td>{{ $emplooye->position->job }}</td>
                    <td>{{ $emplooye->department->name }}</td>
                    <td>
                        <a href="{{ route('Emplooyes.edit', $emplooye->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Emplooyes.show', $emplooye->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Emplooyes.destroy', $emplooye->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Empleado?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
