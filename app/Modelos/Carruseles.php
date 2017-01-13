<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Carruseles extends Model
{
    protected $table = "carruseles";
    protected $primaryKey = "id_carrusel";

    public $timestamps = false;

    public function scopeActivos($query)
    {
        $query->where("{$this->table}.habilitado","=",1);
    }

    public function productos()
    {
        return $this->belongsToMany('App\Modelos\Productos', 'productos_carruseles', 'id_carrusel', 'id_producto');
    }
}
