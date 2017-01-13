<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Colores extends Model
{
    protected $table = "colores";
    protected $primaryKey = "id_color";

    public $timestamps = false;

    public function scopeActivas($query)
    {
        return $query->where("{$this->table}.habilitado","=",1);
    }
}
