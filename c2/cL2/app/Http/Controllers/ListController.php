<?php

namespace App\Http\Controllers;

class ListController extends Controller
{
    public function index()
    {
        $items = ['Elemento 1', 'Elemento 2', 'Elemento 3', 'Elemento 4', 'Elemento 5'];

        return view('listado', compact('items'));
    }
}