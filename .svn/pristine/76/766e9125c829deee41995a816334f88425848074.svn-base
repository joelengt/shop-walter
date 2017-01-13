<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Especificaciones extends Model
{
    protected $table = "especificaciones";
    protected $primaryKey = "id_especificacion";

    public $timestamps = false;

    public function imagen()
    {
        return $this->hasOne('App\Modelos\Imagenes','id_imagen','icono');
    }
}
