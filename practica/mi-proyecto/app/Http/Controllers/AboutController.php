<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $_fullName = 'Oscar Luque Porca';
        $_lastGame = 'Red Dead Redemption 2';
        return view('about', compact('_fullName','_lastGame'));
    }
}
