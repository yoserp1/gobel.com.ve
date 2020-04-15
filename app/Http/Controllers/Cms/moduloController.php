<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_item;
use portal\Models\Cms\tab_item_formato;
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

        $tab_item = tab_item::select( 'tab_item.id', 'de_item', 'de_contenido', 'de_item_formato')
        ->join('tab_item_formato as t01','t01.id','=','tab_item.id_tab_item_formato')
        ->where('t01.in_activo', '=', true)
        //->search($q, $sortBy)
        //->fecha($desde, $hasta)
        ->orderBy($sortBy, $orderBy)
        ->paginate($perPage);

        return View::make('cms.modulo.lista')->with([
            'tab_item' => $tab_item,
            'orderBy' => $orderBy,
            'sortBy' => $sortBy,
            'perPage' => $perPage,
            'columnas' => $columnas,
            'q' => $q
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

        $tab_item_formato = tab_item_formato::orderBy('id','asc')
        ->get();

        return View::make('cms.modulo.nuevo')->with([
            'data'  => $data,
            'tab_item_formato'  => $tab_item_formato
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = tab_item::select( 'id', 'in_activo', 'created_at', 'updated_at', 'de_item', 'de_contenido', 
        'url_imagen', 'id_tab_item_formato')
        ->where('id', '=', $id)
        ->first();

        $tab_item_formato = tab_item_formato::orderBy('id','asc')
        ->get();

        return View::make('cms.modulo.editar')->with([
            'data'  => $data,
            'tab_item_formato'  => $tab_item_formato
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

          $validador = Validator::make( $request->all(), tab_item::$validarEditar);
          if ($validador->fails()) {
              return Redirect::back()->withErrors( $validador)->withInput( $request->all());
          }

          try {

            $tab_item = tab_item::find( $id);
            $tab_item->id_tab_item_formato = $request->get("formato");
            $tab_item->de_item = $request->get("descripcion");
            $tab_item->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Registro Editado con Exito!');
            return Redirect::to('/cms/modulo');

          }catch (\Illuminate\Database\QueryException $e)
          {
            DB::rollback();
            return Redirect::back()->withErrors([
                'da_alert_form' => $e->getMessage()
            ])->withInput( $request->all());
          }

        }else{

          $validador = Validator::make( $request->all(), tab_item::$validarCrear);
          if ($validador->fails()) {
              return Redirect::back()->withErrors( $validador)->withInput( $request->all());
          }

          try {

            $tab_item = new tab_item;
            $tab_item->id_tab_item_formato = $request->get("formato");
            $tab_item->de_item = $request->get("descripcion");
            $tab_item->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Registro creado con Exito!');
            return Redirect::to('/cms/modulo');

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
