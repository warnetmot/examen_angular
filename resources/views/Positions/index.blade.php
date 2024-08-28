@extends('adminlte::page')

@section('title', 'Positons')

@section('content_header')
    <h1>Cargos</h1>
@stop

@section('content')
<a href="{{ route('Positions.create') }}" class="btn btn-primary">agregar cargo</a></br>
<table class="table table-bordered mt-12">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $positions as $position )
                <tr>
                    <td>{{ $position->id }}</td>
                    <td>{{ $position->job }}</td>
                    <td>{{ $position->description }}</td>
                
                    <td>
                        <a href="{{ route('Positions.edit', $position->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Positions.show', $position->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Positions.destroy', $position->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Departamento?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
