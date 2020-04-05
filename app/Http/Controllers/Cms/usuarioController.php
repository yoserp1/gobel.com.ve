<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_usuario;
use Validator;
use View;
use Auth;
use DB;
use Session;
use Hash;
use Redirect;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

class usuarioController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('optimizar');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function password()
    {
        return View::make('usuario.password');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
      $contraseña_actual = tab_usuario::find( Auth::user()->id );
      $valido = Hash::check( $request->get("contraseña_actual"), $contraseña_actual->da_password);

      $datos = array(
        'contraseña_actual' => $valido,
        'contraseña_actual' => $request->get("contraseña_actual"),
        'clave_nueva' => $request->get("clave_nueva"),
        'clave_nueva_confirmation' => $request->get("clave_nueva_confirmation")
      );

      $mensajes = array(
        'contraseña_actual.in'=>'La Contraseña ingresada no coincide.'
      );

      //dd($request);

      $validador = Validator::make($datos , tab_usuario::$validarContrasena, $mensajes);
      if ($validador->fails()) {
        return Redirect::back()->withErrors( $validador)->withInput( $request->except("password"));
      }

        DB::beginTransaction();
        try {

            $tabla = tab_usuario::find( Auth::user()->id);
            $tabla->da_password = bcrypt($request->get("clave_nueva_confirmation"));
            $tabla->save();

            DB::commit();

            Session::flash('msg', 'Contraseña cambiada con exito!');
            return Redirect::to('/cms/inicio');

        }catch (\Illuminate\Database\QueryException $e){

            DB::rollback();
            return Redirect::back()->withErrors([
                'da_mensaje' => $e->getMessage()
            ]);

        }

    }
}
