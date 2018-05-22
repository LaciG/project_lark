<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ToDo;

class ToDoController extends Controller
{
    public function index() {
        $todos = DB::table('todo')->latest()->paginate(10); 
        $todoCount = DB::table('todo')->count();
        $labels = DB::table('label')->get();

        return view('todo', ['todos' => $todos, 'todoNumber' => $todoCount, 'labels' => $labels]);
    }

    public function store(Request $request) {
        return redirect('/todo')->with('response', 'Todo List Hozzáadva');
    }

    public function storeLabel(Request $request) {
        return redirect('/todo')->with('response', 'Label Hozzáadva');
    }
}
