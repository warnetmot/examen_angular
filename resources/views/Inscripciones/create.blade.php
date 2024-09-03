@extends('adminlte::page')

@section('title', 'Nueva Inscripción')

@section('content_header')
    <h1>Nueva Inscripción</h1>
@stop

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('Inscripciones.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="estudiante_id">Estudiante</label>
                    <select class="form-control" id="estudiante_id" name="estudiante_id" required>
                        <option value="">Seleccionar Estudiante</option>
                        @foreach($estudiantes as $estudiante)
                            <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="curso_id">Curso</label>
                    <select class="form-control" id="curso_id" name="curso_id" required>
                        <option value="">Seleccionar Curso</option>
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="f_inscripcion">Fecha de Inscripción</label>
                    <input type="date" class="form-control" id="f_inscripcion" name="f_inscripcion" required>
                </div>

                <button type="submit" class="btn btn-success">Guardar Inscripción</button>
                <a href="{{ route('Inscripciones.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@stop
