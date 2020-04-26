<?php

namespace portal\Models\Cms;

use Illuminate\Database\Eloquent\Model;

class tab_item extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'cms';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tab_item';

    public static $validarCrear = array(
      "formato"    => "required|numeric",
      "descripcion"    => "required",
    );
    
    public static $validarEditar = array(
      "formato"    => "required|numeric",
      "descripcion"    => "required",
      "imagen"       => "image|max:2048|mimes:jpeg,png",
    );

    public function scopeSearch($query, $q, $sortBy)
    {
      switch ($sortBy) {
          case 'id':
              return $query->where('de_item', 'ILIKE', "%{$q}%");
          break;
            default:
              return $query;
          break;
      }
    }

    protected function maximo(){

      $tab_maximo = tab_item::select( 'id')
      ->orderBy('nu_orden', 'desc')
      ->first();

      if($tab_maximo!=null){
        $maximo = $tab_maximo->id;
      }else{
        $maximo = 0;
      }

      return $maximo;
    }

    protected function minimo(){

      $tab_minimo = tab_item::select( 'id')
      ->orderBy('nu_orden', 'asc')
      ->first();

      if($tab_minimo!=null){
        $minimo = $tab_minimo->id;
      }else{
        $minimo = 0;
      }

      return $minimo;
    }
}
