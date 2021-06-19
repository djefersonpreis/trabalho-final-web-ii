@extends("layout")

@section('titulo')
    Detalhamento da Pendência
@stop

@section('conteudo')
    <h1 class="text-center">Detalhamento da Pendência #{{ $todo->id }}</h1>
    <a href="{{ route("todo.index") }}" class="btn btn-outline-warning">Voltar</a>
    <hr>
    <section>
        <h2>{{ $todo->title }}</h2>
        <p>
            <span class="ml-3">Descrição:</span>
            <br />
            {{ $todo->description }}
        </p>
        <hr>
        @foreach ($comments as $c)
            <hr />
            <p> {{ $c->comment }} </p>
            <br />
        @endforeach
    </section>
    <section>
        <form method="POST" action="{{ route("comment.store", $todo->id) }}">
            @csrf
            <div class="form-group">
                <label for="comment">Novo Comentário:</label>
                <textarea rows="5" cols="50" class="form-control" id="comment" name="comment" placeholder="Escreva aqui um novo comentário..."></textarea>
            </div>
            <input type="hidden" id="todo_id" name="todo_id" value="{{ $todo->id }}"/>
            <br/>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </section>
@stop
