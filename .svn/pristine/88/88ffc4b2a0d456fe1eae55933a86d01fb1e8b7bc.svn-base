<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = "categorias";
    protected $primaryKey = "id_categoria";

    public $timestamps = false;

    public function scopeActivas($query)
    {
        return $query->where("{$this->table}.habilitado",1);
    }

    public function scopeBuscarPadreSlug($query,$slug)
    {
        return $query->where("{$this->table}.slug","=",$slug);
    }

    public function scopeBuscarHijoSlug($query,$slug,$id_categoria_padre)
    {
        return $query->where("{$this->table}.slug","=",$slug)->where("{$this->table}.id_categoria_padre","=",$id_categoria_padre);
    }

    public function scopeCategoriasPrincipales($query)
    {
        return $query->where("{$this->table}.id_categoria_padre","=",NULL)->orderBy("{$this->table}.orden");
    }

    public function scopeBuscarSubcategorias($query,$id_categoria_padre)
    {
        return $query->where("{$this->table}.id_categoria_padre",$id_categoria_padre);
    }

    public function scopeBuscarCategoriaPrincipal($query,$slug)
    {
        return $query->where("{$this->table}.id_categoria_padre","=",NULL)->where("{$this->table}.slug",$slug);
    }

    public function padre(){
        return $this->hasOne('App\Modelos\Categorias','id_categoria','id_categoria_padre');
    }

    public function subcategorias()
    {
        return $this->hasMany('App\Modelos\Categorias','id_categoria_padre','id_categoria')->orderBy('orden')->orderBy('id_categoria');
    }

    public function imagen_menu()
    {
        return $this->hasOne('App\Modelos\Imagenes','id_imagen','id_imagen');
    }

    public function imagen_principal()
    {
        return $this->hasOne('App\Modelos\Imagenes','id_imagen','id_imagen_principal');
    }

    public function scopeNoPrincipales($query){
        return $query->where("{$this->table}.id_categoria_padre","<>",NULL);
    }

    public function productos()
    {
        return $this->belongsToMany('App\Modelos\Productos', 'productos_categorias', 'id_categoria', 'id_producto');
    }

    public function UrlCategoria()
    {
        if(!empty($this->padre))
            return "/productos/{$this->padre->slug}/{$this->slug}";
        else
            return "/productos/{$this->slug}";
    }

    public function scopeBuscarPorCategoriaPadre($query,$id_categoria_padre)
    {
        return $query->where("{$this->table}.id_categoria_padre",$id_categoria_padre);
    }

    public function productos_principales()
    {
        return $this->belongsToMany('App\Modelos\Productos', 'productos_categorias', 'id_categoria', 'id_producto');
    }
}
