<!-- Modal para edição do Comentário #{{$comment->id}}: -->
<div class="modal fade" id="editModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Comentário #{{ $comment->id }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route("comment.update", ['todo_id'=>$comment->todo_id, 'comment_id'=>$comment->id]) }}">
                    @csrf
                    <div class="form-group">
                        <textarea rows="5" cols="50" class="form-control" id="comment" name="comment" maxlength="3000">{{ $comment->comment }}</textarea>
                    </div>
                    <input type="hidden" id="todo_id" name="todo_id" value="{{ $comment->todo_id }}"/>
                    <br/>
                    <button type="submit" class="btn btn-outline-success">Alterar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Card do Comentário #{{$comment->id}}: -->
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
                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editModal{{$comment->id}}">tete</button>
                    <a href="{{ route('comment.remove', ['todo_id'=>$comment->todo_id, 'comment_id'=>$comment->id]) }}" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text text-capitalize text-justify">{{ $comment->comment }}</p>
        </div>
    </div>
</div>


