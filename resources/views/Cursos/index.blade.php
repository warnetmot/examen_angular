@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1>cursos</h1>
@stop

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    
    <a href="{{ route('Cursos.create') }}" class="btn btn-primary">Agregar Curso</a>

</div>


    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th> 
                <th>Titulo</th>
                <th>Descripcion</th> 
                <th>Aula</th>
                <th>Docente</th>
                <th>Cupos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->titulo}}</td>
                    <td>{{ $curso->descripcion}}</td>
                    <td>{{ $curso->aula }}</td>
                    <td>{{ $curso->docente }}</td>
                    <td>{{ $curso->cupos }}</td>
                    <td>
                        <a href="{{ route('Cursos.edit', $curso->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Cursos.show', $curso->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Estudiante?')">
                          
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
