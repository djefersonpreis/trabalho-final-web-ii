@extends("layout")

@section('titulo')
    Editar Grupo
@stop

@section('conteudo')
    <h1 class="text-center">Editar Grupo - #{{ $grupo->id }}</h1>
    <a href="{{ route("grupos.listagem") }}" class="btn btn-outline-success">Voltar</a>
    <hr>

    <form method="POST" action="{{ route("grupos.update", $grupo->id) }}">
        @csrf
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" id="id" name="id" disabled value="{{ $grupo->id }}">
        </div>
        <div class="form-group">
          <label for="name">Nome do Grupo:</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $grupo->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descrição do Grupo:</label>
            <textarea rows="5" cols="50" class="form-control" id="description" name="description">{{ $grupo->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Alterar</button>
      </form>

@stop
