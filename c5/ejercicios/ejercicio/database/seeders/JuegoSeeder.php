<?php

namespace Database\Seeders;

use App\Models\Juego;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tagRpg = Tag::firstOrCreate(['name' => 'RPG']);
        $tagAccion = Tag::firstOrCreate(['name' => 'Acción']);

        Juego::create([
            'name' => 'Starcraft 3',
            'description' => 'Juego clásico de estrategia',
            'release_year' => 2004,
            'tags' => [$tagRpg->_id]
        ]);

        Juego::create([
            'name' => 'Cyberpunk 2077',
            'description' => '',
            'release_year' => 2020,
            'tags' => [$tagRpg->_id, $tagAccion->_id]
        ]);
    }
}
