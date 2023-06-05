<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'tag' => 'required|min:3',
            'description' => 'required|min:3'
        ]);

        $existingTag = Tags::where('user_id', Auth::user()->id)
            ->where('tag', $request->tag)
            ->exists();

        if ($existingTag) {
            return back()->with(['error' => 'You already have a this tag']);
        }

        Tags::create([
            'user_id' => Auth::user()->id,
            'tag' => $request->tag,
            'description' => $request->description
        ]);

        return back()->with(['success' => 'Tag added successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tags $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tags $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tags $tags)
    {
        //
    }
}
