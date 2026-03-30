<?php

use App\Http\Controllers\JuegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/juegos', [JuegoController::class, 'index'])->name('juegos.index');
Route::get('/juegos/crear', [JuegoController::class,'nuevo'])->name('juegos.crear');
Route::post('/juegos', [JuegoController::class,'create'])->name('juegos.store');
