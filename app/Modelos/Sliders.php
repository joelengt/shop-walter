<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table = "sliders";
    protected $primaryKey = "id_slider";

    public $timestamps = false;

    public function imagenes()
    {
        return $this->belongsToMany('App\Modelos\Imagenes', 'sliders_imagenes', 'id_slider', 'id_imagen')->withPivot('habilitado','url');
    }

    public function scopeActivos($query)
    {
        return $query->where("{$this->table}.habilitado",1);
    }
}
