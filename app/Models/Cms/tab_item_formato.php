<?php

namespace portal\Models\Cms;

use Illuminate\Database\Eloquent\Model;

class tab_item_formato extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'cms';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tab_item_formato';
}
