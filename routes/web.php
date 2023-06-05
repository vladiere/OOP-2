<?php

use App\Http\Controllers\TagsController;
use App\Http\Controllers\TagsUserTodosController;
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


Route::get('/add-tags', function () {
    return view('tags.tags');
})->name('add-tags');

Route::post('/add-tags', [TagsController::class, 'store']);

Route::post('/auth', [UserController::class, 'store'])->name('login');

Route::get('/add-todos', [TagsUserTodosController::class, 'TodosIndex'])->name('add-todos');

Route::get('/home', [TagsUserTodosController::class, 'HomeIndex'])->name('home');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/add-todo', [TodosController::class, 'store'])->name('add-todo');
