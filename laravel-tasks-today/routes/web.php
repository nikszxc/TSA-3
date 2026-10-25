<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'today'])->name('home');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::view('/about', 'about')->name('about');
