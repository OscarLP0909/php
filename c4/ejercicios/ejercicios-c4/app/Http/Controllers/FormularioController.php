<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{

    public function show()
    {
        return view('formulario.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'edad' => 'required|integer|min:0|max:120',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'apellidos.required' => 'El campo apellidos es obligatorio.',
            'edad.required' => 'El campo edad es obligatorio.',
            'edad.integer' => 'El campo edad debe ser un número entero.',
            'edad.min' => 'El campo edad no puede ser menor que 0.',
            'edad.max' => 'El campo edad no puede ser mayor que 120.',
        ]);
        return redirect()->route('form.make')->with('success', 'Formulario procesado correctamente');
    }
}
