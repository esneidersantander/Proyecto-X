<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    public $timestamps= false;
    protected $fillable = [
        'dia','hora','actividad','descripcion',
    ];
}
