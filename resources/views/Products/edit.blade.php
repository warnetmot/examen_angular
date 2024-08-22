@extends('adminlte::page')

@section('title', 'crear producto')

@section('content_header')
    <h1> Editar producto</h1>
@stop
@section('content')

    <form action ="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="Form-group">
            <label for = "name" > Editar Nombre </label>
            <input type="text" id="name" name="name" class="form-control" value ="{{$product->name}}" require>
        </div>
        <div class="Form-group">
            <label for = "description" > Editar descripcion </label>
            <textarea type="text" id="description" name="description" class="form-control" require >{{$product->description}}</textarea>
        </div>
        <div class="Form-group">
            <label for = "price" > Editar precio </label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" value ="{{$product->price}}" require>
        </div>
</br>
        <button type="submit" class="btn btn-primary"> Modificar </button>
@stop 