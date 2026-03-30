<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller
{
    public function index() {
        $juegos = Juego::all(); // Todos los elementos de la tabla
        return view("juegos.index", compact("juegos"));
    }

    public function nuevo() {
        $tags = Tag::all();
        return view("juegos.crear", compact("tags"));
    }

    public function create(Request $request) {
        $juego = Juego::create([
            'name' => $request->name,
            'description' => $request->description,
            'anio_lanzamiento' => $request->anio_lanzamiento,
            'tags' => $request->tags,
        ]);
        return redirect()->route('juegos.index');
    }
}