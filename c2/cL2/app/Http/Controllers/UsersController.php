<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function show($id)
    {
        return view('user', compact('id'));
    }
}