<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            return view('/home', compact(['user']));
        } else {
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);


        $user = User::where('name', $request->input('name'))->first();


        if ($user) {
            Auth::login($user);

            return redirect('/home');
        } else {

            $newUser = User::create($request->all());
            Auth::login($newUser);

            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth');
    }
}
