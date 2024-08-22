@extends('adminlte::page')

@section('title', 'Modificar Registro')

@section('content_header')
    <h1>Editar Registro de Vehículo</h1>
@stop

@section('content')
    <form action="{{ route('Vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" id="matricula" name="matricula" class="form-control" value="{{ $vehiculo->matricula }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" name="marca" class="form-control" value="{{ $vehiculo->marca }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" value="{{ $vehiculo->modelo }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="anio_fabricacion">Año de Fabricación</label>
                    <input type="number" id="anio_fabricacion" name="anio_fabricacion" class="form-control" value="{{ $vehiculo->anio_fabricacion }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="propietario_nombre">Nombre del Propietario</label>
                    <input type="text" id="propietario_nombre" name="propietario_nombre" class="form-control" value="{{ $vehiculo->propietario_nombre }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="propietario_telefono">Teléfono del Propietario</label>
                    <input type="number" id="propietario_telefono" name="propietario_telefono" class="form-control" value="{{ $vehiculo->propietario_telefono }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="propietario_direccion">Dirección del Propietario</label>
            <textarea id="propietario_direccion" name="propietario_direccion" class="form-control" required>{{ $vehiculo->propietario_direccion }}</textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha_registro">Fecha de Registro</label>
                    <input type="date" id="fecha_registro" name="fecha_registro" class="form-control" value="{{ $vehiculo->fecha_registro }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo_combustible">Tipo de Combustible</label>
                    <input type="text" id="tipo_combustible" name="tipo_combustible" class="form-control" value="{{ $vehiculo->tipo_combustible }}" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="kilometraje">Kilometraje</label>
            <input type="number" id="kilometraje" name="kilometraje" class="form-control" value="{{ $vehiculo->kilometraje }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop
