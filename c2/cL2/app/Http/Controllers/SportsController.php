<?php

namespace App\Http\Controllers;

class SportsController extends Controller
{
    public function index()
    {
        $sports = ['Futbol', 'Baloncesto', 'Tenis', 'Natacion', 'Ciclismo'];

        return view('sports', compact('sports'));
    }
}