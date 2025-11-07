<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.employees', array('employees' => $employees));
    }
    public function showFormEmployees()
    {
        return view('employees.register');
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'rg' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'admission_date' => 'required|date',
            'birth_date' => 'nullable|date'
        ]);
        Employee::create($validated);
        return redirect()->route('employees.register')->with('success', 'Funcionário cadastrado com sucesso!');
    }
}
