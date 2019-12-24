<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    protected $table = 'organizador';
    public $timestamps= false;
    protected $fillable = [
        'nombre','apellido','imagen','facebook','twitter','linkedin','instagram','email','sitioweb',
    ];
}
