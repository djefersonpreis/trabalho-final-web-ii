<div class="col-xs-12 col-sm-6 col-md-3 mt-3">
    <div class="card text-white bg-dark mb-3">
        <div class="card-header text-center text-uppercase">
            {{ $todo->name }}
        </div>
        <div class="card-body">
            <div class="text-center">
                <h5 class="card-title text-capitalize text-truncate">{{ $todo->title }}</h5>
                <small class="text-muted">{{ $todo->date_todo }}</small>
            </div>
            <hr>
            <p style="height: 150px" class="card-text overflow-hidden text-justify">{{ $todo->description }}</p>
        </div>
        <div class="card-footer">
            <div class="row d-flex justify-content-center">
                <a href="{{ route("todo.detail", $todo->id) }}" class="col-11 m-2 btn btn-outline-success mb-2">Detalhamento</a>
                <br>
                <a href="{{ route("todo.edit", $todo->id) }}" class="col-5 m-2 btn btn-outline-info">Editar</a>
                <a href="{{ route("todo.remove", $todo->id) }}" class="col-5 m-2 btn btn-outline-danger">Remover</a>
            </div>
        </div>
    </div>
</div>
