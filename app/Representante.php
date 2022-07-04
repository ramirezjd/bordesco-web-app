<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
	protected $table = 'representantes';
	public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'correo',
        'procedencia',
        'telefono',
    ];
}
