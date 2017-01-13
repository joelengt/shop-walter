<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablasIniciales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles', function (Blueprint $tabla) {
            $tabla->increments('id_perfil');
            $tabla->string('nombre_perfil',100);
            $tabla->tinyInteger('habilitado')->default(1);
            $tabla->engine = 'MyISAM';
        });

        Schema::create('usuarios', function (Blueprint $tabla) {
            $tabla->increments('id_usuario');
            $tabla->string('username',100);
            $tabla->string('password',300);
            $tabla->integer('id_perfil');
            $tabla->tinyInteger('habilitado')->default(1);
            $tabla->engine = 'MyISAM';
        });

        Schema::create('carruseles', function (Blueprint $tabla) {
            $tabla->increments('id_carrusel');
            $tabla->string('nombre_carrusel',100);
            $tabla->string('nombre_corto',100)->nullable();
            $tabla->integer('orden')->default(1);
            $tabla->tinyInteger('habilitado')->default(1);
            $tabla->engine = 'MyISAM';
        });

        Schema::create('colores', function (Blueprint $tabla) {
            $tabla->increments('id_color');
            $tabla->string('nombre_color',100);
            $tabla->string('codigo_color',100);
            $tabla->tinyInteger('habilitado')->default(1);
            $tabla->engine = 'MyISAM';
        });

        Schema::create('imagenes', function (Blueprint $tabla) {
            $tabla->increments('id_imagen');
            $tabla->string('ruta_imagen',400);
            $tabla->tinyInteger('habilitado')->default(1);
            $tabla->engine = 'MyISAM';
        });

        if (!Schema::hasTable('especificaciones')) {
            Schema::create('especificaciones', function (Blueprint $tabla) {
                $tabla->increments('id_especificacion');
                $tabla->string('nombre_especificacion', 100);
                $tabla->integer('icono');
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });
        }

        if (!Schema::hasTable('categorias')) {
            Schema::create('categorias', function (Blueprint $tabla) {
                $tabla->increments('id_categoria');
                $tabla->integer('id_categoria_padre')->unsigned()->nullable();
                $tabla->string('nombre_categoria',250);
                $tabla->integer('id_imagen')->unsigned()->nullable();
                $tabla->integer('id_imagen_principal')->unsigned()->nullable();
                $tabla->string('slug',250)->nullable();
                $tabla->integer('orden')->default(1);
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('categorias', function (Blueprint $tabla) {
                $tabla->foreign('id_categoria_padre')->references('id_categoria')->on('categorias')->onDelete('set null');
                $tabla->foreign('id_imagen')->references('id_imagen')->on('imagenes')->onDelete('set null');
                $tabla->foreign('id_imagen_principal')->references('id_imagen')->on('imagenes')->onDelete('set null');
            });
        }

        Schema::create('productos', function (Blueprint $tabla) {
            $tabla->increments('id_producto');
            $tabla->string('nombre_producto',400);
            $tabla->text('descripcion');
            $tabla->integer('stock')->default(0);
            $tabla->float('precio')->default(0);
            $tabla->string('slug',400);
            $tabla->date('fecha_publicacion');
            $tabla->integer('id_usuario_creacion')->nullable();
            $tabla->integer('id_usuario_modificacion')->nullable();
            $tabla->dateTime('fecha_creacion');
            $tabla->dateTime('fecha_modificacion');
            $tabla->tinyInteger('habilitado')->default(1);
            $tabla->engine = 'MyISAM';

        });

        if (!Schema::hasTable('productos_categorias')) {

            Schema::create('productos_categorias', function (Blueprint $tabla) {
                $tabla->increments('id_producto_categoria');
                $tabla->integer('id_producto')->unsigned();
                $tabla->integer('id_categoria')->unsigned();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('productos_categorias', function (Blueprint $tabla) {
                $tabla->foreign('id_producto')->references('id_producto')->on('productos');
                $tabla->foreign('id_categoria')->references('id_categoria')->on('categorias');
            });
        }

        if (!Schema::hasTable('productos_especificaciones')) {
            Schema::create('productos_especificaciones', function (Blueprint $tabla) {
                $tabla->increments('id_producto_especificacion');
                $tabla->integer('id_producto')->unsigned();
                $tabla->integer('id_especificacion')->unsigned();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('productos_especificaciones', function (Blueprint $tabla) {
                $tabla->foreign('id_producto')->references('id_producto')->on('productos');
                $tabla->foreign('id_especificacion')->references('id_especificacion')->on('especificaciones');
            });
        }

        if (!Schema::hasTable('productos_carruseles')) {
            Schema::create('productos_carruseles', function (Blueprint $tabla) {
                $tabla->increments('id_producto_carrusel');
                $tabla->integer('id_producto')->unsigned();
                $tabla->integer('id_carrusel')->unsigned();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('productos_carruseles', function (Blueprint $tabla) {
                $tabla->foreign('id_producto')->references('id_producto')->on('productos');
                $tabla->foreign('id_carrusel')->references('id_carrusel')->on('carruseles');
            });
        }

        if (!Schema::hasTable('productos_colores')) {
            Schema::create('productos_colores', function (Blueprint $tabla) {
                $tabla->increments('id_producto_color');
                $tabla->integer('id_producto')->unsigned();
                $tabla->integer('id_color')->unsigned();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('productos_colores', function (Blueprint $tabla) {
                $tabla->foreign('id_producto')->references('id_producto')->on('productos');
                $tabla->foreign('id_color')->references('id_color')->on('colores');
            });
        }

        if (!Schema::hasTable('usuarios')) {
            Schema::create('usuarios', function (Blueprint $tabla) {
                $tabla->increments('id_usuario');
                $tabla->string('username','100')->unsigned();
                $tabla->string('password','300')->unsigned();
                $tabla->integer('id_perfil')->unsigned()->nullable();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('usuarios', function (Blueprint $tabla) {
                $tabla->foreign('id_perfil')->references('id_perfil')->on('perfiles');
            });
        }

        if (!Schema::hasTable('productos')) {
            Schema::table('productos', function (Blueprint $tabla) {
                $tabla->foreign('id_usuario_creacion')->references('id_usuario')->on('usuarios');
                $tabla->foreign('id_usuario_modificacion')->references('id_usuario')->on('usuarios');
            });
        }

        if (!Schema::hasTable('marcas')) {
            Schema::create('marcas', function (Blueprint $tabla) {
                $tabla->increments('id_marca');
                $tabla->string('nombre_marca',100);
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });
        }

        if (!Schema::hasTable('categorias_marcas')) {
            Schema::create('categorias_marcas', function (Blueprint $tabla) {
                $tabla->increments('id_categoria_marca');
                $tabla->integer('id_categoria')->unsigned();
                $tabla->integer('id_marca')->unsigned();
                $tabla->engine = 'MyISAM';
            });

            Schema::table('categorias_marcas', function (Blueprint $tabla) {
                $tabla->foreign('id_categoria')->references('id_categoria')->on('categorias');
                $tabla->foreign('id_marca')->references('id_marca')->on('marcas');
            });
        }

        if (!Schema::hasTable('sliders')) {
            Schema::create('sliders', function (Blueprint $tabla) {
                $tabla->increments('id_slider');
                $tabla->string('nombre_slider',200);
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });
        }

        if (!Schema::hasTable('sliders_imagenes')) {
            Schema::create('sliders_imagenes', function (Blueprint $tabla) {
                $tabla->increments('id_slider_imagenes');
                $tabla->integer('id_slider')->unsigned();
                $tabla->integer('id_imagen')->unsigned();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('sliders_imagenes', function (Blueprint $tabla) {
                $tabla->foreign('id_slider')->references('id_slider')->on('sliders');
                $tabla->foreign('id_imagen')->references('id_imagen')->on('imagenes');
            });
        }

        if (!Schema::hasTable('productos_imagenes')) {
            Schema::create('productos_imagenes', function (Blueprint $tabla) {
                $tabla->increments('productos_imagenes');
                $tabla->integer('id_producto')->unsigned();
                $tabla->integer('id_imagen')->unsigned();
                $tabla->tinyInteger('habilitado')->default(1);
                $tabla->engine = 'MyISAM';
            });

            Schema::table('productos_imagenes', function (Blueprint $tabla) {
                $tabla->foreign('id_producto')->references('id_producto')->on('productos');
                $tabla->foreign('id_imagen')->references('id_imagen')->on('imagenes');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('perfiles');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('carruseles');
        Schema::dropIfExists('colores');
        Schema::dropIfExists('imagenes');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('productos_categorias');
        Schema::dropIfExists('productos_especificaciones');
        Schema::dropIfExists('productos_carruseles');
        Schema::dropIfExists('productos_colores');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('marcas');
        Schema::dropIfExists('categorias_marcas');
        Schema::dropIfExists('sliders');
        Schema::dropIfExists('sliders_imagenes');
        Schema::dropIfExists('productos_galerias');
        Schema::dropIfExists('especificaciones');
        Schema::dropIfExists('galerias');
        Schema::dropIfExists('galerias_imagenes');
        Schema::dropIfExists('productos_imagenes');

        Schema::enableForeignKeyConstraints();
    }
}
