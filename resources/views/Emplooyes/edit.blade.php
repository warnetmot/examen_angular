@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Edición</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('Emplooyes.update', $emplooye) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Nombre</label>
                            <input type="text" name="first_name" id="first_name" class="form-control form-control-sm" value="{{ old('first_name', $emplooye->first_name) }}" required>
                            @error('first_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="last_name">Apellido</label>
                            <input type="text" name="last_name" id="last_name" class="form-control form-control-sm" value="{{ old('last_name', $emplooye->last_name) }}" required>
                            @error('last_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ci">Cédula de Identidad</label>
                            <input type="text" name="ci" id="ci" class="form-control form-control-sm" value="{{ old('ci', $emplooye->ci) }}" required>
                            @error('ci')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm" value="{{ old('email', $emplooye->email) }}" required>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" name="phone" id="phone" class="form-control form-control-sm" value="{{ old('phone', $emplooye->phone) }}">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="address" id="address" class="form-control form-control-sm" value="{{ old('address', $emplooye->address) }}">
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Ciudad</label>
                            <input type="text" name="city" id="city" class="form-control form-control-sm" value="{{ old('city', $emplooye->city) }}">
                            @error('city')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country">País</label>
                            <input type="text" name="country" id="country" class="form-control form-control-sm" value="{{ old('country', $emplooye->country) }}">
                            @error('country')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="position_id">Posición</label>
                            <select name="position_id" id="position_id" class="form-control form-control-sm" required>
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ old('position_id', $emplooye->position_id) == $position->id ? 'selected' : '' }}>
                                        {{ $position->job }}
                                    </option>
                                @endforeach
                            </select>
                            @error('position_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="department_id">Departamento</label>
                            <select name="department_id" id="department_id" class="form-control form-control-sm" required>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}" {{ old('department_id', $emplooye->department_id) == $department->id ? 'selected' : '' }}>
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hire_date">Fecha de Contratación</label>
                            <input type="date" name="hire_date" id="hire_date" class="form-control form-control-sm" value="{{ old('hire_date', $emplooye->hire_date) }}" required>
                            @error('hire_date')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="salary">Salario</label>
                            <input type="text" name="salary" id="salary" class="form-control form-control-sm" value="{{ old('salary', $emplooye->salary) }}" required>
                            @error('salary')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender">Género</label>
                    <select name="gender" id="gender" class="form-control form-control-sm" required>
                        <option value="masculino" {{ old('gender', $emplooye->gender) == 'masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="femenino" {{ old('gender', $emplooye->gender) == 'femenino' ? 'selected' : '' }}>Femenino</option>
                        <option value="otro" {{ old('gender', $emplooye->gender) == 'otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                    @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('Emplooyes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
