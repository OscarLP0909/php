<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', [WelcomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/list', [ListController::class, 'index']);
Route::get('/list/sports', [SportsController::class, 'index']);
Route::get('/list/users/{id}', [UsersController::class, 'show']);