<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use voipCliente\cc_card;
use View;
use Redirect;
use Validator;
use Input;
use Response;
use Crypt;
use Session;
use DB;
use Mail;
use Auth;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

class passwordController extends Controller
{
    /**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	*/
	public function __construct()
	{
		//$this->middleware('optimizar');
		$this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recuperar()
    {
		// Verificamos si hay sesión activa
		if (Auth::check()){
			// Si tenemos sesión activa mostrará la página de inicio
			return Redirect::to('/inicio');
		}
		// Si no hay sesión activa mostramos el formulario
		return View::make('auth.password');
    }
}
