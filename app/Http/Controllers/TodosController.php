<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::all();

        return view('/home', compact(['todos']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        Todos::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'tag_id' => $request->tag_id,
            'description' => $request->description,
            'status' => 'pending',
        ]);

        return redirect('home')->with(['success' => 'Todo listed successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Todos $todo)
    {
        $todo->update([
            'status' => 'done',
        ]);

        return redirect()->route('home')->with(['success' => 'Todo is done']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todo)
    {

        // dd($todo);
        $todo->delete();

        return redirect()->route('home')->with(['success' => 'Todo list removed successfully']);
    }
}
