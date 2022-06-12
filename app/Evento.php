<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'ano',
        'inicio_convocatoria',
        'fin_convocatoria',
        'festivales_id',
    ];

    public function festival()
    {
        return $this->belongsTo(Festival::class, 'festivales_id', 'id');
    }
}
