<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_usuario;
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
	
	    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function enviar( Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

		if (tab_usuario::where('da_email', '=', $request->email)->exists()) {

            DB::beginTransaction();
            try {
 
             $usuario = tab_usuario::where('da_email', $request->email)->first();
             $email = $request->email;
             $name = $usuario->nb_usuario;
 
             $cuenta = tab_usuario::find($usuario->id);
             $cuenta->codigo_confirmacion = $codigo_confirmacion = str_random(30);
             $cuenta->save();
 
             DB::commit();

            try{
			    Mail::send('emails.password', array('codigo_confirmacion' =>$codigo_confirmacion, 'usuario' => $usuario ), 
				function($message) use ($email, $name){
				       //$message->from('no-reply@sisprot.com', 'SISPROT');
				       $message->to($email, $name)->subject('CMSmix - RECUPERACION DE CONTRASEÑA');
				    }
				);
			}catch(\Exception $e){
                /*return Redirect::back()->withErrors([
                    'da_mensaje' => 'Hubo un error al enviar el correo Electronico. Intente de Nuevo.',
                ]);*/
                return Redirect::back()->withErrors([
                    'da_mensaje' => array('ERROR ('.$e->getCode().'):'=> $e->getMessage())
                ]);
			}

            Session::flash('msg', 'Por favor, consulta tu email para link de recuperacion de contraseña.');
            return Redirect::to('/');
            
        }catch (\Illuminate\Database\QueryException $e)
        {
          DB::rollback();
            /*return Redirect::back()->withErrors([
                'da_mensaje' => 'Error en la transaccion. Intente de Nuevo',
            ]);*/
            return Redirect::back()->withErrors([
                'done' => array('ERROR ('.$e->getCode().'):'=> $e->getMessage())
            ]);
        }

        }else{
            return Redirect::back()->withErrors([
                'da_mensaje' => 'El email ingresado no coincide con nuestros registros. Intente de Nuevo',
            ])->withInput();
        }

	}
	
}
