@extends("layout")

@section('titulo')
    Novo Grupo
@stop

@section('conteudo')
    <h1 class="text-center">Novo Grupo</h1>
    <a href="{{ route("grupos.listagem") }}" class="btn btn-outline-success">Voltar</a>
    <hr>

    <form method="POST" action="{{ route("grupos.store") }}">
        @csrf
        <div class="form-group">
          <label for="name">Nome do Grupo:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Grupo">
        </div>
        <div class="form-group">
            <label for="description">Descrição do Grupo:</label>
            <textarea rows="5" cols="50" class="form-control" id="description" name="description" placeholder="Descrição..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>

@stop
