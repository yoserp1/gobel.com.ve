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
		Route::post('usuario/password', 'usuarioController@guardar');
		Route::get('inicio/notificacion', 'panelController@notificacion');
		Route::get('portal/editar', 'portalController@editar');
		Route::post('portal/guardar/{id}', 'portalController@guardar');
		//*Modulo de usuario*/
		Route::get('usuario', 'usuarioController@lista');
	});
});