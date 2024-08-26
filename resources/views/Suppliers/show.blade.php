@extends('adminlte::page')

@section('title', 'Detalles del Proveedor')

@section('content_header')
    <h1>Detalles del Proveedor</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $suppliers->name }}</h3>
    </div>    
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $suppliers->name }}</p>
        <p><strong>Correo:</strong> {{ $suppliers->email }}</p>
        <p><strong>Teléfono:</strong> {{ $suppliers->phone }}</p>
        <p><strong>Dirección:</strong> {{ $suppliers->address }}</p>
    </div>    
    <div class="card-footer">
        <a href="{{ route('Suppliers.index') }}" class="btn btn-primary btn-sm">Atrás</a>
    </div>
</div>
@stop
