@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-6">
                <!-- Barra de búsqueda -->
                <form action="{{ route('employees.index') }}" method="GET" class="form-inline">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Buscar...">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                <!-- Enlace para agregar un nuevo empleado -->
                <a href="{{ route('employees.create') }}" class="btn btn-primary">Agregar Empleado</a>
            </div>
        </div>

        <h1>List of Employees</h1>

        @if ($employees->isEmpty())
            <p>No hay empleados.</p>
        @else
        
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Departamento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->department ? $employee->department->name : 'N/A' }}</td>
                                <td>
                                    <!-- Aquí puedes agregar enlaces para editar y eliminar -->
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Botones de paginación -->
            <div class="d-flex justify-content-between">
                @if ($employees->onFirstPage())
                    <span class="btn btn-secondary disabled">Previous</span>
                @else
                    <a href="{{ $employees->previousPageUrl() }}" class="btn btn-primary">Previous</a>
                @endif

                @if ($employees->hasMorePages())
                    <a href="{{ $employees->nextPageUrl() }}" class="btn btn-primary">Next</a>
                @else
                    <span class="btn btn-secondary disabled">Next</span>
                @endif
            </div>
            
        @endif
        
    </div>
@endsection

