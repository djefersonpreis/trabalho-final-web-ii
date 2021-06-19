<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\DB;
use App\Models\TodoGrupo;
use App\Models\Todo;


use Illuminate\Http\Request;

class TodoController extends Controller {

    public function index() {
        if(view()->exists('todo.index')) {
            return view('todo.index', [
                'grupos' => TodoGrupos::get(),
                'todos' => Todo::get()
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function create() {
        if(view()->exists('todo.create')) {
            return view('todo.create', [
                'grupos' => TodoGrupos::get()
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function store(Request $request){
        Todo::create($request->except("_token"));
        return redirect(route("todo.index"));
    }

    public function edit($todo_id){
        if(view()->exists('todo.edit')) {
            $todo = Todo::where("id", $todo_id)->get()->first();

            return view('todo.edit', [
                'todo' => $todo,
                'grupos' => TodoGrupos::get()
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function update(Request $request, $todo_id){
        Todo::where("id", $todo_id)->update($request->except("_token"));
        return redirect(route("todo.index"));
    }

    public function remove($todo_id){
        Todo::where("id", $todo_id)->delete();
        return redirect(route("todo.index"));
    }
}
