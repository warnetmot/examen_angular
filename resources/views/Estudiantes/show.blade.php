@extends('adminlte::page')

@section('title', 'Detalles del Estudiante')

@section('content_header')
    <h1>Detalles del estudiantes</h1>
@stop

@section('content')
    

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $estudiantes->nombre }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $estudiantes->nombre }}</p>
            <p><strong>Correo:</strong> {{ $estudiantes->email }}</p>
            <p><strong>Teléfono:</strong> {{ $estudiantes->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $estudiantes->direccion }}</p>
            <p><strong>CI:</strong> {{ $estudiantes->CI }}</p>
            <p><strong>Genero:</strong> {{ $estudiantes->genero }}</p>
            <p><strong>Tutor legal del estudiantes::</strong> {{ $estudiantes->tutor }}</p>
            <p><strong>Edad:</strong> {{ $estudiantes->edad }} años</p>

        </div>
        <div class="card-footer">
            <a href="{{ route('Estudiantes.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('Estudiantes.edit', $estudiantes->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
@stop
 