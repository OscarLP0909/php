<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'etiquetas';
    protected $fillable = ['name'];
}
