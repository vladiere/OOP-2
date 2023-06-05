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
            'status' => 'required|min:3',
        ]);

        Todos::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'tag_id' => $request->tag_id,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect('home')->with(['success' => 'Todo listed successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(todos $todos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todos $todos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todos $todos)
    {
        //
    }
}
