<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Configuraciones extends Model
{
    protected $table = "configuraciones";
    protected $primaryKey = "id_configuracion";

    public $timestamps = false;

    public function scopeActivas($query)
    {
        return $query->where("{$this->table}.habilitado",1);
    }

    public function imagen()
    {
        return $this->hasOne('App\Modelos\Imagenes','id_imagen','id_imagen');
    }
}
