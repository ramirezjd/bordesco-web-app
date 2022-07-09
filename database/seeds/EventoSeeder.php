<?php

use Illuminate\Database\Seeder;
use App\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'ano' => '2020',
            'inicio_convocatoria' => '2020-03-10',
            'fin_convocatoria' => '2020-04-10',
            'festivales_id' => 2,
        ]);
        Evento::create([
            'ano' => '2020',
            'inicio_convocatoria' => '2020-04-11',
            'fin_convocatoria' => '2020-05-11',
            'festivales_id' => 2,
        ]);

        Evento::create([
            'ano' => '2020',
            'inicio_convocatoria' => '2020-10-10',
            'fin_convocatoria' => '2020-11-10',
            'festivales_id' => 3,
        ]);
        Evento::create([
            'ano' => '2020',
            'inicio_convocatoria' => '2020-11-11',
            'fin_convocatoria' => '2020-12-11',
            'festivales_id' => 3,
        ]);

        Evento::create([
            'ano' => '2021',
            'inicio_convocatoria' => '2021-01-07',
            'fin_convocatoria' => '2021-02-07',
            'festivales_id' => 4,
        ]);
        Evento::create([
            'ano' => '2021',
            'inicio_convocatoria' => '2021-02-08',
            'fin_convocatoria' => '2021-03-08',
            'festivales_id' => 4,
        ]);
        
        Evento::create([
            'ano' => '2021',
            'inicio_convocatoria' => '2021-05-10',
            'fin_convocatoria' => '2021-06-10',
            'festivales_id' => 5,
        ]);
        Evento::create([
            'ano' => '2021',
            'inicio_convocatoria' => '2021-06-11',
            'fin_convocatoria' => '2021-07-11',
            'festivales_id' => 5,
        ]);
    }
}
