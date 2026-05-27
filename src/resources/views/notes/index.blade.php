@extends('layouts.app')

@section('title', 'Listado de Notas')

@section('content')
    <h2>Mis Notas Guardadas</h2>

    @forelse ($notes as $note)
        <div class="card">
            <h3>
                <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a>
            </h3>
            <p>{{ $note->description }}</p>
            <small style="color: #7f8c8d;">Fecha límite: {{ $note->date }}</small>

            <div style="margin-top: 10px;">
                <a href="{{ route('note.edit', $note->id) }}" class="btn-edit" style="background-color: #3498db; color: white; text-decoration: none; padding: 6px 12px; border-radius: 4px; font-size: 0.9em; margin-right: 5px; display: inline-block;">Editar</a>

                <form action="{{ route('note.destroy', $note->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-delete" onclick="return confirm('¿Seguro que quieres borrar esta nota?')">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p style="background: #fff; padding: 20px; border-radius: 6px; text-align: center; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
            No hay notas disponibles. ¡Comienza creando una nueva!
        </p>
    @endforelse
@endsection
