<?php

namespace App\Http\Controllers;

use App\Models\Employee; // se importa el modelo para hacer las consultas
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * 1. Listado por ID ascendente
     * Devuelve todos los empleados ordenados por emp_id de menor a mayor.
     */
    public function byId()
    {
        // orderBy para ordenar de forma ascendente (asc)
        $employees = Employee::orderBy('emp_id', 'asc')->get();

        // Enviamos el resultado a la vista común 'employees.index'
        return view('employees.index', compact('employees'));
    }

    /**
     * 2. Listado por apellidos y nombre
     * Ordena por emp_lastname y, en caso de empate, por emp_firstname.
     */
    public function byLastName()
    {
        // Encadenamos dos orderBy para solucionar los empates
        $employees = Employee::orderBy('emp_lastname', 'asc')
                             ->orderBy('emp_firstname', 'asc')
                             ->get();

        return view('employees.index', compact('employees'));
    }

    /**
     * 3. Subconjunto por letra inicial de apellido
     * Filtra los que empiezan por "A" usando LIKE y ordena por apellido y nombre.
     */
    public function lastNameStartsWith()
    {
        // 'A%': que empieza por
        $employees = Employee::where('emp_lastname', 'like', 'X%')
                             ->orderBy('emp_lastname', 'asc')
                             ->orderBy('emp_firstname', 'asc')
                             ->get();

        return view('employees.index', compact('employees'));
    }

    /**
     * 4. Subconjunto por año de nacimiento (Año 1990 fijo)
     * Filtra los nacidos en 1990 y ordena por apellido y nombre.
     */
    public function bornIn()
    {
        // whereYear aísla directamente el año del campo de tipo date (emp_birth_date)
        $employees = Employee::whereYear('emp_birth_date', 1990)
                             ->orderBy('emp_lastname', 'asc')
                             ->orderBy('emp_firstname', 'asc')
                             ->get();

        return view('employees.index', compact('employees'));
    }
}
