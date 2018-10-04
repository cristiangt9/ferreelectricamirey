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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['prefix' => 'productos', 'middleware' => 'verified'], function(){
	Route::get('/', 'ProductosController@index')->name('productos.index');
	Route::get('agregar', 'ProductosController@create')->name('productos.create');
	Route::post('guadar', 'ProductosController@store')->name('productos.store');
	Route::get('ver/{producto}', 'ProductosController@show')->name('productos.show');
	Route::get('editar/{producto}', 'ProductosController@edit')->name('productos.edit');
	Route::put('actualizar/{producto}', 'ProductosController@update')->name('productos.update');
	Route::delete('borrar/{producto}', 'ProductosController@destroy')->name('productos.destroy');

});
