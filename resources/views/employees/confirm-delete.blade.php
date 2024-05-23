@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Confirmar eliminación de empleado</h1>

        <p>¿Estás seguro de que deseas eliminar este empleado?</p>

        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
