<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    protected $fillable = [
        'descripcion', 'observacion',
    ];
}
