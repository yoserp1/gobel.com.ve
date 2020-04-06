<?php

namespace portal\Http\Controllers\Cms;
//*******agregar esta linea******//
use portal\Models\Cms\tab_portal;
use View;
use DB;
use Auth;
use Response;
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
        //$this->middleware('optimizar');
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
}
