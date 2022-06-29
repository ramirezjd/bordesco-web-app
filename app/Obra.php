<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Representante;

class Obra extends Model
{
	protected $table = 'obras';
	public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'representantes_id',
        'titulo',
        'ano',
        'duracion',
        'genero',
        'sinopsis',
        'direccion',
        'produccion',
        'guion',
        'fotografia',
        'sonido',
        'elenco',
        'fotograma',
        'afiche',
        'enlace de descarga',
        'clave_acceso',
        'observaciones',
        'idioma',
        'tieneSubitulo',
        'arch_subtitulo',
    ];

    public function representante()
    {
        return $this->belongsTo(Representante::class, 'representantes_id', 'id');
    }
}
