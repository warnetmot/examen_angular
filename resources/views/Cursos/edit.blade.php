@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar curso</h1>
@stop

@section('content')
    <form action="{{ route('Cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="{{ $curso->titulo }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ $curso->descripcion }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="aula">Aula</label>
                    <input type="text" id="aula" name="aula" class="form-control" value="{{ $curso->aula }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="docente">Docente</label>
                    <input type="text" id="docente" name="docente" class="form-control" value="{{ $curso->docente }}" required>
                </div> 
            </div>
            
        </div>

        <div class="row">
        <div class="col-md-6">
                <div class="form-group">
                    <label for="docente">docente</label>
                    <input type="text" id="docente" name="docente" class="form-control" value="{{ $curso->docente }}" required>
                </div> 
            </div>
           
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cupos">Cupos</label>
                    <input type="text" id="cupos" name="cupos" class="form-control" value="{{ $curso->cupos }}" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
