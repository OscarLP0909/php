<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $fillable = ['name', 'description', 'anio_lanzamiento', 'tags'];

    
}
