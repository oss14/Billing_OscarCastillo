<?php

//Rutas de las Vistas

Auth::routes();

Route::get('/', function(){
    return redirect('login');
});


Route::get('/home',function(){
    return view('home');
});



// Funciones de los Usuarios
Route::get('/usuarios','UserReportsController@showUsers')->name('Usuarios');
Route::post('/deleteUser','UserReportsController@deleteUser');

//Funciones de los productos
Route::get('/productos','ProductosController@mostrarProductos')->name('Productos');
Route::post('/updateProducto', 'ProductosController@updateProducto');

