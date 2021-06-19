@extends("layout")

@section('titulo')
    Afazeres
@stop

@section('conteudo')
        <h1 class="text-center">Lista de Afazeres</h1>
        <a href="{{ route("todo.create") }}" class="btn btn-outline-success align-right">Nova Pendência</a>
    <hr>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data Limite</th>
                <th scope="col">Grupo ID</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $t)
                <tr class="align-middle">
                    <th scope="row">{{$t->id}}</th>
                    <td>{{$t->title}}</td>
                    <td>{{$t->description}}</td>
                    <td>{{$t->date_todo}}</td>
                    <td>{{$t->todo_groups_id}}</td>
                    <td>{{$t->status}}</td>
                    <td>
                        <a href="{{ route("todo.edit", $t->id) }}" class="btn btn-outline-info">Editar</a>
                        <a href="{{ route("todo.remove", $t->id) }}" class="btn btn-outline-danger">Remover</a>
                        <a href="{{ route("todo.detail", $t->id) }}" class="btn btn-outline-success">Detalhamento</a>
                    </td>
            @endforeach
        </tbody>
    </table>
@stop
