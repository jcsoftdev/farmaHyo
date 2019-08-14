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
    return view('contents.contenido');
});

// Parte de PRODUCTOS
Route::get('/producto',             'ProductoController@index');
Route::post('/producto/registrar',  'ProductoController@store');
Route::put('/producto/actualizar',  'ProductoController@update');
Route::put('/producto/activar',     'ProductoController@activar');
Route::put('/producto/desactivar',  'ProductoController@desactivar');
Route::get('/producto/getAll',  'ProductoController@getAll');
// Parte de MEDICAMENTOS
Route::get('/medicamento',              'MedicamentoController@index');
Route::post('/medicamento/registrar',   'MedicamentoController@store');
Route::put('/medicamento/actualizar',   'MedicamentoController@update');
Route::put('/medicamento/activar',      'MedicamentoController@activar');
Route::put('/medicamento/desactivar',   'MedicamentoController@desactivar');
Route::get('/medicamento/getAll',   'MedicamentoController@getAll');
// Parte de PRESENTACIONES
Route::get('/presentacion', 'PresentacionController@index');
Route::post('/presentacion/registrar',  'PresentacionController@store');
Route::put('/presentacion/actualizar',  'PresentacionController@update');
Route::put('/presentacion/activar',     'PresentacionController@activar');
Route::put('/presentacion/desactivar',  'PresentacionController@desactivar');
Route::get('/presentacion/getAll',  'PresentacionController@getAll');
// Parte de PRESENTACIONES
Route::get('/concentracion',            'ConcentracionController@index');
Route::post('/concentracion/registrar', 'ConcentracionController@store');
Route::put('/concentracion/actualizar', 'ConcentracionController@update');
Route::put('/concentracion/activar',    'ConcentracionController@activar');
Route::put('/concentracion/desactivar', 'ConcentracionController@desactivar');
Route::get('/concentracion/getAll', 'ConcentracionController@getAll');
// Parte de LABORATORIO
Route::get('/laboratorio',            'LaboratorioController@index');
Route::post('/laboratorio/registrar', 'LaboratorioController@store');
Route::put('/laboratorio/actualizar', 'LaboratorioController@update');
Route::put('/laboratorio/activar',    'LaboratorioController@activar');
Route::put('/laboratorio/desactivar', 'LaboratorioController@desactivar');
Route::get('/laboratorio/getAll', 'LaboratorioController@getAll');

// Parte de ROL
Route::get('/rol',            'RolController@index');