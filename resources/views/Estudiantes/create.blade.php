@extends('adminlte::page')

@section('title', 'Nuevo Estudiante')

@section('content_header')
    <h1>Crear Estudiante</h1>
@stop

@section('content') 
    <form action="{{ route('Estudiantes.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="CI">CI</label>
                    <input type="text" id="CI" name="CI" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tutor">Tutor</label>
                    <input type="text" id="tutor" name="tutor" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text" id="edad" name="edad" class="form-control" >
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <select id="genero" name="genero" class="form-control" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

   
@stop
