<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Autenticacion\tab_usuario;
use Auth;
use View;
use Redirect;
use Session;
use Captcha;
use Response;
use Validator;
use URL;
use DB;
use Crypt;
use Mail;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class autenticarController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        //$this->middleware('optimizar');
        $this->middleware('guest', ['except' => 'salir']);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        // Verificamos si hay sesión activa
        if (Auth::check()){
        // Si tenemos sesión activa mostrará la página de inicio
        return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        //return View::make('autenticar.login.form');
        return View::make('auth.login');
    }

        	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function validar(loginRequest $request)
	{
		/*if(tab_usuario::where('username', '=', $request->usuario)
		->where('uipass', '=', $request->contraseña)
		//->where('activated', '=', true)
		->exists()){

			$user = tab_usuario::where('username', '=', $request->usuario)
			->where('uipass', '=', $request->contraseña)
			//->where('activated', '=', true)
			->firstOrFail();

			Auth::login($user);

			return redirect('/cms/inicio');

		}else{
			return Redirect::back()->withErrors([
				'da_mensaje' => 'Las credenciales que has introducido no coinciden con nuestros registros. Intente de Nuevo.',
			])->withInput($request->except("contraseña"));
		}*/

		if ($this->auth->attempt(['da_login' => $request->usuario, 'password' => $request->contraseña, 'in_activo' => TRUE]))
		{

			$data = tab_usuario::select('tab_usuario.id', 'id_tab_rol', 'nb_usuario', 'da_login', 'da_password', 'id_tab_empresa', 'nb_empresa', 'de_siglas')
			->Join('tab_empresa as t01', 't01.id', '=', 'tab_usuario.id_tab_empresa')
			->where('tab_usuario.id', '=', Auth::user()->id)
			->where('tab_usuario.in_activo', '=', TRUE)
			->first();
  
			$credencial = tab_privilegio_menu::join('tab_privilegio as t01','t01.id','=','tab_privilegio_menu.id_tab_privilegio')
			->join('tab_menu as t02','t02.id','=','t01.id_tab_menu')
			->join('tab_rol_menu as t03','t03.id','=','tab_privilegio_menu.id_tab_rol_menu')
			->select('de_privilegio', DB::raw("tab_privilegio_menu.in_activo as in_habilitado"))
			->where('id_tab_rol', '=', $data->id_tab_rol)->get()->toArray();
  
			Session::put('usuario', $data->id);
			Session::put('rol', $data->id_tab_rol);
			Session::put('empresa', $data);
			Session::put( array('credencial' => $credencial));

			return redirect('/cms/inicio');
		}
		return Redirect::back()->withErrors([
			'da_mensaje' => 'Las credenciales que has introducido no coinciden con nuestros registros. Intente de Nuevo.',
		])->withInput($request->except("contraseña"));
    }

    	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function salir()
	{
		// Cerramos la sesión
		Auth::logout();
		// redirect
		Session::flash('msg', 'Sesion cerrada con exito!');
		return Redirect::to('/cms/admin');
    }
    
}
