<?php

namespace portal\Models\Cms;

use Illuminate\Database\Eloquent\Model;

class tab_portal extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'cms';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tab_portal';

    public static $validarEditar = array(
        "titulo"    => "required"
	);

}
