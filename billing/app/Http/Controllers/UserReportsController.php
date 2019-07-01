<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserReportsController extends Controller 
{
  //Funcion de Mostrar Usuarios
  public function showUsers()
  {
      $users = DB::select('select * from users');
      return view('Usuarios', ['users' => $users]);
  }

  //Funcion de Eliminar Usuario
  public function deleteUser(Request $request){
    DB::select('DELETE FROM users WHERE id='.$request->id.'');
    
    return 200;
  }

  //Funcion de Modificar Usuario
}
