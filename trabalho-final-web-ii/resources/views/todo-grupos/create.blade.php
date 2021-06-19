@extends("layout")

@section('titulo')
    Novo Grupo
@stop

@section('conteudo')
    <h1 class="text-center">Novo Grupo</h1>
    <a href="{{ route("grupos.listagem") }}" class="btn btn-outline-warning">Voltar</a>
    <hr>

    <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-6 mt-4">
            <form method="POST" action="{{ route("grupos.store") }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nome do Grupo:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Grupo" maxlength="40">
                </div>
                <br/>
                <div class="form-group">
                    <label for="description">Descrição do Grupo:</label>
                    <textarea rows="5" cols="50" class="form-control" id="description" name="description" placeholder="Descrição..." maxlength="1000"></textarea>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>

@stop
