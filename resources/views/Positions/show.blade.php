@extends('adminlte::page')

@section('title', 'Detalles del Cargo')

@section('content_header')
    <h1>Detalles del cargo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $positions->job }}</h3>
    </div>    
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $positions->job }}</p>
        <p><strong>Correo:</strong> {{ $positions->description }}</p>
        
    </div>    
    <div class="card-footer">
        <a href="{{ route('Positions.index') }}" class="btn btn-primary btn-sm">Atrás</a>
    </div>
</div>
@stop