<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');
});

Route::get('/admin', [
	'uses' => 'EjemploController@index',
	'as' => 'roles.ejemplo',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/eliminar/{id}', 'UserController@eliminar');

Route::post('/usuarios', 'UserController@crear');

Route::get('/usuarios/crear', 'UserController@formulario');

Route::post('/actualizarRoles', 'UserController@uploadRole');

//RUTAS DE REMITENTE

Route::post('/remitentes', [ 
	'uses' => 'RemitentesController@guardar',
	'as' => 'remitentes.guardar',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/remitentes', [ 
	'uses' => 'RemitentesController@index',
	'as' => 'remitentes',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/remitentes/crear', [ 
	'uses' => 'RemitentesController@crear',
	'as' => 'remitentes.crear',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/remitentes/{id}', [ 
	'uses' => 'RemitentesController@ver',
	'as' => 'remitentes.ver',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/remitentes/editar/{id}', [ 
	'uses' => 'RemitentesController@editar',
	'as' => 'remitentes.editar',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/remitentes/eliminar/{id}', [ 
	'uses' => 'RemitentesController@eliminar',
	'as' => 'remitentes.eliminar',
	'middleware' => 'roles',
	'roles' => ['User']
]);

//RUTAS DE DESTINATARIO

Route::post('/destinatarios', [ 
	'uses' => 'DestinatariosController@guardar',
	'as' => 'destinatarios.guardar',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/destinatarios', [ 
	'uses' => 'DestinatariosController@index',
	'as' => 'destinatarios',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/destinatarios/crear', [ 
	'uses' => 'DestinatariosController@crear',
	'as' => 'destinatarios.crear',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/destinatarios/{id}', [ 
	'uses' => 'DestinatariosController@ver',
	'as' => 'destinatarios.ver',
	'middleware' => 'roles',
	'roles' => ['User']
]);


Route::get('/destinatarios/editar/{id}', [ 
	'uses' => 'DestinatariosController@editar',
	'as' => 'destinatarios.editar',
	'middleware' => 'roles',
	'roles' => ['User']
]);

Route::get('/destinatarios/eliminar/{id}', [ 
	'uses' => 'DestinatariosController@eliminar',
	'as' => 'destinatarios.eliminar',
	'middleware' => 'roles',
	'roles' => ['User']
]);

//RUTAS DE ENVÍOS

Route::post('/envios', [ 
	'uses' => 'EnviosController@guardar',
	'as' => 'envios.guardar',
	'middleware' => 'roles',
	'roles' => ['User', 'Admin']
]);

Route::get('/envios', [ 
	'uses' => 'EnviosController@index',
	'as' => 'envios',
	'middleware' => 'roles',
	'roles' => ['User', 'Admin']
]);

Route::get('/todos-los-envios', [ 
	'uses' => 'EnviosController@todos',
	'as' => 'envios.todos',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/envios/crear', [ 
	'uses' => 'EnviosController@crear',
	'as' => 'envios.crear',
	'middleware' => 'roles',
	'roles' => ['User', 'Admin']
]);

Route::get('/envios/{id}', [ 
	'uses' => 'EnviosController@ver',
	'as' => 'envios.ver',
	'middleware' => 'roles',
	'roles' => ['User', 'Admin']
]);


Route::get('/envios/editar/{id}', [ 
	'uses' => 'EnviosController@editar',
	'as' => 'envios.editar',
	'middleware' => 'roles',
	'roles' => ['User', 'Admin']
]);

Route::get('/envios/eliminar/{id}', [ 
	'uses' => 'EnviosController@eliminar',
	'as' => 'envios.eliminar',
	'middleware' => 'roles',
	'roles' => ['User', 'Admin']
]);

//RUTAS DE Estados

Route::post('/estados', [ 
	'uses' => 'EstadosController@guardar',
	'as' => 'estados.guardar',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/estados', [ 
	'uses' => 'EstadosController@index',
	'as' => 'estados',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/estados/crear', [ 
	'uses' => 'EstadosController@crear',
	'as' => 'estados.crear',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/estados/editar/{id}', [ 
	'uses' => 'EstadosController@editar',
	'as' => 'estados.editar',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/estados/eliminar/{id}', [ 
	'uses' => 'EstadosController@eliminar',
	'as' => 'estados.eliminar',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);