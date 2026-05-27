@extends('layouts.app')

@section('title', 'Detalle de Nota')

@section('content')
    <div class="card" style="background: white; padding: 25px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <h2>{{ $note->title }}</h2>
        <hr style="border: 0; border-top: 1px solid #eee; margin: 15px 0;">

        <p style="font-size: 1.1em; line-height: 1.6;">{{ $note->description }}</p>

        <p><strong>Fecha límite:</strong> {{ $note->date }}</p>

        <p><strong>Estado:</strong>
            <span style="padding: 3px 8px; border-radius: 4px; font-weight: bold; color: white; background-color: {{ $note->done ? '#2ecc71' : '#e67e22' }};">
                {{ $note->done ? 'Completada' : 'Pendiente' }}
            </span>
        </p>

        <div style="margin-top: 20px;">
            <a href="{{ route('note.index') }}" style="background-color: #7f8c8d; color: white; text-decoration: none; padding: 8px 15px; border-radius: 4px; font-weight: bold; display: inline-block;">Volver al listado</a>
        </div>
    </div>
@endsection
