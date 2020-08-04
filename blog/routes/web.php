<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('vistasAdmin.prueba');
});
*/

Route::get('/', function () {
    return view('vistasAdmin.master');
});

/*return views('vistasAdmin.master');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prueba', 'prueba@prueba')->name('prueba');

//Route::get('/modelo','ModeloController@create')->name('modelo');
//Route::get('/servicio','ServicioController@create')->name('servicio');
//Route::get('/desarrolladora','DesarrolladoraController@create')->name('Desarrolladora');
//Route::get('/galeria','GaleriaController@create')->name('Galeria');
//Route::get('/ciudad','CiudadController@create')->name('Galeria');
Route::resource('Ciudad','CiudadController');
Route::resource('Estado','EstadoController');
Route::resource('Modelo','ModeloController');
Route::resource('TipoPrecio','TipoPrecioController');
Route::resource('Ciudad','CiudadController');
Route::resource('Colonia','ColoniaController');
Route::resource('Asesor','AsesorController');
Route::resource('Desarrolladora','DesarrolladoraController');
Route::resource('Empresa','EmpresaController');

Route::resource('Servicio','ServicioController');
Route::resource('Galeria','GaleriaController');

