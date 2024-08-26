@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <form action="{{ route('Clientss.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $client->name }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $client->email }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" name="phone" class="form-control" value="{{ $client->phone }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="birth_date">Fecha de Nacimiento</label>
                    <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{ $client->birth_date }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $client->address }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">Ciudad</label>
                    <input type="text" id="city" name="city" class="form-control" value="{{ $client->city }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="country">País</label>
                    <input type="text" id="country" name="country" class="form-control" value="{{ $client->country }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="gender">Género</label>
                    <select id="gender" name="gender" class="form-control" required>
                        <option value="Male" {{ $client->gender == 'Male' ? 'selected' : '' }}>Masculino</option>
                        <option value="Female" {{ $client->gender == 'Female' ? 'selected' : '' }}>Femenino</option>
                        <option value="Other" {{ $client->gender == 'Other' ? 'selected' : '' }}>Otro</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
