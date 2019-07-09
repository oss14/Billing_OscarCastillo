<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{


//Funcion de Mostrar los Productos
public function mostrarProducto(){
    $productos = DB::select('SELECT * from tbl_producto');
    return view('Productos', ['tbl_producto' => $productos]);
}

    //Funcion de Eliminar Productos
    public function deleteProducto(Request $request){
        DB::delete('DELETE FROM tbl_producto WHERE id_producto ='.$request->id.'');
        return 200;
    }

    //Funcion de Modificar los productos
        public function updateProducto(Request $request){
            DB::table('tbl_producto')
                ->where('id_producto', $request->id)
                ->update(['detalle_producto' => $request->text]);
            return 200;
        }


       



}
