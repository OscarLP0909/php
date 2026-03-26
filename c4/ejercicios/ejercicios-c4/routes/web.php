<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ArchivoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [FormularioController::class, 'show'])->name('form.show');
Route::post('/formulario', [FormularioController::class, 'create'])->name('form.make');

Route::get('/archivo/index', [ArchivoController::class, 'show'])->name('fichero.index');
Route::post('/archivo/subir', [ArchivoController::class, 'upload'])->name('fichero.upload');
Route::get('/archivo/descargar/{archivo}', [ArchivoController::class,'download'])->name('fichero.download');
Route::delete('/archivo/eliminar/{archivo}', [ArchivoController::class, 'delete'])->name('fichero.delete');