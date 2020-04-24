<?php

namespace portal\Http\Controllers\Portal;
//*******agregar esta linea******//
use portal\Models\Cms\tab_item;
use portal\Models\Cms\tab_item_detalle;
use portal\Models\Cms\tab_portal;
use View;
use DB;
//*******************************//
use Illuminate\Http\Request;

use portal\Http\Requests;
use portal\Http\Controllers\Controller;

class inicioController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    //$this->middleware('optimizar');
  }

      /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function inicio(Request $request)
  {
    $tab_portal = tab_portal::select( 'id', 'nb_portal', 'nb_cms', 'de_description', 'de_keywords', 'de_author', 
    'de_robots', 'de_og_title', 'de_og_site_name', 'de_og_description', 'de_og_type', 
    'de_og_url', 'de_og_image', 'url_shortcut_icon', 'in_activo', 'created_at', 
    'updated_at', 'de_analytics')
    ->where('id', '=', 1)
    ->first();

    $tab_item = tab_item::select( 'tab_item.id', 'de_item', 'de_contenido', 'de_item_formato', 'tab_item.id_tab_item_formato', 'tab_item.url_imagen')
    ->join('tab_item_formato as t01','t01.id','=','tab_item.id_tab_item_formato')
    ->where('tab_item.in_activo', '=', true)
    ->orderBy('tab_item.id', 'ASC')
    ->get();

    return View::make('home')->with([
      'portal'  => $tab_portal,
      'item'  => $tab_item,
      'hijo' => new inicioController,
    ]);

  }

  public function detalle( $id_tab_item) {

    $data = tab_item_detalle::select( 'tab_item_detalle.id', 'tab_item_detalle.id_tab_item', 'tab_item_detalle.de_item_detalle', 'tab_item_detalle.de_contenido', 'tab_item_detalle.url_imagen', 'tab_item_detalle.in_activo', 
    'tab_item_detalle.created_at', 'tab_item_detalle.updated_at', 'tab_item_detalle.id_tab_item_formato', 'de_icono')
    ->join('tab_item as t01','t01.id','=','tab_item_detalle.id_tab_item')
    ->leftJoin('tab_icono as t02','t02.id','=','tab_item_detalle.id_tab_icono')
    ->where('tab_item_detalle.id_tab_item', '=', $id_tab_item)
    ->where('t01.in_activo', '=', true)
    ->orderBy('tab_item_detalle.id', 'ASC')
    ->get();

    return $data;

  }
  
}
