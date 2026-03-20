<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $fullName = 'Oscar Luque Porca';
        $lastBook = 'Veinte mil leguas de viaje submarino - Julio Verne';

        return view('about', compact('fullName', 'lastBook'));
    }
}