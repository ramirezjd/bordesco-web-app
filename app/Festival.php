<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
	protected $table = 'festivales';
	public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable = [
		'nombre',
		'fecha_creacion'
  ];
}
