<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
    ];

    public static function updateOrCreateTodo($request, $id = null)
    {
        Todo::updateOrCreate(['id' => $id], [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}
