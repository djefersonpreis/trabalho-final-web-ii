<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\DB;
use App\Models\TodoGrupo;

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
}
