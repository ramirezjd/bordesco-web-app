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
    return view('inicio.inicio');
    // return view('welcome');
});

Route::get('/registrarObra', 'ObraController@create')->name('home');

// Route::middleware('auth')->group(function(){
    Route::resource('/categorias', 'CategoriaController');
    Route::resource('/festivales', 'FestivalController');
    Route::resource('/eventos', 'EventoController');
    Route::resource('/obras', 'ObraController');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/categorias', 'CategoriaController');
Route::resource('/festivales', 'FestivalController');
Route::resource('/eventos', 'EventoController');
Route::get('/eventos/addCategoria/{id}', 'EventoController@agregarCategoria')->name('agregarCategoria');
Route::put('/eventos/saveCategoria/{id}', 'EventoController@guardarCategoria')->name('guardarCategoria');
Route::get('/eventos/addCurador/{id}', 'EventoController@agregarCurador')->name('agregarCurador');
Route::put('/eventos/saveCurador/{id}', 'EventoController@guardarCurador')->name('guardarCurador');
Route::resource('/curadores', 'CuradorController');
Route::resource('/premios', 'PremioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
