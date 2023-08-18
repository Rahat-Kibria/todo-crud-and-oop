<?php

use App\Http\Controllers\OopController;
use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/show/{todo_id}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todo/edit/{todo_id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todo/update/{todo_id}', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/destroy/{todo_id}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::patch('/todo/patch-update/{todo_id}', [TodoController::class, 'patch_update'])->name('todo.patch.update');

Route::get('/inheritance', [OopController::class, 'inheritance'])->name('inheritance');
Route::get('/interface', [OopController::class, 'interface'])->name('interface');
Route::get('/encapsulation', [OopController::class, 'encapsulation'])->name('encapsulation');
Route::get('/polymorphism', [OopController::class, 'polymorphism'])->name('polymorphism');
