<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\DB;
use App\Models\TodoGrupo;
use App\Models\Todo;

use Illuminate\Http\Request;

class TodoGrupoController extends Controller
{
    public function listagem() {
        if(view()->exists('todo-grupos.listagem')) {

            $grupos = TodoGrupo::get();

            return view('todo-grupos.listagem', [
                'grupos' => $grupos
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function create() {
        if(view()->exists('todo-grupos.create')) {
            return view('todo-grupos.create');
        } else {
            return 'Página não encontrada';
        }
    }

    public function store(Request $request){
        TodoGrupo::create($request->except("_token"));
        return redirect(route("grupos.listagem"));
    }

    public function edit($grupo_id){
        if(view()->exists('todo-grupos.edit')) {
            $grupo = TodoGrupo::where("id", $grupo_id)->get()->first();

            return view('todo-grupos.edit', [
                'grupo' => $grupo
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function update(Request $request, $grupo_id){
        TodoGrupo::where("id", $grupo_id)->update($request->except("_token"));
        return redirect(route("grupos.listagem"));
    }

    public function remove($grupo_id){
        $todo = Todo::where("todo_groups_id", $grupo_id)->get()->first();

        if(isset($todo->id) && !is_null($todo->id)){
            return view('todo-grupos.listagem', [
                'grupos' => TodoGrupo::get(),
                'error'  => "Falha ao Remover Grupo. Há registros de To-Do relacionados ao grupo e portanto o mesmo não pode ser removido. Se realmente quiser remover este grupo, remova ou altere o grupo dos registros de To-Do conflitantes."
            ]);
        } else {
            TodoGrupo::where("id", $grupo_id)->delete();
            return redirect(route("grupos.listagem"));
        }
    }
}
