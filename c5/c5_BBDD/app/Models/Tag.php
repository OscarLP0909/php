<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Tag extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'etiquetas';
    protected $fillable = ['name'];
}
