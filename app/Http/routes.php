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

/*Route::get('/', function () {
    return view('welcome');
});*/

//*Modulos de Portal*/
Route::group(['namespace' => 'Portal'], function(){
	//*Modulo de Login*/
	Route::get('/', 'inicioController@inicio');
});

//*Modulos de CMS*/
Route::group(['namespace' => 'Cms'], function(){
	//*Modulo de cms*/
	Route::group(['prefix' => 'cms'], function(){
		//*Modulo de Login*/
		Route::get('/', 'autenticarController@login');
		Route::post('autenticar', 'autenticarController@validar'); // Verificar datos
		Route::get('autenticar', 'autenticarController@salir'); // Finalizar sesión
		Route::get('recuperar', 'passwordController@recuperar'); // Recuperar
		Route::post('recuperar/enviar', 'passwordController@enviar'); // Recuperar Password
		Route::get('recuperar/{confirmacion}', 'passwordController@confirmar');
		Route::post('recuperar/cambiar', 'passwordController@guardar');
		Route::get('inicio', 'panelController@inicio');
		Route::post('usuario/password', 'usuarioController@guardarPassword');
		Route::get('inicio/notificacion', 'panelController@notificacion');
		Route::get('portal/editar', 'portalController@editar');
		Route::post('portal/guardar/{id}', 'portalController@guardar');
		//*Modulo de usuario*/
		Route::get('usuario', 'usuarioController@lista');
		Route::get('usuario/nuevo', 'usuarioController@nuevo');
		Route::get('usuario/editar/{id}', 'usuarioController@editar');
		Route::post('usuario/guardar', 'usuarioController@guardar');
		Route::post('usuario/guardar/{id}', 'usuarioController@guardar');
		Route::post('usuario/eliminar', 'usuarioController@eliminar');
		//*Modulo de modulos*/
		Route::get('modulo', 'moduloController@lista');
		Route::get('modulo/nuevo', 'moduloController@nuevo');
		Route::get('modulo/editar/{id}', 'moduloController@editar');
		Route::post('modulo/guardar', 'moduloController@guardar');
		Route::post('modulo/guardar/{id}', 'moduloController@guardar');
		Route::post('modulo/eliminar', 'moduloController@eliminar');
		//*Modulo de detalle*/
		Route::get('modulo/editar/{item}/nuevo', 'detalleController@nuevo');
		Route::get('modulo/detalle/editar/{id}', 'detalleController@editar');
		Route::post('modulo/editar/guardar', 'detalleController@guardar');
		Route::post('modulo/editar/guardar/{id}', 'detalleController@guardar');
		Route::post('modulo/editar/{item}/eliminar', 'detalleController@eliminar');
		//*Modulo de articulo*/
		Route::get('articulo', 'articuloController@lista');
		Route::get('articulo/nuevo', 'articuloController@nuevo');
		Route::get('articulo/editar/{id}', 'articuloController@editar');
		Route::post('articulo/guardar', 'articuloController@guardar');
		Route::post('articulo/guardar/{id}', 'articuloController@guardar');
		Route::post('articulo/eliminar', 'articuloController@eliminar');
	});
});