<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ArchivoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [FormularioController::class, 'show'])->name('form.make');
Route::post('/formulario', [FormularioController::class, 'create'])->name('form.create');

Route::get('/archivo/index', [ArchivoController::class, 'show'])->name('archivo.index');
Route::post('/archivo/subir', [ArchivoController::class, 'upload'])->name('archivo.upload');
Route::get('/archivo/descargar/{archivo}', [ArchivoController::class,'download'])->name('archivo.download');
Route::delete('/archivo/eliminar/{archivo}', [ArchivoController::class, 'delete'])->name('archivo.delete');