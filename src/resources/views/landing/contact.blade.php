@extends('landing.layouts.landing')

@section('title', 'Contacto - Agencia JesCasHur')

@section('content')
<div style="max-width: 900px; margin: 0 auto; padding: 20px; text-align: center;">
    <h1>Contacta con nosotros</h1>

    <div style="margin-bottom: 30px;">
        <img src="{{ asset('assets/images/mapa.jpg') }}" alt="Nuestra ubicación"
             style="width: 100%; max-width: 700px; border: 2px solid #ccc; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    </div>

    <div style="background-color: white; padding: 30px; border-radius: 10px; display: inline-block; text-align: left; border: 1px solid #ddd;">
        <p><strong>📍 Dirección:</strong> Gran Via del Marqués del Túria, 49, L'Eixample, 46005 València, Valencia</p>

        <p><strong>📞 Teléfono:</strong>
            <a href="tel:+34912345678" style="color: #4a148c; text-decoration: none; font-weight: bold;">
                +34 912 345 678
            </a>
        </p>

        <p><strong>✉️ Email:</strong>
            <a href="mailto:info@jescashur.com" style="color: #4a148c; text-decoration: none; font-weight: bold;">
                info@jescashur.com
            </a>
        </p>
    </div>
</div>
@endsection
