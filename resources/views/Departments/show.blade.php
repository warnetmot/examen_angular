@extends('adminlte::page')

@section('title', 'Detalles del Departamento')

@section('content_header')
    <h1>Detalles del Departamento</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $departments->name }}</h3>
    </div>    
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $departments->name }}</p>
        <p><strong>Correo:</strong> {{ $departments->location }}</p>
        
    </div>    
    <div class="card-footer">
        <a href="{{ route('Departments.index') }}" class="btn btn-primary btn-sm">Atrás</a>
    </div>
</div>
@stop