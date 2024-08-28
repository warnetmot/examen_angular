@extends('adminlte::page')

@section('title', 'Nuevo Departamento')

@section('content_header')
    <h1> Crear Departamento </h1>
@stop
@section('content')
    <form action ="{{ route('Departments.store') }}" method="POST">
        @csrf
        <div class="Form-group">
            <label for = "name" > Nombre </label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="Form-group">
            <label for = "location " > Locacion </label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> SAVE </button>
@stop