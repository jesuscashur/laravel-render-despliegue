<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a realizar esta petición.
     */
    public function authorize(): bool
    {
        //Cambiar a true para que Laravel permita validar
        return true;
    }

    /**
     * Obtén las reglas de validación que se aplican a la petición.
     */
    public function rules(): array
    {
        return [
            'name'        => 'required|string|min:3|max:255',
            'description' => 'required|string|min:10',
            'price'       => 'required|numeric|min:0|max:9999.99',
            'stock'       => 'required|integer|min:0|max:10000',
        ];
    }
}
