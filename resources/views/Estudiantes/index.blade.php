@extends('adminlte::page')

@section('title', 'Estudaintes')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    
    <a href="{{ route('Estudiantes.create') }}" class="btn btn-primary">Agregar Estudiante</a>

</div>


    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th> 
                <th>Nombre</th>
                <th>CI</th> 
                <th>Teléfono</th>
                <th>Correo electronico</th>
                <th>Género</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre}}</td>
                    <td>{{ $estudiante->CI }}</td>
                    <td>{{ $estudiante->telefono }}</td>
                    <td>{{ $estudiante->email }}</td>
                    <td>{{ $estudiante->genero }}</td>
                    <td>
                        <a href="{{ route('Estudiantes.edit', $estudiante->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Estudiantes.show', $estudiante->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Estudiantes.destroy', $estudiante->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Estudiante?')">
                          
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
