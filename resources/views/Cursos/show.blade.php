@extends('adminlte::page')

@section('title', 'Detalles del Curso')

@section('content_header')
    <h1>Detalles del curso</h1>
@stop

@section('content')
    

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $cursos->titulo }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Titulo:</strong> {{ $cursos->titulo }}</p>
            <p><strong>Descripcion:</strong> {{ $cursos->descripcion }}</p>
            <p><strong>Aula:</strong> {{ $cursos->aula }}</p>
            <p><strong>Docente:</strong> {{ $cursos->docente }}</p>
            <p><strong>Cupos:</strong> {{ $cursos->cupos }}</p>
            

        </div>
        <div class="card-footer">
            <a href="{{ route('Cursos   .index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('Cursos   .edit', $cursos->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
@stop