@extends("layout")

@section('titulo')
    Nova Pendência
@stop

@section('conteudo')
    <h1 class="text-center">Nova Pendência</h1>
    <a href="{{ route("todo.index") }}" class="btn btn-outline-success">Voltar</a>
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("todo.store") }}">
                @csrf
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                </div>
                <br/>
                <div class="form-group">
                    <label for="description">Descrição da pendência:</label>
                    <textarea rows="5" cols="50" class="form-control" id="description" name="description" placeholder="Descrição..."></textarea>
                </div>
                <br/>
                <div class="row">
                    <div class="col-sm-12 col-md-6 form-group">
                        <label for="status">Status da Pendência: </label>
                        <input type="text" class="form-control" id="status" name="status" placeholder="A fazer...">
                    </div>
                    <div class="col-sm-12 col-md-6 form-group">
                        <label for="date_todo">Data Limite:</label>
                        <input type="date" class="form-control" id="date_todo" name="date_todo">
                    </div>
                </div>
                <br/>
                <div class="form-group">
                    <label for="todo_groups_id">Grupo:</label>
                    <select class="form-select" name="todo_groups_id" id="todo_groups_id">
                        @foreach ($grupos as $g)
                            <option value="{{ $g->id }}"> {{ $g->name }} </option>
                        @endforeach
                    </select>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@stop
