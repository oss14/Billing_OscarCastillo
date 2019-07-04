<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacturasController extends Controller
{
    //Funcion de Mostrar los Productos
        public function showFacturas(){
            $facturas = DB::select('SELECT * from tbl_facturas');
            return view('facturas', ['tbl_facturas' => $facturas]);
        }

    //Funcion de Eliminar Productos
    public function deleteFacturas(){
        DB::select('DELETE FROM tbl_facturas WHERE id_facturas='.$request->id.'');
        return 200;
    }

    //Funcion de Modificar los productos
        public function updateFacturas(Request $request){
            DB::table('tbl_facturas')
                ->where('id_facturas', $request->IdFacturaUpdate)
                ->update(['detalle_factura' => $request->DetalleFacturaUpdate]);
            return 200;
        }
}
