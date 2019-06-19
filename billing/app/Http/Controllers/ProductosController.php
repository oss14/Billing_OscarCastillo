<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    public function mostrarProductos(){
        $productos = DB::select('SELECT * from tbl_productos');
        return view('Productos', ['tbl_productos' => $productos]);
    }

    public function updateProducto(Request $request){

        //Consulta mala: $productos = DB::update('UPDATE tbl_productos SET detalle_producto = '.'$request->text'.' WHERE id=1');

        DB::table('tbl_productos')
            ->where('id', $request->id)
            ->update(['detalle_producto' => $request->text]);
        return 200;
    }
}
