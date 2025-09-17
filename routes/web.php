<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo/dani', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index']);
