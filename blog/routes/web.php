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

Route::get('/', function () {
    return view('vistasAdmin.prueba');
});

Route::get('/', function () {
    return view('vistasAdmin.Modelo');
});

Route::get('/', function () {
    return view('vistasAdmin.master');
});
Route::get('/', function () {
    return view('vistasAdmin.prueba2');
});

/*return views('vistasAdmin.master');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prueba', 'prueba@prueba')->name('prueba');
Route::get('/modelo','ModeloController@Modelo')->name('modelo');
Route::post('/store','ModeloController@store')->name('modelo');
Route::get('/master','MasterController@Master')->name('Master');
Route::get('/desarrolladora','DesarrolladoraController@Desarrolladora')->name('Desarrolladora');
Route::get('/prueba2','PruebaController@Prueba2')->name('prueba2');
Route::get('/galeria','GaleriaController@Galeria')->name('Galeria');

//Route::resource('Modelo','ModeloController');