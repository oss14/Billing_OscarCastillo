<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'tbl_producto';
    protected $fillable = [
        'nombre_producto',
        'detalle_producto',
        'precio_producto',
        'codigo_producto'      
    ];
}
