@extends('landing.layouts.landing')

@section('title', 'Nuestros Servicios - Ciudades')

@section('content')
    <h1>Destinos disponibles actualmente</h1>

    <div class="services-grid">
        <x-card ciudad="Copenhague" precio="180" duracion="4" imagen="assets/images/copenhague.jpeg" link="https://www.visitcopenhagen.com">
            Explora la capital de Dinamarca, sus monumentos, edificios y su increíble ambiente.
        </x-card>

        <x-card ciudad="Estambul" precio="90" duracion="3" imagen="assets/images/estambul.jpg" link="https://www.estambul.es">
            Disfruta de la mezcla entre modernismo e historia. Dos continentes, una ciudad.
        </x-card>

        <x-card ciudad="Sevilla" precio="100" duracion="2" imagen="assets/images/sevilla.jpg" link="https://visitasevilla.es">
            Descubre el color especial de Sevilla, la Giralda, el Alcázar y su gastronomía.
        </x-card>
    </div>
@endsection
