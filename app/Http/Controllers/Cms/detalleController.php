<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_item;
use portal\Models\Cms\tab_item_detalle;
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

class detalleController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo($item)
    {
        $data = tab_item::select( 'id', 'in_activo', 'created_at', 'updated_at', 'de_item', 'de_contenido', 
        'url_imagen', 'id_tab_item_formato')
        ->where('id', '=', $item)
        ->first();

        return View::make('cms.modulo.detalle.nuevo')->with([
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

          $validador = Validator::make( $request->all(), tab_item_detalle::$validarEditar);
          if ($validador->fails()) {
              return Redirect::back()->withErrors( $validador)->withInput( $request->all());
          }

          try {

            $tab_item_detalle = tab_item_detalle::find( $id);
            $tab_item_detalle->id_tab_item = $request->get("item");
            $tab_item_detalle->de_item_detalle = $request->get("descripcion");
            $tab_item_detalle->de_contenido = $request->get("contenido");
            if (!empty($url)) {
                $tab_item_detalle->url_imagen = $url;
            }
            $tab_item_detalle->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Registro Editado con Exito!');
            return Redirect::to('/cms/modulo/editar'.'/'.$request->get("item"));

          }catch (\Illuminate\Database\QueryException $e)
          {
            DB::rollback();
            return Redirect::back()->withErrors([
                'da_alert_form' => $e->getMessage()
            ])->withInput( $request->all());
          }

        }else{

          $validador = Validator::make( $request->all(), tab_item_detalle::$validarCrear);
          if ($validador->fails()) {
              return Redirect::back()->withErrors( $validador)->withInput( $request->all());
          }

          try {

            if ($request->hasFile('imagen')) {
                $image           = $request->file('imagen');
                $name            = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/media');
                $image->move($destinationPath, $name);
                $url = '/images/media/' . $name;
                //$url = url('/') . '/images/media/' . $name;
            }

            $tab_item_detalle = new tab_item_detalle;
            $tab_item_detalle->id_tab_item = $request->get("item");
            $tab_item_detalle->de_item_detalle = $request->get("descripcion");
            $tab_item_detalle->de_contenido = $request->get("contenido");
            if (!empty($url)) {
                $tab_item_detalle->url_imagen = $url;
            }
            $tab_item_detalle->save();

            DB::commit();

            Session::flash('msg_side_overlay', 'Registro creado con Exito!');
            return Redirect::to('/cms/modulo/editar'.'/'.$request->get("item"));

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
