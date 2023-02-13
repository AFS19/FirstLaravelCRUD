<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticContoller;
use App\Http\Controllers\ComputersController;

// ? home route
Route::get('/', [StaticContoller::class, 'index'])->name('home.index');
// ? about route
Route::get('/about', [StaticContoller::class, 'about'])->name('home.about');
// ? contact route
Route::get('/contact', [StaticContoller::class, 'contact'])->name('home.contact');
// ? computers route
Route::resource('computers', ComputersController::class);