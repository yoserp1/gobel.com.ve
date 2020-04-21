<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_item;
use portal\Models\Cms\tab_item_detalle;
use portal\Models\Cms\tab_item_formato;
use portal\Models\Cms\tab_icono;
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

        switch($data->id_tab_item_formato){
          case 1:

            return View::make('cms.modulo.detalle.nuevo')->with([
              'data'  => $data
            ]);

          break;

          case 2:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.features.nuevo')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 4:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.howitworks.nuevo')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 5:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.showcase.nuevo')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 6:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.client.nuevo')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 7:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.price.nuevo')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 8:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.faq.nuevo')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          default:
              return redirect('/cms/modulo/editar'.'/'.$item);

          break;
        }

    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $data = tab_item_detalle::select( 'id', 'id_tab_item', 'de_item_detalle', 'de_contenido', 'url_imagen', 'in_activo', 
        'created_at', 'updated_at', 'id_tab_icono', 'id_tab_item_formato')
        ->where('id', '=', $id)
        ->first();

        $tab_item = tab_item::select( 'id_tab_item_formato')
        ->where('id', '=', $data->id_tab_item)
        ->first();

        switch($tab_item->id_tab_item_formato){
          case 1:

            return View::make('cms.modulo.detalle.editar')->with([
              'data'  => $data
            ]);

          break;

          case 2:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.features.editar')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 4:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.howitworks.editar')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 5:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.showcase.editar')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 6:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.client.editar')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 7:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.price.editar')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          case 8:

            $tab_icono = tab_icono::orderBy('id','asc')
            ->get();

            $tab_item_formato = tab_item_formato::orderBy('id','asc')
            ->where('id_tab_tipo', '=', 2)
            ->get();

            return View::make('cms.modulo.faq.editar')->with([
              'data'  => $data,
              'tab_icono'  => $tab_icono,
              'tab_item_formato'  => $tab_item_formato
            ]);

          break;

          default:
              return redirect('/cms/modulo/editar'.'/'.$data->id_tab_item);

          break;
        }

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

            if ($request->hasFile('imagen')) {
              $image           = $request->file('imagen');
              $name            = time() . '.' . $image->getClientOriginalExtension();
              $destinationPath = public_path('/images/media');
              $image->move($destinationPath, $name);
              $url = '/images/media/' . $name;
              //$url = url('/') . '/images/media/' . $name;
          }

            $tab_item_detalle = tab_item_detalle::find( $id);
            $tab_item_detalle->id_tab_item = $request->get("item");
            $tab_item_detalle->de_item_detalle = $request->get("descripcion");
            $tab_item_detalle->de_contenido = $request->get("contenido");
            $tab_item_detalle->id_tab_icono = $request->get("icono");
            $tab_item_detalle->id_tab_item_formato = $request->get("formato");
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
            $tab_item_detalle->id_tab_icono = $request->get("icono");
            $tab_item_detalle->id_tab_item_formato = $request->get("formato");
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar( Request $request, $id = NULL)
    {
      DB::beginTransaction();
      try {

        $tab_item_detalle = tab_item_detalle::find( $request->get("id"));
        $tab_item_detalle->delete();

        DB::commit();

        Session::flash('msg_side_overlay', 'Registro borrado con Exito!');
        return Redirect::to('/cms/modulo/editar'.'/'.$id);

      }catch (\Illuminate\Database\QueryException $e)
      {
        DB::rollback();
        return Redirect::back()->withErrors([
            'da_alert_form' => $e->getMessage()
        ])->withInput( $request->all());
      }
    }
}
