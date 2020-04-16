<?php

namespace portal\Models\Cms;

use Illuminate\Database\Eloquent\Model;

class tab_item_detalle extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'cms';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tab_item_detalle';

    public static $validarCrear = array(
        "descripcion"    => "required",
        "contenido"    => "required",
        "imagen"       => "required|image|max:2048|mimes:jpeg,png",
      );
      
      public static $validarEditar = array(
        "descripcion"    => "required",
        "contenido"    => "required",
        "imagen"       => "required|image|max:2048|mimes:jpeg,png",
      );
}
