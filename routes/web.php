<?php

use App\Http\Controllers\TodosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// User
Route::get('/', function () {
    return view('auth');
})->name('auth');

Route::get('/add-todos', function () {
    return view('todos.todos');
})->name('add-todos');

Route::get('/add-tags', function () {
    return view('tags.tags');
})->name('add-tags');


Route::post('/auth', [UserController::class, 'store'])->name('login');

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::get('/home', [TodosController::class, 'index'])->name('todos-list');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
