<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegoController extends Controller
{
    public function index() {
        $juegos = Juego::all(); // Todos los elementos de la tabla
        return view("juegos.index", compact("juegos"));
    }

    public function nuevo() {
        return view("juegos.crear");
    }

    public function create(Request $request) {
        $juego = Juego::create([
            'name' => $request->name,
            'description' => $request->description,
            'anio_lanzamiento' => $request->anio_lanzamiento,
        ]);
        return redirect()->route('juegos.index');
    }
}