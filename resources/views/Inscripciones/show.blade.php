@extends('adminlte::page')

@section('title', 'Detalles de la Inscripción')

@section('content_header')
    <h1>Detalles de la Inscripción</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información de la Inscripción</h5>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $inscripcion->id }}</td>
                </tr>
                <tr>
                    <th>Estudiante</th>
                    <td>{{ $inscripcion->estudiante->nombre }}</td>
                </tr>
                <tr>
                    <th>Curso</th>
                    <td>{{ $inscripcion->curso->titulo }}</td>
                </tr>
                <tr>
                    <th>Fecha de Inscripción</th>
                    <td>{{ $inscripcion->f_inscripcion }}</td>
                </tr>
            </table>
            <a href="{{ route('Inscripciones.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('Inscripciones.edit', $inscripcion->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('Inscripciones.destroy', $inscripcion->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta inscripción?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop
