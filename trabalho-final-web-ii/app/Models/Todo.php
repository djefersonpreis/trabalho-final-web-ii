<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public $table = 'todo';

    protected $fillable = [
        'title',
        'description',
        'date_todo',
        'todo_group_id',
        'status'
    ];
}
