<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('todo.index', [
            'todos' => Todo::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::updateOrCreateTodo($request);

        return redirect()->back()->with('success', 'Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit', [
            'todo' => $todo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Todo::updateOrCreateTodo($request, $todo->id);

        return redirect()->route('todos.index')->with('success', 'Updated Successfully!');
    }

    public function status(Todo $todo)
    {
        if ($todo->status == 0) {
            $todo->status = 1;
            $message = 'Task Completed!';
        } else {
            $todo->status = 0;
            $message = 'Task Not Completed !';
        }
        $todo->save();
        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('success', 'Deleted Successfully!');
    }
}
