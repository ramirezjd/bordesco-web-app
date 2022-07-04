<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votacion extends Model
{
    protected $table = 'votaciones';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'cura_event_curador',
        'cura_event_eve',
        'inscritos_cat',
        'inscritos_obr',
        'voto',
    ];
}
