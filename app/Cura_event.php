<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cura_event extends Model
{
    protected $table = 'cura_event';
    public $timestamps = false;
    protected $fillable = [
        'curadores_id',
        'eventos_id',
    ];

/*    public function festival()
    {
        return $this->belongsTo(Categoria::class, 'categorias_id', 'id');
        return $this->belongsTo(Evento::class, 'eventos_id', 'id');
    }
		i*/
}
