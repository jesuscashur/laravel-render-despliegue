<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado a realizar esta petición.
     * Lo cambiamos a true para que permita a cualquiera validar el formulario.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Define las reglas de validación que se aplicarán a los campos del formulario.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
        ];
    }
}
