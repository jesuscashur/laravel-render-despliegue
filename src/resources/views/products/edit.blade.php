@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
    <div style="background-color: #3498db; color: white; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
        <h2 style="margin: 0;">✏️ Modo: Editando Producto</h2>
        <p style="margin: 5px 0 0 0; font-size: 0.9em; opacity: 0.9;">Modificando actualmente: <strong>{{ $product->name }}</strong> (ID: #{{ $product->id }})</p>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
            <strong style="display: block; margin-bottom: 5px;">⚠️ Por favor, corrige los siguientes errores:</strong>
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card" style="background: white; padding: 20px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); border-left: 5px solid #3498db;">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Nombre del Producto:</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}" required style="width: 100%; padding: 8px; border: 1px solid #3498db; border-radius: 4px; box-sizing: border-box; background-color: #f7faff;">
                @error('name')
                    <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Descripción:</label>
                <textarea name="description" rows="3" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px; display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Precio Actual (€):</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    @error('price')
                        <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                    @enderror
                </div>
                <div style="flex: 1;">
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Stock Actual (Cantidad):</label>
                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    @error('stock')
                        <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" style="background-color: #3498db; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: bold; font-size: 1em;">💾 Aplicar Cambios</button>
            <a href="{{ route('product.index') }}" style="margin-left: 15px; color: #7f8c8d; text-decoration: none; font-weight: bold;">Descartar</a>
        </form>
    </div>
@endsection
