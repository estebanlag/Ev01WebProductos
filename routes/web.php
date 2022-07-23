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


Route::get('/login','App\Http\Controllers\LoginController@index');
Route::get('/usuarioIngresado','App\Http\Controllers\LoginController@loged')->name('ingresado');

Route::get('/dashboard','App\Http\Controllers\DashboardController@index');

Route::get('/crear','App\Http\Controllers\CrearProductoController@index');

Route::get('/editar','App\Http\Controllers\EditarProductoController@index');
