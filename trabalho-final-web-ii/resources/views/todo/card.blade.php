<div class="col-xs-12 col-sm-6 col-md-3 mt-3">
    <div class="card text-white bg-dark mb-3">
        <div class="card-header text-center text-uppercase">
            {{ $todo->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title text-capitalize">{{ $todo->title }}</h5>
            <hr>
            <p style="height: 150px" class="card-text overflow-hidden text-justify">{{ $todo->description }}</p>
        </div>
        <div class="card-footer">
            <div class="row">
                <a href="{{ route("todo.detail", $todo->id) }}" class="btn btn-outline-success">Detalhamento</a>
            </div>
            <br>
            <div class="row">
                <a href="{{ route("todo.edit", $todo->id) }}" class="col-5 btn btn-outline-info">Editar</a>
                <a href="{{ route("todo.remove", $todo->id) }}" class="col-5 offset-2 btn btn-outline-danger float-right">Remover</a>
            </div>
        </div>
    </div>
</div>
