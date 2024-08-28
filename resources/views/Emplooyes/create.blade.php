@extends('adminlte::page')

@section('title', 'Crear Empleado')

@section('content_header')
    <h1>Crear Nuevo Empleado</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Creación</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('Emplooyes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre</label>
                            <input type="text" name="first_name" id="first_name" class="form-control form-control-sm" required>
                            @error('first_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" required>
                            @error('last_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ci">Cédula de Identidad</label>
                    <input type="text" name="ci" id="ci" class="form-control form-control-sm" required>
                    @error('ci')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm" required>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" name="phone" id="phone" class="form-control form-control-sm">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="birth_date">Fecha de Nacimiento</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control form-control-sm" required>
                            @error('birth_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" name="address" id="address" class="form-control form-control-sm">
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Ciudad</label>
                            <input type="text" name="city" id="city" class="form-control form-control-sm">
                            @error('city')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">País</label>
                            <input type="text" name="country" id="country" class="form-control form-control-sm">
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="position_id">Posición</label>
                    <select name="position_id" id="position_id" class="form-control form-control-sm" required>
                        @foreach ($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->job }}</option>
                        @endforeach
                    </select>
                    @error('position_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="department_id">Departamento</label>
                    <select name="department_id" id="department_id" class="form-control form-control-sm" required>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                    @error('department_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hire_date">Fecha de Contratación</label>
                    <input type="date" name="hire_date" id="hire_date" class="form-control form-control-sm" required>
                    @error('hire_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="salary">Salario</label>
                    <input type="text" name="salary" id="salary" class="form-control form-control-sm" required>
                    @error('salary')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gender">Género</label>
                    <select name="gender" id="gender" class="form-control form-control-sm" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                    @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
