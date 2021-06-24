@extends("layout")

@section('titulo')
    Detalhamento da Pendência
@stop

@section('conteudo')
    <h1 class="text-center">Detalhamento da Pendência #{{ $todo->id }}</h1>
    <a href="{{ route("todo.index") }}" class="btn btn-outline-warning">Voltar</a>
    <hr>
    <section class="container">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header text-center bg-transparent">
                <h3 class="text-uppercase card-title m-3">{{ $todo->title }}</h3>
                <div class="text-muted row">
                    <small class="col-4">Criado em:</small>
                    <small class="col-4">Data Limite:</small>
                    <small class="col-4">Última Modificação:</small>
                </div>
                <div class="text-muted row">
                    <small class="col-4">{{ $todo->created_at }} </small>
                    <small class="col-4">{{ $todo->date_todo }} </small>
                    <small class="col-4">{{ $todo->updated_at }} </small>
                </div>
            </div>
            <div class="card-body">
                <div class="row col-xs-12 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                    <a href="{{ route("todo.edit", $todo->id) }}" class="col-6 btn btn-outline-info">Editar</a>
                    <a href="{{ route("todo.remove", $todo->id) }}" class="col-6 btn btn-outline-danger">Remover</a>
                </div>
                <b class="card-subtitle">Descrição:</b>
                <br/>
                <span class="card-text text-capitalize m-3">{{ $todo->description }}</span>
            </div>
        </div>
        <hr>

        @if ($comments)
            <div class="row border border-dark">
                <h3>Comentários</h3>
                <br/>
                @each('todo.card-comment', $comments, 'comment')
            </div>
        @endif

    </section>
    <section>
        <div class="border border-dark p-3">
        <form method="POST" action="{{ route("comment.store", $todo->id) }}">
            @csrf
            <div class="form-group">
                <h5><label for="comment">Novo Comentário:</label></h5>
                <textarea rows="5" cols="50" class="form-control" id="comment" name="comment" placeholder="Escreva aqui um novo comentário..." maxlength="3000"></textarea>
            </div>
            <input type="hidden" id="todo_id" name="todo_id" value="{{ $todo->id }}"/>
            <br/>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </section>
@stop
