<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table = "imagenes";
    protected $primaryKey = "id_imagen";

    public $timestamps = false;
}
