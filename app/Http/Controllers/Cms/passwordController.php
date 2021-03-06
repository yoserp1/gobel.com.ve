<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_usuario;
use portal\Models\Cms\tab_notificacion;
use View;
use Redirect;
use Validator;
use Response;
use Crypt;
use Session;
use DB;
use Mail;
use Auth;
use Config;
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
		$this->middleware('optimizar');
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
             $email = $usuario->da_email;
             $name = $usuario->nb_usuario;

             $cuenta = tab_usuario::find($usuario->id);
             $cuenta->codigo_confirmacion = $codigo_confirmacion = str_random(30);
             $cuenta->save();

             $tab_notificacion = new tab_notificacion;
             $tab_notificacion->id_tab_usuario = $usuario->id;
             $tab_notificacion->de_notificacion = 'Recuperar contraseña de usuario';
             $tab_notificacion->ip_cliente = $request->ip();
             $tab_notificacion->de_icono = 'fa-envelope text-info';
             $tab_notificacion->save();
 
             //DB::commit();

            try{
			    Mail::send(
                    'emails.password', array('codigo_confirmacion' =>$codigo_confirmacion, 'usuario' => $name ), 
				    function($message) use ($email, $name){
                        $message->sender('noreply@test.com');
                        //$message->from(Config::get('mail.from.address'), Config::get('mail.from.name'));
				        $message->to($email, $name)->subject('CMSmix - RECUPERACION DE CONTRASEÑA');
				    }
				);
			}catch(\Exception $e){
                /*return Redirect::back()->withErrors([
                    'da_mensaje' => 'Hubo un error al enviar el correo Electronico. Intente de Nuevo.',
                ]);*/
                return Redirect::back()->withErrors([
                    'da_mensaje' => $e->getMessage()
                ]);
            }
            
            DB::commit();

            Session::flash('msg', 'Por favor, consulta tu email para link de recuperacion de contraseña.');
            return Redirect::to('/cms');
            
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
    
    /**
	* Confirm a user's email address.
	*
	* @param  string $token
	* @return mixed
	*/
	public function confirmar($llave)
	{
		if (tab_usuario::where('codigo_confirmacion', '=', $llave)->exists()) {

			$usuario = tab_usuario::where('codigo_confirmacion', '=', $llave)->first();

			return View::make('auth.reset')
			->with('usuario', $usuario)
			->with('llave', $llave);

		}else{
			return Redirect('/cms')->withErrors([
				'da_mensaje' => 'Error: El codigo de verificacion no existe!'
			]);
		}
    }

    /**
	* Confirm a user's email address.
	*
	* @param  string $token
	* @return mixed
	*/
	public function guardar( Request $request)
	{
		if (tab_usuario::where('codigo_confirmacion', '=', $request->token )->exists()) {

			$validador = Validator::make($request->all(), tab_usuario::$validarPass);
			if ($validador->fails()) {
			    	return Redirect::back()->withErrors($validador)->withInput();
            }
            
            DB::beginTransaction();
            try {

			$usuario_account = tab_usuario::where('codigo_confirmacion', '=', $request->token)->first();

			$usuario = tab_usuario::find($usuario_account->id);
			$usuario->da_password = bcrypt($request->contraseña_confirmation);
			$usuario->codigo_confirmacion = null;
            $usuario->save();

            $tab_notificacion = new tab_notificacion;
            $tab_notificacion->id_tab_usuario = $usuario->id;
            $tab_notificacion->de_notificacion = 'Actualización de contraseña de usuario';
            $tab_notificacion->ip_cliente = $request->ip();
            $tab_notificacion->de_icono = 'fa-unlock-alt text-info';
            $tab_notificacion->save();

            $email = $usuario_account->da_email;
            $name = $usuario_account->nb_usuario;
            $pass = $request->contraseña_confirmation;

                try{
                    Mail::send(
                        'emails.cambio', array('pass' => $pass, 'usuario' => $usuario_account ), 
                        function($message) use ($email, $name){
                            $message->sender('noreply@test.com');
                            //$message->from(Config::get('mail.from.address'), Config::get('mail.from.name'));
                            $message->to($email, $name)->subject('CMSmix - CAMBIO DE CONTRASEÑA');
                        }
                    );
                }catch(\Exception $e){
                    /*return Redirect::back()->withErrors([
                        'da_mensaje' => 'Hubo un error al enviar el correo Electronico. Intente de Nuevo.',
                    ]);*/
                    return Redirect::back()->withErrors([
                        'da_mensaje' => $e->getMessage()
                    ]);

                }

                DB::commit();

                Session::flash('msg', 'Contraseña cambiada con exito!');
                return Redirect::to('/cms');
            
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
			return Redirect('/')->withErrors([
				'da_mensaje' => array('ERROR:'=> 'Error: El codigo de verificacion no existe!')
			]);
		}

	}
	
}
