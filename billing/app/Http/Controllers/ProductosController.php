<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    //Funcion de Mostrar los Productos
        public function mostrarProductos(){
            $productos = DB::select('SELECT * from tbl_productos');
            return view('Productos', ['tbl_productos' => $productos]);
        }

    //Funcion de Eliminar Productos
    public function deleteProducto(){
        DB::select('DELETE FROM tbl_productos WHERE id='.$request->id.'');
        return 200;
    }

    //Funcion de Modificar los productos
        public function updateProducto(Request $request){
            DB::table('tbl_productos')
                ->where('id', $request->id)
                ->update(['detalle_producto' => $request->text]);
            return 200;
        }
}
