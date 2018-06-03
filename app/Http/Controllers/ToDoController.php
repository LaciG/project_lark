<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ToDo;
use App\Label;

class ToDoController extends Controller
{
    public function index() {
        $todos = DB::table('todo')->latest()->paginate(10); 
        $todoCount = DB::table('todo')->count();
        $labels = DB::table('label')->orderBy('name', 'asc')->get();

        return view('todo', ['todos' => $todos, 'todoNumber' => $todoCount, 'labels' => $labels]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'label' => 'required',
            'priority' => 'required',
        ]);

        $todo = new ToDo;
        $todo->name = $request->input('name');
        $todo->label = $request->input('label');
        $todo->priority = $request->input('priority');
        $todo->save();

        return redirect('/todo')->with('response', 'Todo List Hozzáadva');
    }

    public function storeLabel(Request $request) {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $label = new Label;
        $label->name = $request->input('name');
        $label->save();

        return redirect('/todo')->with('response', 'Label Hozzáadva');
    }

    public function destroy($id) {
        ToDo::where('id', $id)->delete();
        return redirect('/todo')->with('response', 'Todo törölve');
    }
}
