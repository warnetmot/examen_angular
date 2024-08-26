@extends('adminlte::page')

@section('title', 'Nuevo Proveedor')

@section('content_header')
    <h1> Crear Proveedor </h1>
@stop
@section('content')
    <form action ="{{ route('Suppliers.store') }}" method="POST">
        @csrf
        <div class="Form-group">
            <label for = "name" > Nombre </label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="Form-group">
            <label for = "name" > Correo </label>
            <input type="email" id="email" name="email" class="form-control" step="0.01" required>
        </div>
        <div class="Form-group">
            <label for = "name" > telefono </label>
            <input type="phone" id="phone" name="phone" class="form-control" step="0.01" required>
        </div>
        <div class="Form-group">
            <label for = "name" > Direccion </label>
            <input type="address" id="address" name="address" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary"> SAVE </button>
@stop 