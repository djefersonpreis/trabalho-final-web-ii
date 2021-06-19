<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\DB;
use App\Models\TodoComment;

use Illuminate\Http\Request;

class TodoCommentController extends Controller
{
    public function store(Request $request, $todo_id){
        TodoComment::create($request->except("_token"));
        return redirect(route("todo.detail", $todo_id));
    }

    public function edit($todo_id, $comment_id){
        if(view()->exists('todo-comment.edit')) {
            $todoComment = TodoComment::where(['id' => $comment_id, 'todo_id' => $todo_id])->get()->first();

            return view('todo-comment.edit', [
                'comment' => $todoComment,
                'todo_id' => $todo_id
            ]);
        } else {
            return 'Página não encontrada';
        }
    }

    public function update(Request $request, $todo_id, $comment_id){
        TodoComment::where(['id' => $comment_id, 'todo_id' => $todo_id])->update($request->except("_token"));
        return redirect(route("todo.detail", $todo_id));
    }

    public function remove($todo_id, $comment_id){
        TodoComment::where(['id' => $comment_id, 'todo_id' => $todo_id])->delete();
        return redirect(route("todo.detail", $todo_id));
    }
}
