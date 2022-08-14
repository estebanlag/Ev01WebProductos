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
Route::get('/usuarioRegistrado','App\Http\Controllers\LoginController@loged')->name('registrado');
Route::get('/registrarUsuario','App\Http\Controllers\LoginController@register')->name('registrarse');
Route::get('/recuperarContraseña','App\Http\Controllers\LoginController@recuperarContraseña');
Route::get('/contraseñaRecuperada','App\Http\Controllers\LoginController@contraseñaRecuperada');
Route::post('/logout','App\Http\Controllers\LoginController@logout');
Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
Route::get('/mostrarproducto', 'App\Http\Controllers\DashboardController@mostrarproductos');
Route::get('/editar','App\Http\Controllers\EditarProductoController@index');
Route::get('/actualiza/{nombre}/{cantidad}/{sucursal}','App\Http\Controllers\ActualizarProductos@actualiza');
Route::get('/elimina/{nombre}/{cantidad}','App\Http\Controllers\EliminarProductos@elimina');

Route::get('/crearproducto','App\Http\Controllers\ProductoController@index')->name("CrearProducto");
Route::post('/productoGuardar','App\Http\Controllers\ProductoController@guardar');
Route::get('/productoSucursal','App\Http\Controllers\ProductoController@ProductoSucursal')->name("ProductoSucursal");
Route::post('/guardarproductoSucursal','App\Http\Controllers\ProductoController@GuardarProductoSucursal');

Route::resource('/sucursalx','App\Http\Controllers\sucursalx');
Route::resource('/prodsucursal','App\Http\Controllers\productosucursalx');
//---------------------------------------------------------------



Route::get('/crearsucursal','App\Http\Controllers\SucursalController@index')->name("CrearSucursal");
Route::get('/crearcategoria','App\Http\Controllers\CategoriaController@index')->name("CrearCategoria");

