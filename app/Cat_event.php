<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_event extends Model
{
    protected $table = 'cat_event';
    public $timestamps = false;
    protected $fillable = [
        'categorias_id',
        'eventos_id',
    ];

/*    public function festival()
    {
        return $this->belongsTo(Categoria::class, 'categorias_id', 'id');
        return $this->belongsTo(Evento::class, 'eventos_id', 'id');
    }
		i*/
}
