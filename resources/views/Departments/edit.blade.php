@extends('adminlte::page')

@section('title', 'Modificar Departamento')

@section('content_header')
    <h1>Editar Departamento</h1>
@stop

@section('content')
    <form action="{{ route('Departments.update', $department) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $department->name }}" required>
        </div>
        <div class="form-group">
            <label for="location">locacion</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ $department->location }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
