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
        $todos = Todo::latest()->get();
        return view('index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-todo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'to_do' => 'required',
        ]);
        Todo::create([
            'to_do' => $request->to_do,
        ]);
        session()->flash('success', 'to-do successfully created');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('show-todo', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo = Todo::findOrFail($id);
        return view('edit-todo', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'to_do' => 'required',
            'is_completed' => 'required'
        ]);
        $todo = Todo::findOrFail($id);
        $todo->update([
            'to_do' => $request->to_do,
            'is_completed' => $request->is_completed
        ]);
        session()->flash('success', 'to-do successfully updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        session()->flash('success', 'to-do successfully deleted');
        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     */
    public function patch_update(Request $request, string $id)
    {
        $todo = Todo::findOrFail($id);
        if ($todo->is_completed == 'yes') {
            $todo->update([
                'is_completed' => 'no'
            ]);
        } else {
            $todo->update([
                'is_completed' => 'yes'
            ]);
        }
        session()->flash('success', 'to-do successfully partially updated');
        return redirect()->back();
    }
}
