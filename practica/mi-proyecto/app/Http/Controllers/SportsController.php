<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function show() {
        $sports = ['Fútbol', 'Natación', 'Tenis', 'Baloncesto'];

        return view('sports', compact('sports'));
    }
}
