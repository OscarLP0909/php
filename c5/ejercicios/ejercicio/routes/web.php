<?php

use App\Http\Controllers\TagController;
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

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tags/crear', [TagController::class, 'create'])->name('tags.create');
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');