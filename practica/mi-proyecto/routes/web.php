<?php

use App\Http\Controllers\SportsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/sports', [SportsController::class, 'show']);
