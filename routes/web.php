<?php

use App\Models\Sucursal;
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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/login','App\Http\Controllers\LoginController@index')->name('ingresar');
Route::get('/registrar','App\Http\Controllers\LoginController@vistaRegistrar');
Route::get('/usuarioRegistrado','App\Http\Controllers\LoginController@loged')->name('registrado');
Route::post('/registrarUsuario','App\Http\Controllers\LoginController@register');
Route::get('/recuperarContraseña','App\Http\Controllers\LoginController@recuperarContraseña');
Route::get('/contraseñaRecuperada','App\Http\Controllers\LoginController@contraseñaRecuperada');
Route::post('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
Route::get('/mostrarproducto', 'App\Http\Controllers\productos@mostrarproductos');


Route::get('/crearproducto', 'App\Http\Controllers\productos@formulario');
Route::post('/buscar', 'App\Http\Controllers\DashboardController@buscar')->name('busqueda');







Route::resource('/prodcategoria','App\Http\Controllers\prodcategoria');
Route::resource('/usuario','App\Http\Controllers\usuarios');
Route::resource('/categoria','App\Http\Controllers\categorias');

Route::resource('/producto','App\Http\Controllers\productos');
Route::get('/imagen/{filename}','App\Http\Controllers\productos@getImagen');

Route::Post('/mostrarproducto','App\Http\Controllers\productos@store');
Route::resource('/sucursal','App\Http\Controllers\sucursalx');
Route::resource('/prodsucursal','App\Http\Controllers\Productosucursalx');
//---------------------------------------------------------------




