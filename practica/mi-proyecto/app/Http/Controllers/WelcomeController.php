<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $links = [
            ['label' => 'Sobre mí','url'=> '/about'],
            ['label' => 'Sports','url'=> '/sports'],
            ['label' => 'Sobre mí','url'=> '/about'],
        ];
        return view('welcome', compact('links'));
    }
}
