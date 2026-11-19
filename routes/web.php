<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class , 'create']);
Route::post('/login', [SessionController::class , 'store']);
Route::delete('/logout', [SessionController::class , 'destroy']);

