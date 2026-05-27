<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    // Permitimos la asignación masiva de estos campos
    protected $fillable = ['user_id', 'titulo', 'descripcion'];

    /**
     * Relación inversa: Un recurso pertenece a un usuario.
     * ¡Esta es la función que te está reclamando el error de la pantalla!
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
