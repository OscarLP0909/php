<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Tag;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function index() {
        $juegos = Juego::all();
        return view('juegos.index', compact('juegos'));
    }

    public function nuevo() {
        $tags = Tag::all();
        return view('juegos.crear', compact('tags'));
    }

    public function create (Request $request) {
        $juego = Juego::create([
            'name' => $request->name,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'tags' => $request->tags,
        ]);
        return redirect()->route('juegos.index');
    }

    public function editar (Request $request, Juego $juego) {
        $juego->update([
            'name' => $request->name,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'tags' => $request->tags,
        ]);
        return redirect()->route('juegos.index');
    }

    public function delete (Juego $juego) {
        $juego->delete();
        return redirect()->route('juegos.index');
    }
}
