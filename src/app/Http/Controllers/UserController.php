<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Muestra el listado completo de usuarios en la raíz (/).
     */
    public function index() {
        $usuarios = User::all();
        return view('users.index', compact('usuarios'));
    }
    public function usersWithResources()
{
    $usuarios = User::with('recursos')
                    ->has('recursos')
                    ->get();

    return view('users.withResources', compact('usuarios'));
}

    /**
     * MÉTODO COMENTADO (Ya no es necesario tras importar el SQL del profesor)
     * * public function create() {
     * $usuario = new User();
     * $usuario->name = 'María García';
     * $usuario->email = 'mgarcia@example.com';
     * $usuario->password = Hash::make('123456');
     * $usuario->age = 30;
     * $usuario->address = 'Calle Mayor 1';
     * $usuario->zipCode = 28080;
     * $usuario->save();
     *
     * User::create([
     * 'name' => 'Juan Pérez', 'email' => 'jperez@example.com',
     * 'password' => Hash::make('password'), 'age' => 25,
     * 'address' => 'Calle Falsa 123', 'zipCode' => 28080
     * ]);
     *
     * User::create([
     * 'name' => 'José Flores', 'email' => 'jflores@example.com',
     * 'password' => Hash::make('flores'), 'age' => 25,
     * 'address' => 'Calle Falsa 123', 'zipCode' => 28080
     * ]);
     *
     * return redirect()->route('user.index');
     * }
     */

    /**
     * Gestión de consultas avanzadas y filtros (/filter).
     */
    public function filter() {

        // --- Ejemplo 1: Usar 'where' con AND (Activo por defecto) ---
        //$usuarios = User::where('age', '>=', 18)
        //                ->where('zipCode', '=', 28080)
        //                ->get();

        // --- Ejemplo 2: Usar 'where' con OR ---
        // $usuarios = User::where('age', '>=', 18)->orWhere('zipCode', '=', 28080)->get();

        // --- Ejemplo 3: Usar 'where' con BETWEEN ---
        $usuarios = User::whereBetween('age', [18,30])->get();

        // --- Ejemplo 4: Usar 'where' con LIKE (búsqueda por patrón) ---
        // $usuarios = User::where('name', 'like', 'Juan%')->get();

        // --- Ejemplo 5: Usar 'where' con NOT LIKE ---
        // $usuarios = User::where('name', 'not like', 'Juan%')->get();

        // --- Ejemplo 6: Usar 'whereIn' para buscar por múltiples valores ---
        // $usuarios = User::whereIn('zipCode', [28080, 28081, 28082])->get();

        // --- Ejemplo 7: Usar 'whereNull' para encontrar valores nulos ---
        // $usuarios = User::whereNull('address')->get();

        // --- Ejemplo 8: Usar 'whereNotNull' para encontrar valores no nulos ---
        // $usuarios = User::whereNotNull('address')->get();

        // --- Ejemplo 9: Usar 'orWhereIn' con 'or' y 'whereIn' ---
        // $usuarios = User::where('age', '>=', 18)->orWhereIn('zipCode', [28080, 28081])->get();

        // --- Ejemplo 10: Usar 'whereDate' para filtrar por fecha ---
        // $usuarios = User::whereDate('created_at', '2025-10-08')->get();

        // --- Ejemplo 11: Usar 'whereDay' para filtrar por el día ---
        // $usuarios = User::whereDay('created_at', 8)->get();

        // --- Ejemplo 12: Usar 'whereMonth' para filtrar por el mes ---
        // $usuarios = User::whereMonth('created_at', '10')->get();


        // Retornamos la vista con la variable filtrada
        return view('users.index', compact('usuarios'));
    }
}
