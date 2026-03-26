<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContactoController extends Controller
{
    public function show()
    {
        return view('contacto.formulario');
    }

    public function procesar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El campo correo electrónico debe ser una dirección de correo válida.',
            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
        ]);
        return redirect()->route('form.show')->with('success', 'Formulario procesado correctamente');
    }
}
