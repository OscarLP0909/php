<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Juego;
use App\Models\Tag;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear etiquetas
        $tagRpg = Tag::firstOrCreate(['name' => 'RPG']);
        $tagAccion = Tag::firstOrCreate(['name'=> 'Acción']);
        
        Juego::create([
            'name' => 'Starcraft 3',
            'description' => 'Juego clásico de estrategia',
            'anio_lanzamiento'=> 2004,
            'tags'=> [$tagRpg->_id]
        ]);

        Juego::create([
            'name'=> 'Cyberpunk 2077',
            'description'=> '',
            'anio_lanzamiento' => 2020,
            'tags'=> [$tagRpg->_id, $tagAccion->_id]
            ]);
    }
}
