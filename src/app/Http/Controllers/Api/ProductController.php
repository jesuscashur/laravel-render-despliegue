<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Http\Requests\ProductRequest; // 👈 CAMBIO 1: Importamos tu validador específico
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * GET /api/product
     * Devuelve el listado completo usando ProductResource::collection()
     */
    public function index(): JsonResponse
    {
        $products = Product::all();

        return response()->json([
            'success' => true,
            'data' => ProductResource::collection($products)
        ], 200);
    }

    /**
     * POST /api/product
     */
    // 👈 CAMBIO 2: Inyectamos ProductRequest en lugar de Request
    public function store(ProductRequest $request): JsonResponse
    {
        // 👈 CAMBIO 3: Usamos $request->validated() para usar solo los datos limpios
        $product = Product::create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Producto creado correctamente.',
            'data' => new ProductResource($product)
        ], 201);
    }

    /**
     * GET /api/product/{product}
     * Muestra la ficha usando new ProductResource($product)
     */
    public function show(Product $product): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new ProductResource($product)
        ], 200);
    }

    /**
     * PUT/PATCH /api/product/{product}
     */
    // 👈 CAMBIO 4: Inyectamos ProductRequest aquí también
    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        // 👈 CAMBIO 5: Protegemos la actualización con $request->validated()
        $product->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Producto actualizado correctamente.',
            'data' => new ProductResource($product)
        ], 200);
    }

    /**
     * DELETE /api/product/{product}
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
