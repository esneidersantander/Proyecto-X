<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsor';
    public $timestamps= false;
    protected $fillable = [
        'nivel','imagen','sitioweb',
    ];
}
