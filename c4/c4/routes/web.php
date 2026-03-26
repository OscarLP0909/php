<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', [ContactoController::class, 'show'])->name('form.show');
Route::post('/contacto', [ContactoController::class,'procesar'])->name('form.make');
Route::post('/archivo/subir', [ArchivoController::class,'subir'])->name('archivo.make');
Route::get('/archivo/descargar/{archivo}', [ArchivoController::class, 'descargar'])->name('archivo.descargar');
Route::get('/archivo/index', [ArchivoController::class, 'show'])->name('archivo.index');
