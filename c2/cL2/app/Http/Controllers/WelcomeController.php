<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        $links = [
            ['label' => 'Sobre mí', 'url' => '/about'],
            ['label' => 'Listado', 'url' => '/list'],
            ['label' => 'Listado de Deportes', 'url' => '/list/sports'],
            ['label' => 'Listado de Usuarios (ID 1)', 'url' => '/list/users/1'],
        ];

        return view('welcome', compact('links'));
    }
}
