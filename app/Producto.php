<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'codigo', 'descripcion', 'stock', 'departamento', 'marca','solicitud_en_cero',
    ];
}
