<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\Todos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagsUserTodosController extends Controller
{
    public function HomeIndex()
    {
        $user = Auth::user();

        if ($user) {
            $todos = Todos::with('tag')->where('user_id', Auth::user()->id)->get();

            return view('/home', compact(['user', 'todos']));
        } else {
            return redirect('/');
        }
    }

    public function TodosIndex()
    {
        $tags = Tags::with('user')->where('user_id', Auth::user()->id)->get();
        $todos = Todos::with('user')->where('user_id', Auth::user()->id)->get();

        return view('todos.todos', compact(['tags', 'todos']));
    }
}
