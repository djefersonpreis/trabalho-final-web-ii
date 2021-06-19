@extends("layout")

@section('titulo')
    Editar Grupo
@stop

@section('conteudo')
    <h1 class="text-center">Editar Grupo - #{{ $grupo->id }}</h1>
    <a href="{{ route("grupos.listagem") }}" class="btn btn-outline-warning">Voltar</a>
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("grupos.update", $grupo->id) }}">
                @csrf
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" id="id" name="id" disabled value="{{ $grupo->id }}">
                </div>
                <br/>
                <div class="form-group">
                    <label for="name">Nome do Grupo:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $grupo->name }}" maxlength="40">
                </div>
                <br/>
                <div class="form-group">
                    <label for="description">Descrição do Grupo:</label>
                    <textarea rows="5" cols="50" class="form-control" id="description" name="description" maxlength="1000">{{ $grupo->description }}</textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
        </div>
    </div>

@stop
