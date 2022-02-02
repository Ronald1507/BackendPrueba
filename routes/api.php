<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//REGIONES
Route::get('/regiones', 'App\Http\Controllers\RegionsController@index');//lista todas las regiones
// Route::post('/regiones', 'App\Http\Controllers\RegionsController@store');//crear regiones
// Route::get('/regiones/{id}', 'App\Http\Controllers\RegionsController@show');//listar una region
// Route::put('/regiones/{id}', 'App\Http\Controllers\RegionsController@update');//actualizar una region
// Route::delete('/regiones/{id}', 'App\Http\Controllers\RegionsController@destroy');//eliminar una region

//PROVINCIAS
// Route::get('/provincias', 'App\Http\Controllers\ProvinciasController@index'); //lista todas las provincias
// Route::post('/provincias', 'App\Http\Controllers\ProvinciasController@store');//crea un provincia
// Route::get('/provincias/{id}', 'App\Http\Controllers\ProvinciasController@show');//lista una provincia
// Route::put('/provincias/{id}', 'App\Http\Controllers\ProvinciasController@update'); //modifica una provincia
// Route::delete('/provincias/{id}', 'App\Http\Controllers\ProvinciasController@destroy'); //elimina provincia
Route::get('/provinciasRegion/{id}', 'App\Http\Controllers\ProvinciasController@showProvinciasPorRegion');//lista provincias por region

//COMUNAS
// Route::get('/comunas', 'App\Http\Controllers\ComunasController@index'); //lista todas las comunas
// Route::post('/comunas', 'App\Http\Controllers\ComunasController@store'); // crea una comuna
// Route::get('/comunas/{id}', 'App\Http\Controllers\ComunasController@show'); //lista una comuna
// Route::put('/comunas/{id}', 'App\Http\Controllers\ComunasController@update'); //modifica una comuna
// Route::delete('/comunas/{id}', 'App\Http\Controllers\ComunasController@destroy'); //elimina una comuna
Route::get('/comunasProvincia/{id}', 'App\Http\Controllers\ComunasController@showComunasPorProvincia'); //lista comunas por provincia

//CALLES
Route::get('/calles', 'App\Http\Controllers\CallesController@index'); //Listado de todas las calles LISTO

Route::post('/calle', 'App\Http\Controllers\CallesController@store');//insertar calle por nombre LISTO

Route::delete('calle/{id}', 'App\Http\Controllers\CallesController@destroy'); //Eliminar Calle LISTO

Route::put('/calle/{id}', 'App\Http\Controllers\CallesController@update');    //update calle listo

Route::get('/calle/{id}', 'App\Http\Controllers\CallesController@listarCalle');    //listar una calle

