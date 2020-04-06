<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_notificacion;
use View;
use DB;
use Auth;
use Response;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

class panelController extends Controller
{
    /**
     * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('optimizar');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inicio(Request $request)
    {

        return View::make('dashboard');

    }

        /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function notificacion(Request $request)
    {

        $tab_notificacion = tab_notificacion::select( 'id', 'de_notificacion', 'created_at', 'de_icono')
        ->where('id_tab_usuario', '=', Auth::user()->id)
        ->where('in_activo', '=', true);

        $response['success']  = 'true';
        $response['total']  = $tab_notificacion->count();

        $tab_notificacion = $tab_notificacion->orderby('id','DESC')->limit(5)->get()->toArray();

        foreach($tab_notificacion as $notificacion) {
            $registros[] = array(
                "id"  => trim($notificacion['id']),
                "de_notificacion"  => trim($notificacion['de_notificacion']),
                "de_icono"  => trim($notificacion['de_icono']),
                "TimeAgo"  => trim(tab_notificacion::getTimeAgo($notificacion['created_at']))
            );
        }

        $response['data']  = $registros;

		return Response::json($response, 200);
    }
}
