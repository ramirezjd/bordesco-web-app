<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premio extends Model
{
    //
    protected $table = 'premios';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'descripcion'
    ];
}
