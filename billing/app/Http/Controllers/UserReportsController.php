<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserReportsController extends Controller 
{
  //Mostrar Usuario
  public function showUsers()
  {
      $users = DB::select('select * from users');
      return view('home', ['users' => $users]);
  }

  //Eliminar Usuario
  public function deleteUser(Request $request){
    DB::select('DELETE FROM users WHERE id='.$request->id.'');
    
    return 200;
  }

  //Falta el de modificar
}
