<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_usuario;
use portal\Models\Cms\tab_portal;
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

use portal\Http\Requests\loginRequest;

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
        $this->middleware('optimizar');
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

			$data = tab_usuario::select('tab_usuario.id', 'nb_usuario', 'da_login', 'da_password')
			->where('tab_usuario.id', '=', Auth::user()->id)
			->where('tab_usuario.in_activo', '=', TRUE)
			->first();
  
			$portal = tab_portal::select( 'id', 'nb_portal', 'nb_cms', 'de_description', 'de_keywords', 'de_author', 
			'de_robots', 'de_og_title', 'de_og_site_name', 'de_og_description', 'de_og_type', 
			'de_og_url', 'de_og_image', 'url_shortcut_icon', 'in_activo', 'created_at', 
			'updated_at', 'de_analytics')
			->where('id', '=', 1)->get()->toArray();
  
			Session::put('usuario', $data);
			Session::put('portal', $portal);

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
		return Redirect::to('/cms');
    }
    
}
