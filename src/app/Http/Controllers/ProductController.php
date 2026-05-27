<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * 1. GET /api/product
     * Devuelve el listado completo de productos en formato JSON.
     */
    public function index(): JsonResponse
    {
        $products = Product::all();

        return response()->json([
            'success' => true,
            'data' => $products
        ], 200);
    }

    /**
     * 2. POST /api/product
     * Registra un nuevo producto en la base de datos.
     */
    public function store(Request $request): JsonResponse
    {
        // De momento usamos Request normal (en el paso 5 usaremos el validado)
        $product = Product::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Producto creado correctamente.',
            'data' => $product
        ], 201); // 201 significa "Recurso Creado con Éxito"
    }

    /**
     * 3. GET /api/product/{product}
     * Muestra la ficha de un producto usando Route Model Binding.
     */
    public function show(Product $product): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $product
        ], 200);
    }

    /**
     * 4. PUT/PATCH /api/product/{product}
     * Actualiza los datos de un producto existente.
     */
    public function update(Request $request, Product $product): JsonResponse
    {
        $product->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Producto actualizado correctamente.',
            'data' => $product
        ], 200);
    }

    /**
     * 5. DELETE /api/product/{product}
     * Elimina por completo un producto del inventario.
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Producto eliminado correctamente.'
        ], 200);
    }
}
