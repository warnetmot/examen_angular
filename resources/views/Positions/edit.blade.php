@extends('adminlte::page')

@section('title', 'Modificar Cargo')

@section('content_header')
    <h1>Editar Cargo</h1>
@stop

@section('content')
    <form action="{{ route('Positions.update', $position) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="job">Nombre</label>
            <input type="text" id="job" name="job" class="form-control" value="{{ $position->job }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" class="form-control" value="{{ $position->description }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop