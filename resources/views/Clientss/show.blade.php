@extends('adminlte::page')

@section('title', 'Detalles del Cliente')

@section('content_header')
    <h1>Detalles del Cliente</h1>
@stop

@section('content')
    

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $client->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $client->name }}</p>
            <p><strong>Correo:</strong> {{ $client->email }}</p>
            <p><strong>Teléfono:</strong> {{ $client->phone }}</p>
            <p><strong>Dirección:</strong> {{ $client->address }}</p>
            <p><strong>Ciudad:</strong> {{ $client->city }}</p>
            <p><strong>País:</strong> {{ $client->country }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $client->birth_date }}</p>
            <p><strong>Edad:</strong> {{ $client->$age }} años</p>
            <p><strong>Género:</strong> {{ $client->gender }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('Clientss.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('Clientss.edit', $client->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
@stop
 