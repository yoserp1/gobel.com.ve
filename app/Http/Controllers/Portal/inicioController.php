<?php

namespace portal\Http\Controllers\Portal;
//*******agregar esta linea******//
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

    return View::make('home');

  }
}
