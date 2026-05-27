@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <div style="background-color: #2ecc71; color: white; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
        <h2 style="margin: 0;">✨ Modo: Añadir Nuevo Producto</h2>
        <p style="margin: 5px 0 0 0; font-size: 0.9em; opacity: 0.9;">Introduce los datos para registrar un artículo limpio en el inventario.</p>
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

    <div class="card" style="background: white; padding: 20px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Nombre del Producto:</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Ej. Teclado Mecánico RGB" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                @error('name')
                    <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Descripción:</label>
                <textarea name="description" rows="3" placeholder="Escribe aquí los detalles (mínimo 10 caracteres)..." style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 15px; display: flex; gap: 15px;">
                <div style="flex: 1;">
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Precio (€):</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price') }}" placeholder="0.00" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    @error('price')
                        <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                    @enderror
                </div>
                <div style="flex: 1;">
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Stock (Cantidad):</label>
                    <input type="number" name="stock" value="{{ old('stock') }}" placeholder="0" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
                    @error('stock')
                        <div class="alert alert-danger" style="color: #721c24; font-size: 0.85em; margin-top: 5px; font-weight: bold;">❌ {{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" style="background-color: #2ecc71; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: bold; font-size: 1em;">📥 Guardar en Base de Datos</button>
            <a href="{{ route('product.index') }}" style="margin-left: 15px; color: #7f8c8d; text-decoration: none; font-weight: bold;">Cancelar</a>
        </form>
    </div>
@endsection
