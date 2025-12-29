<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
            'color' => 'required|in:blue,yellow'
        ]);

        if ($validator->fails()) {
            return redirect()->route('notes.index')->withErrors($validator);
        }

        Note::create($request->only(['content', 'color']));

        return redirect()->route('notes.index')->with('success', 'Note added');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success', 'Note deleted');
    }
}
