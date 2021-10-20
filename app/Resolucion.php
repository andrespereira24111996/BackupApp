<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Resolucion extends Model
{

    
    public $table = "resoluciones";
    protected $fillable = ['nro_resolucion','descripcion'];
} 
