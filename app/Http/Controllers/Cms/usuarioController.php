<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_usuario;
use portal\Models\Cms\tab_notificacion;
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
    public function guardarPassword(Request $request)
    {
      $contraseña_actual = tab_usuario::find( Auth::user()->id );
      $valido = Hash::check( $request->get("contraseña_actual"), $contraseña_actual->da_password);

      $datos = array(
        'nombre' => $request->get("nombre"),
        'correo' => $request->get("correo"),
        'valido' => $valido,
        'contraseña_actual' => $request->get("contraseña_actual"),
        'contraseña' => $request->get("contraseña"),
        'contraseña_confirmation' => $request->get("contraseña_confirmation")
      );

      $mensajes = array(
        'valido.in'=>'La Contraseña ingresada no coincide.'
      );

      $validador = Validator::make($datos , tab_usuario::$validarContrasena, $mensajes);

      if ($validador->fails()) {
        Session::flash('overlay_activo', 'side-overlay-o');
        return Redirect::back()->withErrors( $validador)->withInput( $request->all());
      }

        DB::beginTransaction();
        try {

            $tabla = tab_usuario::find( Auth::user()->id);
            $tabla->nb_usuario = $request->get("nombre");
            $tabla->da_email = $request->get("correo");
            $tabla->da_password = bcrypt($request->get("contraseña_confirmation"));
            $tabla->save();

            $tab_notificacion = new tab_notificacion;
            $tab_notificacion->id_tab_usuario = Auth::user()->id;
            $tab_notificacion->de_notificacion = 'Actualización de datos de usuario';
            $tab_notificacion->ip_cliente = $request->ip();
            $tab_notificacion->de_icono = 'fa-address-card text-info';
            $tab_notificacion->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Contraseña cambiada con exito!');
            return Redirect::to('/cms/inicio');

        }catch (\Illuminate\Database\QueryException $e){

            DB::rollback();
            return Redirect::back()->withErrors([
                'da_mensaje_side_overlay' => $e->getMessage()
            ]);

        }

    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista(Request $request)
    {

        $sortBy = 'id';
        $orderBy = 'desc';
        $perPage = 5;
        $q = null;
        $desde = null;
        $hasta = null;
        $columnas = [
            ['valor'=>'bnumberdialed', 'texto'=>'Número de Origen'],
            ['valor'=>'bnumberdialed', 'texto'=>'Número de Destino']
        ];
    
        if ($request->has('orderBy')){
            $orderBy = $request->query('orderBy');
        }
        if ($request->has('sortBy')){
            $sortBy = $request->query('sortBy');
            //$sortBy = 'id';
        } 
        if ($request->has('perPage')){
            $perPage = $request->query('perPage');
        } 
        if ($request->has('q')){
            $q = $request->query('q');
        }

        if ($request->has('desde')){
            $desde = $request->desde;
        }

        if ($request->has('hasta')){
            $hasta = $request->hasta;
        }

        $tab_usuario = tab_usuario::select( 'id', 'da_login', 'in_activo', 'nb_usuario', 'da_email')
        ->where('in_activo', '=', true)
        //->search($q, $sortBy)
        //->fecha($desde, $hasta)
        ->orderBy($sortBy, $orderBy)
        ->paginate($perPage);

        return View::make('cms.usuario.lista')->with([
            'tab_usuario' => $tab_usuario,
            'orderBy' => $orderBy,
            'sortBy' => $sortBy,
            'perPage' => $perPage,
            'columnas' => $columnas,
            'q' => $q,
            'desde' => $desde,
            'hasta' => $hasta
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()
    {
        $data = array( "id" => null);

        return View::make('cms.usuario.nuevo')->with([
            'data'  => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = tab_usuario::select( 'id', 'da_login', 'in_activo', 'nb_usuario', 'da_email')
        ->where('id', '=', $id)
        ->first();

        return View::make('cms.usuario.editar')->with([
            'data'  => $data
        ]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request, $id = NULL)
    {
        DB::beginTransaction();

        if($id!=''||$id!=null){

          $validador = Validator::make( $request->all(), tab_usuario::$validarEditar);
          if ($validador->fails()) {
              return Redirect::back()->withErrors( $validador)->withInput( $request->all());
          }

          try {

            $tab_usuario = tab_usuario::find( $id);
            $tab_usuario->da_login = $request->get("usuario");
            $tab_usuario->nb_usuario = $request->get("nombre");
            $tab_usuario->da_email = $request->get("correo");
            $tab_usuario->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Registro Editado con Exito!');
            return Redirect::to('/cms/usuario');

          }catch (\Illuminate\Database\QueryException $e)
          {
            DB::rollback();
            return Redirect::back()->withErrors([
                'da_alert_form' => $e->getMessage()
            ])->withInput( $request->all());
          }

        }else{

          $validador = Validator::make( $request->all(), tab_usuario::$validarCrear);
          if ($validador->fails()) {
              return Redirect::back()->withErrors( $validador)->withInput( $request->all());
          }

          try {

            $tab_usuario = new tab_usuario;
            $tab_usuario->da_login = $request->get("usuario");
            $tab_usuario->nb_usuario = $request->get("nombre");
            $tab_usuario->da_email = $request->get("correo");
            $tab_usuario->da_password = bcrypt(123456);
            $tab_usuario->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Registro creado con Exito!');
            return Redirect::to('/cms/usuario');

          }catch (\Illuminate\Database\QueryException $e)
          {
            DB::rollback();
            return Redirect::back()->withErrors([
                'da_alert_form' => $e->getMessage()
            ])->withInput( $request->all());
          }

        }
    }
}
