<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_item;
use Validator;
use View;
use Auth;
use DB;
use Session;
use Redirect;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

class moduloController extends Controller
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
            $sortBy = 'id';
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

        $tab_item = tab_item::select( 'id', 'de_item', 'de_contenido')
        ->where('in_activo', '=', true)
        ->search($q, $sortBy)
        //->fecha($desde, $hasta)
        ->orderBy($sortBy, $orderBy)
        ->paginate($perPage);

        return View::make('cms.modulo.lista')->with([
            'tab_item' => $tab_item,
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

        return View::make('cms.modulo.nuevo')->with([
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
        $data = tab_item::select( 'id', 'de_item', 'de_contenido')
        ->where('id', '=', $id)
        ->first();

        return View::make('cms.modulo.editar')->with([
            'data'  => $data
        ]);
    }
}
