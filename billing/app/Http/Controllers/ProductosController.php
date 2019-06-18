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

    public function updateProducto(){
        $productos = DB::select('UPDATE tbl_productos SET');
    }
}
