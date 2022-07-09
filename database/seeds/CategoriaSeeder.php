<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Documental',
        ]);
        Categoria::create([
            'nombre' => 'Terror',
        ]);
        Categoria::create([
            'nombre' => 'Drama',
        ]);
        Categoria::create([
            'nombre' => 'Suspenso',
        ]);
        Categoria::create([
            'nombre' => 'Romance',
        ]);
        Categoria::create([
            'nombre' => 'Accion',
        ]);
    }
}


