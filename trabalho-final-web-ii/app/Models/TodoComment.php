<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoComment extends Model
{
    use HasFactory;

    public $table = 'todo_comments';

    protected $fillable = [
        'comment',
        'todo_id'
    ];
}
