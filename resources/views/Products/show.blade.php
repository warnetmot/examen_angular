@extends('adminlte::page')

@section('title', 'Detalles del Producto')

@section('content_header')
    <h1>Detalles del Producto</h1>
@stop

@section('content')
<div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$product -> name}} </h3>
        </div>    
    <div class="card">
        <div class="card-body">
            <p> <strong>Descripcion</strong>{{$product->description}}</p>
            <p> <strong>Precio</strong>{{$product->price}}</p>
        </div>    
    </div>
        <br>
    <div class="card-footer">
        <a href="{{ route('products.index') }}" class="btn btn-primary">Atrás</a>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-dark">actualizar</a>
        <form action="{{ route('products.destroy', $product)}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="bubmit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</div>

@stop
