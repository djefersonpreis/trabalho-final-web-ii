@extends("layout")

@section('titulo')
    Grupos
@stop

@section('conteudo')
    Grupos de To-dos
    <hr>
    @foreach ($grupos as $g)
        {{$g->name}}<br>
    @endforeach
@stop
