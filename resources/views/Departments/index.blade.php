@extends('adminlte::page')

@section('title', 'Departments')

@section('content_header')
    <h1>departamentos</h1>
@stop

@section('content')
<a href="{{ route('Departments.create') }}" class="btn btn-primary">agregar Departamento</a></br>
<table class="table table-bordered mt-12">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>localisacion</th>
                
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $departments as $department )
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->location }}</td>
                
                    <td>
                        <a href="{{ route('Departments.edit', $department->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Departments.show', $department->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Departments.destroy', $department->id) }}" method="POST" style="display:inline;">
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
