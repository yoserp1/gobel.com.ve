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
        $response['success']  = 'true';
        $response['cantidad']  = 10;
        $response['data']  = tab_notificacion::select('id','de_notificacion')
        ->where('id_tab_usuario', '=', Auth::user()->id)
        ->where('in_activo', '=', true)
        ->orderby('id','ASC')
        ->limit(5)->get()->toArray();
		return Response::json($response, 200);
    }
}
