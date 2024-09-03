@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar estudiante</h1>
@stop

@section('content')
    <form action="{{ route('Estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $estudiante->nombre }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $estudiante->email }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control" value="{{ $estudiante->telefono }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="CI">Dirección</label>
                    <input type="text" id="CI" name="CI" class="form-control" value="{{ $estudiante->CI }}" required>
                </div> 
            </div>
            
        </div>

        <div class="row">
        <div class="col-md-6">
                <div class="form-group">
                    <label for="CI">CI</label>
                    <input type="text" id="CI" name="CI" class="form-control" value="{{ $estudiante->CI }}" required>
                </div> 
            </div>
           
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tutor">Tutor</label>
                    <input type="text" id="tutor" name="tutor" class="form-control" value="{{ $estudiante->tutor }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text" id="edad" name="edad" class="form-control" value="{{ $estudiante->edad }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="genero">Género</label>
                    <select id="genero" name="genero" class="form-control" required>
                        <option value="Male" {{ $estudiante->genero == 'Male' ? 'selected' : '' }}>Masculino</option>
                        <option value="Female" {{ $estudiante->genero == 'Female' ? 'selected' : '' }}>Femenino</option>
                        <option value="Other" {{ $estudiante->genero == 'Other' ? 'selected' : '' }}>Otro</option>
                    </select>
                </div> 
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
