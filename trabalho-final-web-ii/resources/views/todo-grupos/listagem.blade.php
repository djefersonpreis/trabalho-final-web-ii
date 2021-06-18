@extends("layout")

@section('titulo')
    Grupos
@stop

@section('conteudo')
        <h1 class="text-center">Grupos de To-dos </h1>
        <a href="{{ route("grupos.create") }}" class="btn btn-outline-success align-right">Novo Grupo</a>
    <hr>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $g)
                <tr class="align-middle">
                    <th scope="row">{{$g->id}}</th>
                    <td>{{$g->name}}</td>
                    <td>{{$g->description}}</td>
                    <td>{{$g->created_at}}</td>
                    <td>
                        <a href="{{ route("grupos.edit", $g->id) }}" class="btn btn-outline-info">Editar</a>
                        <a href="{{ route("grupos.remove", $g->id) }}" class="btn btn-outline-danger">Remover</a>
                    </td>
            @endforeach
        </tbody>
    </table>
@stop
