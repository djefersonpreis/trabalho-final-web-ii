@extends("layout")

@section('titulo')
    Afazeres
@stop

@section('conteudo')
    <h1 class="text-center">Lista de Afazeres</h1>
    <a href="{{ route("todo.create") }}" class="btn btn-outline-success">Nova Pendência</a>
    <a href="{{ route("grupos.listagem") }}" class="btn btn-outline-warning">Novo Grupo</a>
    <hr>

    <div class="row">
        @each('todo.card', $todos, 'todo')
    </div>
@stop
