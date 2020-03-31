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
    
}
