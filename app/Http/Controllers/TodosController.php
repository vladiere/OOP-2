<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;

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
        //
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
