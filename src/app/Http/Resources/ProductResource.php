<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transforma el recurso de la base de datos en un array JSON personalizado.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'nombre'      => $this->name, // Traducimos 'name' a 'nombre'
            'precio'      => '$' . number_format($this->price, 2), // Formateamos el precio con el '$'
            'stock'       => $this->stock,
            'descripcion' => $this->description, // Traducimos 'description' a 'descripcion'
        ];
    }
}
