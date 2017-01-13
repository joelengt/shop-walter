<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = "productos";
    protected $primaryKey = "id_producto";

    public $timestamps = false;

    public function scopeBuscarProductos($query,$texto_buscar)
    {
        return $query->where("{$this->table}.nombre_producto",'LIKE',"%$texto_buscar%")->orWhere("{$this->table}.descripcion",'LIKE',"%$texto_buscar%");
    }

    public function scopePublicar($query)
    {
        return $query->where("{$this->table}.fecha_publicacion",'<=',date('Y-m-d'));
    }

    public function scopeActivos($query)
    {
        return $query->where("{$this->table}.habilitado",1);
    }

    public function scopePorCategoria($query,$id_categoria)
    {
        return $query->leftJoin('productos_categorias','productos_categorias.id_categoria','=','productos.id_producto')->where('productos_categorias.id_categoria',$id_categoria);
    }

    public function scopeBuscarPorSubCategoria($query)
    {
        return $query->where("{$this->table}.habilitado",1)->categorias;
    }

    public function GetUrlDetalleProducto()
    {
        return "productos/{$this->categorias[0]->padre->slug}/{$this->categorias[0]->slug}/{$this->slug}";
    }

    public function scopeBuscarProductoSlug($query,$id_categoria,$id_subcategoria,$producto)
    {
        return $query->where("{$this->table}.slug","=",$producto);
    }

    public function colores(){
        return $this->belongsToMany('App\Modelos\Colores', 'productos_colores', 'id_producto', 'id_color');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Modelos\Categorias', 'productos_categorias', 'id_producto', 'id_categoria');
    }

    public function imagenes()
    {
        return $this->belongsToMany('App\Modelos\Imagenes', 'productos_imagenes', 'id_producto', 'id_imagen');
    }

    public function especificaciones()
    {
        return $this->belongsToMany('App\Modelos\Especificaciones', 'productos_especificaciones', 'id_producto', 'id_especificacion');
    }

    public function carruseles()
    {
        return $this->belongsToMany('App\Modelos\Carruseles', 'productos_carruseles', 'id_producto', 'id_carrusel');
    }

    public function productos_categorias(){
        return $this->hasMany('App\Modelos\ProductosCategorias','id_producto','id_producto');
    }

    public function productos_colores(){
        return $this->hasMany('App\Modelos\ProductosColores','id_producto','id_producto');
    }

    public function productos_especificaciones(){
        return $this->hasMany('App\Modelos\ProductosEspecificaciones','id_producto','id_producto');
    }

    public function productos_carrusesles(){
        return $this->hasMany('App\Modelos\ProductosCarruseles','id_producto','id_producto');
    }

    public function scopeBuscarPorCategoriaPadre($query,$id_categoria_padre)
    {
        return $query->leftJoin('productos_categorias','productos_categorias.id_categoria','=','productos.id_producto')
                        ->leftJoin('categorias','categorias.id_categoria','=','productos_categorias.id_categoria')
                        ->where('categorias.id_categoria_padre',$id_categoria_padre);
    }
}
