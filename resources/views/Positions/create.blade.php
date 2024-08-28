@extends('adminlte::page')

@section('title', 'Nuevo cargo')

@section('content_header')
    <h1> Crear cargo </h1>
@stop
@section('content')
    <form action ="{{ route('Positions.store') }}" method="POST">
        @csrf
        <div class="Form-group">
            <label for = "job" > Nombre </label>
            <input type="text" id="job" name="job" class="form-control" required>
        </div>
        <div class="Form-group">
            <label for = "description " > Description </label>
            <textarea type="text" id="description" name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> SAVE </button>
@stop