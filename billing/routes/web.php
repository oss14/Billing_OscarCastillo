<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/productos',function(){
    return view('Productos');
});

Route::get('/usuarios',function(){
    return view('Usuarios');
});

Auth::routes();

Route::get('/home', 'HomeController@showUsers')->name('home');
Route::post('/deleteUser','UserReportsController@deleteUser');

Route::get('/productos','ProductosController@mostrarProductos')->name('Productos');
Route::get('/usuarios','UserReportsController@showUsers')->name('Usuarios');