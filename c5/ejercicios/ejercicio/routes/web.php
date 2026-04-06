<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/juegos', [JuegoController::class, 'index'])->name('juegos.index');
Route::get('/juegos/crear', [JuegoController::class,'nuevo'])->name('juegos.crear');
Route::post('/juegos', [JuegoController::class,'create'])->name('juegos.store');
Route::get('/juegos/{juego}/editar', [JuegoController::class,'formEditar'])->name('juegos.edit');
Route::put('/juegos/{juego}', [JuegoController::class,'editar'])->name('juegos.update');
Route::delete('/juegos/{juego}', [JuegoController::class,'delete'])->name('juegos.delete');