<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class SlidersImagenes extends Model
{
    protected $table = "sliders_imagenes";
    protected $primaryKey = "id_slider_imagen";

    public $timestamps = true;

    public function slider()
    {
        return $this->hasOne('App\Modelos\Sliders','id_slider','id_slider');
    }

    public function imagen()
    {
        return $this->hasOne('App\Modelos\Imagenes','id_imagen','id_imagen');
    }
}