@extends('adminlte::page')

@section('title', 'Nuevo producto')

@section('content_header')
    <h1> Crear producto </h1>
@stop
@section('content')
    <form action ="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="Form-group">
            <label for = "name" > Nombre </label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="Form-group">
            <label for = "name" > descripcion </label>
            <textarea type="text" id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="Form-group">
            <label for = "name" > precio </label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary"> SAVE </button>
@stop 