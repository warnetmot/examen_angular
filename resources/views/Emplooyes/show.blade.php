@extends('adminlte::page')

@section('title', 'Detalles del Empleado')

@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
<div class="container">
    <h3>Empleado: {{ $emplooye->first_name }} {{ $emplooye->last_name }}</h3>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $emplooye->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $emplooye->first_name }} {{ $emplooye->last_name }}</td>
            </tr>
            <tr>
                <th>Cédula</th>
                <td>{{ $emplooye->ci }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $emplooye->email }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $emplooye->phone }}</td>
            </tr>
            <tr>
                <th>Fecha de Nacimiento</th>
                <td>{{ $emplooye->birth_date }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $emplooye->address }}</td>
            </tr>
            <tr>
                <th>Ciudad</th>
                <td>{{ $emplooye->city }}</td>
            </tr>
            <tr>
                <th>País</th>
                <td>{{ $emplooye->country }}</td>
            </tr>
            <tr>
                <th>Departamento</th>
                <td>{{ $emplooye->department->name }}</td>
            </tr>
            <tr>
                <th>Posición</th>
                <td>{{ $emplooye->position->job }}</td>
            </tr>
            <tr>
                <th>Fecha de Contratación</th>
                <td>{{ $emplooye->hire_date }}</td>
            </tr>
            <tr>
                <th>Salario</th>
                <td>${{ number_format($emplooye->salary, 2) }}</td>
            </tr>
            <tr>
                <th>Género</th>
                <td>{{ ucfirst($emplooye->gender) }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('Emplooyes.edit', $emplooye) }}" class="btn btn-dark">Editar</a>

    <form action="{{ route('Emplooyes.destroy', $emplooye) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>

    <a href="{{ route('Emplooyes.index') }}" class="btn btn-secondary">Atras</a>
</div>
@stop
