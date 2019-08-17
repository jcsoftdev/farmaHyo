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
Route::get('/rol/selectRol',            'RolController@selectRol');

// Parte de PROVEEDORES
Route::get('/proveedor',            'ProveedorController@index');
Route::post('/proveedor/registrar', 'ProveedorController@store');
Route::put('/proveedor/actualizar', 'ProveedorController@update');
Route::put('/proveedor/desactivar', 'ProveedorController@desactivar');
Route::put('/proveedor/activar', 'ProveedorController@activar');

// Parte de USUARIOS    
Route::get('/user',            'UserController@index');
Route::post('/user/registrar',  'UserController@store');
Route::put('/user/actualizar',  'UserController@update');
Route::put('/user/activar',     'UserController@activar');
Route::put('/user/desactivar',  'UserController@desactivar');

// Parte de CLIENTES    
Route::get('/cliente',            'ClienteController@index');
Route::post('/cliente/registrar',  'ClienteController@store');
Route::put('/cliente/actualizar', 'ClienteController@update');
Route::put('/cliente/desactivar', 'ClienteController@desactivar');
Route::put('/cliente/activar', 'ClienteController@activar');