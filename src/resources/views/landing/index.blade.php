@extends('landing.layouts.landing')

@section('title', 'Agencia de Viajes JesCashur')

@section('content')
    <div style="text-align: center; margin-top: 50px;">
        <h1>Agencia de viajes JesCasHur</h1>
        <img src="{{ asset('assets/images/portada.jpg') }}" alt="Portada" style="display: block; margin: 0 auto; width: 80%; max-width: 800px; border-radius: 15px;">
        <p style="margin-top: 20px; font-size: 1.2rem;">Tu próximo destino a tan solo un clic de distancia.</p>
    </div>
@endsection
