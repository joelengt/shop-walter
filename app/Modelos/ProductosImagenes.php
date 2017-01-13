<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class ProductosImagenes extends Model
{
    protected $table = "productos_imagenes";
    protected $primaryKey = "id_producto_imagen";

    public $timestamps = true;

    public function producto()
    {
        return $this->hasOne('App\Modelos\Producto','id_producto','id_producto');
    }
}
