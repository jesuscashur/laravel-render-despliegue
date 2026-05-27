@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>📦 Gestión de Productos</h2>
        <a href="{{ route('product.create') }}" style="background-color: #2ecc71; color: white; text-decoration: none; padding: 10px 15px; border-radius: 4px; font-weight: bold;">+ Añadir Producto</a>
    </div>

    <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 6px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <thead>
            <tr style="background-color: #2c3e50; color: white; text-align: left;">
                <th style="padding: 12px 15px;">Nombre</th>
                <th style="padding: 12px 15px;">Precio</th>
                <th style="padding: 12px 15px;">Stock</th>
                <th style="padding: 12px 15px; text-align: center;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr style="border-bottom: 1px solid #eee;">
                    <td style="padding: 12px 15px;">
                        <a href="{{ route('product.show', $product->id) }}" style="color: #2c3e50; font-weight: bold; text-decoration: none;">{{ $product->name }}</a>
                    </td>
                    <td style="padding: 12px 15px;">{{ number_format($product->price, 2) }}€</td>
                    <td style="padding: 12px 15px;">{{ $product->stock }} uds</td>
                    <td style="padding: 12px 15px; text-align: center;">
                        <a href="{{ route('product.edit', $product->id) }}" style="color: white; background-color: #3498db; text-decoration: none; padding: 6px 12px; border-radius: 4px; font-size: 0.9em; margin-right: 5px; display: inline-block;">Editar</a>

                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-size: 0.9em;" onclick="return confirm('¿Seguro que quieres eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding: 20px; text-align: center; color: #7f8c8d;">No hay productos disponibles.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
