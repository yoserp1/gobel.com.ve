<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_articulo;
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

class articuloController extends Controller
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
      $columnas = [
          ['valor'=>'bnumberdialed', 'texto'=>'Número de Origen'],
          ['valor'=>'bnumberdialed', 'texto'=>'Número de Destino']
      ];
  
      if ($request->has('orderBy')){
          $orderBy = $request->query('orderBy');
      }
      if ($request->has('sortBy')){
          $sortBy = $request->query('sortBy');
      } 
      if ($request->has('perPage')){
          $perPage = $request->query('perPage');
      } 
      if ($request->has('q')){
          $q = $request->query('q');
      }

      $tab_articulo = tab_articulo::select( 'id')
      ->orderBy($sortBy, $orderBy)
      ->paginate($perPage);

      return View::make('cms.articulo.lista')->with([
          'tab_articulo' => $tab_articulo,
          'orderBy' => $orderBy,
          'sortBy' => $sortBy,
          'perPage' => $perPage,
          'columnas' => $columnas,
          'q' => $q
      ]);
    }
}
