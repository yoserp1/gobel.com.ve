<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_portal;
use portal\Models\Cms\tab_notificacion;
use View;
use DB;
use Validator;
use Redirect;
use Session;
use Auth;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

class portalController extends Controller
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
    public function editar()
    {
        $data = tab_portal::select( 'id', 'nb_portal', 'nb_cms', 'de_description', 'de_keywords', 'de_author', 
        'de_robots', 'de_og_title', 'de_og_site_name', 'de_og_description', 'de_og_type', 
        'de_og_url', 'de_og_image', 'url_shortcut_icon')
        ->where('id', '=', 1)
        ->first();

        return View::make('cms.portal.editar')->with([
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

            $validador = Validator::make( $request->all(), tab_portal::$validarEditar);
            if ($validador->fails()) {
                return Redirect::back()->withErrors( $validador)->withInput( $request->all());
            }

            try {

                if ($request->hasFile('shortcut_icon')) {
                    $image           = $request->file('shortcut_icon');
                    $name            = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/icon');
                    $image->move($destinationPath, $name);
                    $url = '/images/icon/' . $name;
                    //$url = url('/') . '/images/icon/' . $name;
                }

                $tab_portal = tab_portal::find( $id);
                $tab_portal->nb_portal = $request->get("titulo");
                //$tab_portal->nb_cms = $request->get("cms");
                $tab_portal->de_description = $request->get("description");
                $tab_portal->de_keywords = $request->get("keywords");
                $tab_portal->de_author = $request->get("author");
                $tab_portal->de_robots = $request->get("robots");
                $tab_portal->de_og_title = $request->get("og_title");
                $tab_portal->de_og_site_name = $request->get("og_site_name");
                $tab_portal->de_og_description = $request->get("og_description");
                $tab_portal->de_og_type = $request->get("og_type");
                $tab_portal->de_og_url = $request->get("og_url");
                $tab_portal->de_og_image = $request->get("og_image");
                if (!empty($url)) {
                    $tab_portal->url_shortcut_icon = $url;
                }
                $tab_portal->de_analytics = $request->get("analytics");
                $tab_portal->save();
    
                $tab_notificacion = new tab_notificacion;
                $tab_notificacion->id_tab_usuario = Auth::user()->id;
                $tab_notificacion->de_notificacion = 'Actualizaci??n de datos del Portal';
                $tab_notificacion->ip_cliente = $request->ip();
                $tab_notificacion->de_icono = 'fa-laptop-code text-info';
                $tab_notificacion->save();

                DB::commit();

                Session::flash('msg_side_overlay', 'Registro Editado con Exito!');
                return Redirect::to('/cms/portal/editar');

            }catch (\Illuminate\Database\QueryException $e)
            {
                DB::rollback();
                return Redirect::back()->withErrors([
                    'da_alert_form' => $e->getMessage()
                ])->withInput( $request->all());
            }

        }else{

        }

    }
}
