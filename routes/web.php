<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [Postcontroller::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/login', [Homecontroller::class, 'login'])->name('login');
Route::get('/register', [Homecontroller::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');
Route::post('/saved', [PostController::class, 'saveTitle'])->name('saveTitle');
Route::get('edit/{id}', [PostController::class, 'edit']);
Route::post('/edit', [PostController::class, 'updateTitle'])->name('updateTitle');



