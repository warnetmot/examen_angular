@extends('adminlte::page')

@section('title', 'Inscripciones')

@section('content_header')
    <h1>Listado de Inscripciones</h1>
@stop

@section('content')
    <a href="{{ route('Inscripciones.create') }}" class="btn btn-primary mb-3">Nueva Inscripción</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estudiante</th>
                    <th>Curso</th>
                    <th>Fecha de Inscripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscripciones as $inscripcion)
                    <tr>
                        <td>{{ $inscripcion->id }}</td>
                        <td>{{ $inscripcion->estudiante->nombre }}</td>
                        <td>{{ $inscripcion->curso->titulo }}</td>
                        <td>{{ $inscripcion->f_inscripcion }}</td>
                        <td>
                            <a href="{{ route('Inscripciones.show', $inscripcion->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('Inscripciones.edit', $inscripcion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('Inscripciones.destroy', $inscripcion->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta inscripción?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
</div>
@stop
