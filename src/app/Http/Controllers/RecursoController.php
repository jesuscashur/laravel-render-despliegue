<?php

namespace App\Http\Controllers;

use App\Models\Recurso;
use App\Models\User;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    /**
     * Muestra el listado de todos los recursos y sus usuarios dueños.
     */
    public function index()
    {
        $recursos = Recurso::with('user')->get();
        return view('recursos.index', compact('recursos'));
    }

    /**
     * Crea recursos automáticamente sin obligar a meter IDs a capón.
     * Si se le pasa un ID en la URL (ej: /create/4) lo usa. Si no, usa el primer usuario que encuentre.
     */
    public function createForUser($id = null)
    {
        // Si hay ID en la URL lo busca, si no, coge al primero de los 30 del profesor
        // Si hay ID en la URL lo usa, si no, coge un usuario al azar (RANDOM) de la base de datos
        $user = $id ? User::findOrFail($id) : User::inRandomOrder()->first();
        if (!$user) {
            return "Error: No hay ningún usuario en la base de datos. ¡Primero mete los 30 del profesor!";
        }

        // Creamos el recurso asociado al usuario encontrado
        Recurso::create([
            'user_id' => $user->id,
            'titulo' => 'Recurso automático para ' . $user->name,
            'descripcion' => 'Este recurso se ha asignado solo sin meter IDs a capón.'
        ]);

        return redirect()->route('recursos.index');
    }
}
