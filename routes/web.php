<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("direcciones",App\Http\Controllers\DireccioneController::class);
Route::resource("clientes",App\Http\Controllers\ClienteController::class);