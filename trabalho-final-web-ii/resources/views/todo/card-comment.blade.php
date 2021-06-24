<div class="col-12 mt-3">
    <div class="card text-white bg-secondary mb-3">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="card-text">
                        <small class="text-white align-middle"> Criado em: {{ $comment->created_at }} </small>
                    </p>
                </div>
                <div>
                    <p class="card-text">
                        <small class="text-white align-middle"> Atualizado em: {{ $comment->updated_at }} </small>
                    </p>
                </div>
                <div>
                    <button href="{{ route("todo.edit",  $comment->id) }}" class="btn btn-outline-info"><i class="fa fa-pen"></i></button>
                    <button href="{{ route("comment.remove", ['todo_id' => $comment->todo_id, 'comment_id' => $comment->id]) }}" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text text-capitalize text-justify">{{ $comment->comment }}</p>
        </div>
    </div>
</div>
