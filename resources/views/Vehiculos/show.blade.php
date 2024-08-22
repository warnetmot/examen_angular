@extends('adminlte::page')

@section('title', 'Detalles del Vehículo')

@section('content_header')
    <h1>Detalles del Vehículo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $vehiculo->propietario_nombre }}</h3>
    </div>    
    <div class="card-body">
        <p><strong>Matrícula:</strong> {{ $vehiculo->matricula }}</p>
        <p><strong>Marca:</strong> {{ $vehiculo->marca }}</p>
        <p><strong>Modelo:</strong> {{ $vehiculo->modelo }}</p>
        <p><strong>Dirección del Propietario:</strong> {{ $vehiculo->propietario_direccion }}</p>
        <p><strong>Año de fabricación:</strong> {{ $vehiculo->anio_fabricacion }}</p>
        <p><strong>Teléfono:</strong> {{ $vehiculo->propietario_telefono }}</p>
        <p><strong>Fecha de registro:</strong> {{ $vehiculo->fecha_registro }}</p>
        <p><strong>Tipo de combustible:</strong> {{ $vehiculo->tipo_combustible }}</p>
        <p><strong>Kilometraje:</strong> {{ $vehiculo->kilometraje }}</p>
    </div>    
    <div class="card-footer">
        <a href="{{ route('Vehiculos.index') }}" class="btn btn-primary btn'sm">Atras</a>
        <a href="{{ route('Vehiculos.edit', $vehiculo->id) }}" class="btn btn-dark btn-sm">Editar</a>
    </div>
</div>
@stop
