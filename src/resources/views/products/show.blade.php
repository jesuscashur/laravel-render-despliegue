@extends('layouts.app')

@section('title', 'Detalle del Producto')

@section('content')
    <div style="background-color: #34495e; color: white; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
        <h2 style="margin: 0;">🔍 Vista: Detalles del Producto</h2>
        <p style="margin: 5px 0 0 0; font-size: 0.9em; opacity: 0.9;">Estás consultando la ficha técnica oficial en el sistema.</p>
    </div>

    <div class="card" style="background: white; padding: 25px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); border-left: 5px solid #34495e;">
        <h2 style="color: #2c3e50; margin-top: 0;">📦 {{ $product->name }}</h2>
        <p style="color: #95a5a6; font-size: 0.85em; margin: -10px 0 15px 0;">ID del Registro: #{{ $product->id }}</p>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 15px 0;">

        <div style="margin-bottom: 20px;">
            <strong style="display: block; color: #34495e; margin-bottom: 5px; font-size: 1.1em;">Descripción del Artículo:</strong>
            <p style="font-size: 1.05em; line-height: 1.6; color: #555; background-color: #f9f9f9; padding: 15px; border-radius: 4px; margin: 0;">
                {{ $product->description ?: '📝 Este producto no tiene ninguna descripción todavía.' }}
            </p>
        </div>

        <div style="display: flex; gap: 30px; margin: 25px 0; background-color: #f4f6f7; padding: 15px; border-radius: 6px;">
            <p style="font-size: 1.2em; margin: 0;">
                <strong>Precio de Venta:</strong>
                <span style="color: #2e7d32; font-weight: bold; background: #e8f5e9; padding: 4px 10px; border-radius: 4px;">{{ number_format($product->price, 2) }}€</span>
            </p>
            <p style="font-size: 1.2em; margin: 0;">
                <strong>Stock en Almacén:</strong>
                <span style="font-weight: bold; color: #c0392b; background: #fdeaea; padding: 4px 10px; border-radius: 4px;">{{ $product->stock }} unidades</span>
            </p>
        </div>

        <hr style="border: 0; border-top: 1px solid #eee; margin: 15px 0;">

        <div style="display: flex; gap: 10px;">
            <a href="{{ route('product.index') }}" style="background-color: #7f8c8d; color: white; text-decoration: none; padding: 10px 15px; border-radius: 4px; font-weight: bold;">⬅️ Volver al listado</a>
            <a href="{{ route('product.edit', $product->id) }}" style="background-color: #3498db; color: white; text-decoration: none; padding: 10px 15px; border-radius: 4px; font-weight: bold;">✏️ Modificar datos</a>
        </div>
    </div>
@endsection
