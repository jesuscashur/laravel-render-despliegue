<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // 1. LISTAR
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    // 2. FORMULARIO CREAR
    public function create()
    {
        return view('notes.create');
    }

    // 3. GUARDAR EN BD
    public function store(Request $request)
    {
        $data = $request->all();
        $data['done'] = $request->has('done');
        Note::create($data);
        return redirect()->route('note.index');
    }


    // 5. FORMULARIO EDICIÓN (¡Revisa que apunte a notes.edit!)
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    // 6. ACTUALIZAR EN BD
    public function update(Request $request, Note $note)
    {
        $data = $request->all();
        $data['done'] = $request->has('done');
        $note->update($data);
        return redirect()->route('note.index');
    }
    /**
 * Muestra una nota individual usando Inyección de Modelo (Forma recomendada).
 */
public function show(Note $note)
{
    // Laravel busca la nota automáticamente tras bambalinas
    return view('notes.show', compact('note'));
}

    // 7. ELIMINAR
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()->route('note.index');
    }
}
