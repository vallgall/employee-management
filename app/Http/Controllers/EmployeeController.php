<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;


class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $query = Employee::query();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%$search%")
                  ->orWhereHas('department', function ($q) use ($search) {
                      $q->where('name', 'LIKE', "%$search%");
                  });
        }

        $employees = $query->paginate(5);  // Paginar resultados

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required',
            'password' => 'required',
            'department_id' => 'required'
        ]);

        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->password = bcrypt($request->input('password'));
        $employee->department_id = $request->input('department_id');
        $employee->save();

        return redirect()->route('employees.index')->with('message', 'Empleado creado exitosamente.');
    }

    public function edit(Employee $employee)
    {
        $departments = Department::all();
        return view('employees.edit', compact('employee', 'departments'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,'.$employee->id,
            'phone' => 'required',
            'department_id' => 'required'
        ]);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->department_id = $request->input('department_id');
        $employee->save();

        return redirect()->route('employees.index')->with('message', 'Empleado actualizado exitosamente.');
    }

    public function confirmDelete(Employee $employee)
    {
        return view('employees.confirm-delete', compact('employee'));
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('message', 'Empleado eliminado exitosamente.');
    }
}
