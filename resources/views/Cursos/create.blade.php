@extends('adminlte::page')

@section('title', 'Nuevo Curso')

@section('content_header')
    <h1>Crear Curso</h1>
@stop

@section('content') 
    <form action="{{ route('Cursos.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="aula">Aula</label>
                    <input type="text" id="aula" name="aula" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="docente">Docente</label>
                    <input type="text" id="docente" name="docente" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cupos">cupos</label>
                    <input type="text" id="cupos" name="cupos" class="form-control" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

   
@stop
