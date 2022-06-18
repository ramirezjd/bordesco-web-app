<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curador extends Model
{
	protected $table = 'curadores';
	public $timestamps = false;
  protected $primaryKey = 'id';
  protected $fillable = [
		'nombre'
  ];
}
