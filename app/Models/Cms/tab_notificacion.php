<?php

namespace portal\Models\Cms;
//*******agregar esta linea******//
use Carbon\Carbon;
use App;
//*******************************//
use Illuminate\Database\Eloquent\Model;

class tab_notificacion extends Model
{
    //Nombre de la conexion que utitlizara este modelo
    protected $connection= 'cms';

    //Todos los modelos deben extender la clase Eloquent
    protected $table = 'tab_notificacion';

    protected $appends = ['TimeAgo'];

    public function getTimeAgoAttribute()
    {
        Carbon::setLocale(App::getLocale());
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
