<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentor';
    public $timestamps= false;
    protected $fillable = [
        'nombre','foto','especialidad','descripcion','facebook','twitter','linkedin','instagram','email','sitioweb',
    ];
}
