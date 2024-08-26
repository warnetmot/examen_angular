@extends('adminlte::page')

@section('title', 'Detalles de la Cita')

@section('content_header')
    <h1>Detalles de la Cita</h1>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Cita para {{ $appointment->client->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cliente:</strong> {{ $appointment->client->name }}</p>
            <p><strong>Fecha:</strong> {{ $appointment->appointment_date }}</p>
            <p><strong>Dirección:</strong> {{ $appointment->address }}</p>
            <p><strong>Descripción:</strong> {{ $appointment->description }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('Appointments.edit', $appointment->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('Appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta cita?')">Eliminar</button>
            </form>
            <a href="{{ route('Appointments.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
