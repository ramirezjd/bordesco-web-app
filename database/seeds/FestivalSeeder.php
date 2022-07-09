<?php

use Illuminate\Database\Seeder;
use App\Festival;

class FestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Festival::create([
            'nombre' => 'Festival 2020 Edicion 1',
            'fecha_creacion' => '2020-03-10',
        ]);
        Festival::create([
            'nombre' => 'Festival 2020 Edicion 2',
            'fecha_creacion' => '2020-10-10',
        ]);
        Festival::create([
            'nombre' => 'Un festival super real',
            'fecha_creacion' => '2021-01-07',
        ]);
        Festival::create([
            'nombre' => 'Bordes 2021 Fest',
            'fecha_creacion' => '2021-05-10',
        ]);
    }
}
