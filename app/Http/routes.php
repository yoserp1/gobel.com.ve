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
	//*Modulo de Login*/
	Route::get('cms', 'autenticarController@login');
	Route::post('cms/autenticar', 'autenticarController@validar'); // Verificar datos
	Route::get('cms/autenticar', 'autenticarController@salir'); // Finalizar sesión
	Route::get('cms/recuperar', 'passwordController@recuperar'); // Recuperar
	Route::post('cms/recuperar/enviar', 'passwordController@enviar'); // Recuperar Password
	Route::get('cms/recuperar/{confirmacion}', 'passwordController@confirmar');
	Route::post('cms/recuperar/cambiar', 'passwordController@guardar');
	Route::get('cms/inicio', 'panelController@inicio');
});