<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Note;

class NoteController extends Controller
{
    public function index() {
        $notes = DB::table('notes')->latest()->paginate(16);
        $notesNumber = DB::table('notes')->count();
        return view('notes', ['notes' => $notes, 'number' => $notesNumber]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'color' => 'required',
            'description' => 'required',
            'post' => 'required',
        ]);
        
        $note = new Note;
        $note->title = $request->input('title');
        $note->color = $request->input('color');
        $note->description = $request->input('description');
        $note->post = $request->input('post');
        $note->save();

        return redirect('/notes')->with('response', 'Notes hozzáadva');
    }

    public function edit(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'color' => 'required',
            'description' => 'required',            
            'post' => 'required',
        ]);
        
        $note = new Note;
        $note->title = $request->input('title');
        $note->color = $request->input('color');
        $note->description = $request->input('description');
        $note->post = $request->input('post');
        $data = array(
            'title' => $note->title,
            'color' => $note->color,
            'description' => $note->description,
            'post' => $note->post,
            
        );
        Note::where('id', $id)->update($data);
        $note->update();
        return redirect('/notes')->with('response', 'Notes Szerkesztve');
    }

    public function destroy($id) {
        Note::where('id', $id)->delete();
        return redirect('/notes')->with('response', 'Note törölve');
    }
}
