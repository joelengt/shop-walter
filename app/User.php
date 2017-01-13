<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "usuarios";

    protected $primaryKey = "id_usuario";

    public $timestamps = false;

    protected $created_at = false;

    public function scopeActivos($query)
    {
        return $query->where('habilitado',"=",1);
    }
}
