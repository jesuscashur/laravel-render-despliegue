@extends('layouts.app')

@section('title', 'Editar Nota')

@section('content')
    <h2>Editar Nota</h2>

    <div style="background: white; padding: 20px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <form action="{{ route('note.update', $note->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Título:</label>
                <input type="text" name="title" value="{{ $note->title }}" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Descripción:</label>
                <textarea name="description" rows="4" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">{{ $note->description }}</textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display:block; font-weight:bold; margin-bottom:5px;">Fecha:</label>
                <input type="date" name="date" value="{{ $note->date }}" required style="padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label style="font-weight:bold;">
                    <input type="checkbox" name="done" value="1" {{ $note->done ? 'checked' : '' }}> Completada
                </label>
            </div>

            <button type="submit" style="background-color: #3498db; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; font-weight: bold;">
                Actualizar
            </button>
            <a href="{{ route('note.index') }}" style="margin-left: 10px; color: #7f8c8d; text-decoration: none;">Cancelar</a>
        </form>
    </div>
@endsection
