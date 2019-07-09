<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //esta línea es para cuando ya tengo creada la tabla y necesito que los métodos del resource la encuentren
    protected $table = 'tbl_facturas';

    // verifica que los campos de la tabla existan en la base datos
    protected $fillable = [
        'detalle_factura',
        'codigo_factura'
    ];

}
