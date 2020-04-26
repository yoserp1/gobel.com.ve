<?php

namespace portal\Models\Cms;

use Illuminate\Database\Eloquent\Model;

class tab_articulo extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'cms';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tab_articulo';
}
