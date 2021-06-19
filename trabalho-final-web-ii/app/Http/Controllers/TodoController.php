<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\DB;
use App\Models\TodoComment;
use App\Models\TodoGrupo;
use App\Models\Todo;


use Illuminate\Http\Request;

class TodoController extends Controller {

    public function index() {
        if(view()->exists('todo.index')) {

            $todos = Todo::join('todo_groups', 'todo.todo_groups_id', '=', 'todo_groups.id')
                    ->select('todo.id', 'todo.title', 'todo.description', 'todo.status', 'todo.date_todo', 'todo_groups.name')->get();

            return view('todo.index', [
                'todos'     => $todos
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function detail($todo_id) {
        if(view()->exists('todo.detail')) {

            $todo = Todo::where('id', $todo_id)->get()->first();
            $grupo = TodoGrupo::where('id', $todo->todo_grupos_id)->get()->first();
            $comments = TodoComment::where('todo_id', $todo_id)->orderBy('created_at')->get();

            return view('todo.detail', [
                'todo'      => $todo,
                'grupo'     => $grupo,
                'comments'  => $comments
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function create() {
        if(view()->exists('todo.create')) {
            return view('todo.create', [
                'grupos'    => TodoGrupo::get()
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
                'todo'      => $todo,
                'grupos'    => TodoGrupo::get()
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
