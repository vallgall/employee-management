@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar empleado</h1>

        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="text" name="phone" class="form-control" value="{{ $employee->phone }}">
            </div>
            <div class="form-group">
                <label for="department">Departamento:</label>
                <select name="department_id" class="form-control">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar empleado</button>
        </form>
    </div>
@endsection
