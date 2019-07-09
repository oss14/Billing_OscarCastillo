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
Route::post('/updateUsuario','UserReportsController@updateUser');

//Funciones de los Productos
Route::get('/productos','ProductosController@mostrarProducto')->name('Productos');
Route::post('/updateProducto', 'ProductosController@updateProducto');
Route::post('/deleteProducto','ProductosController@deleteProducto');
Route::resource('addproductos', 'addProductsController');

//Funcions de las Facturas
Route::get('/facturas','FacturasController@showFacturas')->name('facturas');
Route::post('/deleteFactura','FacturasController@deleteFacturas');
Route::post('/updateFactura', 'FacturasController@updateFacturas');
Route::resource('addfacturas','addFacturaController');
