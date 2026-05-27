@props(['ciudad', 'precio', 'duracion', 'imagen', 'link'])

<div class="card">
    <img src="{{ asset($imagen) }}" alt="{{ $ciudad }}" style="width: 100%; height: 150px; object-fit: cover; border-radius: 4px;">
    <h2>{{ $ciudad }}</h2>
    <p><strong>Precio:</strong> {{ $precio }}€</p>
    <p><strong>Duración:</strong> {{ $duracion }} días</p>
    <div class="card-text">
        {{ $slot }} </div>
    <a href="{{ $link }}" target="_blank" class="btn-link">Más información</a>
</div>
