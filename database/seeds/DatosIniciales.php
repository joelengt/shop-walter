<?php

use Illuminate\Database\Seeder;

class DatosIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfiles')->insert([
            'nombre_perfil' => 'Administrador'
        ]);

        DB::table('usuarios')->insert([
            'username' => 'admin',
            'password' => md5('santiago'),
            'id_perfil' => 1,
            'habilitado' => 1,
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Boligrafos',
            'slug' => str_slug('Boligrafos')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 1,
            'nombre_categoria' => 'Plasticos + Metal',
            'slug' => str_slug('Plasticos + Metal')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 1,
            'nombre_categoria' => 'Plasticos',
            'slug' => str_slug('Plasticos')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 1,
            'nombre_categoria' => 'Metalicos',
            'slug' => str_slug('Metalicos')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 1,
            'nombre_categoria' => 'Estuches',
            'slug' => str_slug('Estuches')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 1,
            'nombre_categoria' => 'Sets',
            'slug' => str_slug('Sets')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 1,
            'nombre_categoria' => 'Tactiles',
            'slug' => str_slug('Tactiles')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Bolsos y Mochilas',
            'slug' => str_slug('Bolsos y Mochilas')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 8,
            'nombre_categoria' => 'Bolsos',
            'slug' => str_slug('Bolsos')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 8,
            'nombre_categoria' => 'Maletines',
            'slug' => str_slug('Maletines')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 8,
            'nombre_categoria' => 'Mochilas',
            'slug' => str_slug('Mochilas')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 8,
            'nombre_categoria' => 'Valijas & Carry-On',
            'slug' => str_slug('Valijas & Carry-On')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Hogar & Tiempo Libre',
            'slug' => str_slug('Hogar & Tiempo Libre')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 13,
            'nombre_categoria' => 'Hogar',
            'slug' => str_slug('Hogar')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 13,
            'nombre_categoria' => 'Vinos',
            'slug' => str_slug('Vinos')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 13,
            'nombre_categoria' => 'Tiempo Libre',
            'slug' => str_slug('Tiempo Libre')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 13,
            'nombre_categoria' => 'Herramientas',
            'slug' => str_slug('Herramientas')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Tecnologia',
            'slug' => str_slug('Tecnologia')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 18,
            'nombre_categoria' => 'Computacion',
            'slug' => str_slug('Computacion')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 18,
            'nombre_categoria' => 'Otros',
            'slug' => str_slug('Otros')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Escritorio',
            'slug' => str_slug('Escritorio')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 21,
            'nombre_categoria' => 'Accesorios',
            'slug' => str_slug('Accesorios')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 21,
            'nombre_categoria' => 'Libreria',
            'slug' => str_slug('Libreria')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Gorros',
            'slug' => str_slug('Gorros')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 24,
            'nombre_categoria' => 'Gorras',
            'slug' => str_slug('Gorras')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 24,
            'nombre_categoria' => 'Chambergo',
            'slug' => str_slug('Chambergo')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Termicos',
            'slug' => str_slug('Termicos')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 27,
            'nombre_categoria' => 'Coolers',
            'slug' => str_slug('Coolers')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 27,
            'nombre_categoria' => 'Jarros',
            'slug' => str_slug('Jarros')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 27,
            'nombre_categoria' => 'Termos',
            'slug' => str_slug('Termos')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Llaveros',
            'slug' => str_slug('Llaveros')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 31,
            'nombre_categoria' => 'Todos',
            'slug' => str_slug('Todos')
        ]);

        DB::table('categorias')->insert([
            'nombre_categoria' => 'Paraguas',
            'slug' => str_slug('Paraguas')
        ]);

        DB::table('categorias')->insert([
            'id_categoria_padre' => 33,
            'nombre_categoria' => 'Todos',
            'slug' => str_slug('Todos')
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Rojo',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Verde',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Plata',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Marron',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Negro',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Azul Francia',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Amarillo',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Celeste',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Tiza',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Azul Marino',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Gris',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Transparante',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Naranja',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Beige',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Jean',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Verde Militar',
            'codigo_color' => '#fff'
        ]);

        DB::table('colores')->insert([
            'nombre_color' => 'Violeta',
            'codigo_color' => '#fff'
        ]);

        DB::table('carruseles')->insert([
            'nombre_carrusel' => 'PRODUCTOS DESTACADOS',
            'nombre_corto' => 'DESTACADOS'
        ]);

        DB::table('carruseles')->insert([
            'nombre_carrusel' => 'NOVEDADES',
            'nombre_corto' => 'NOVEDADES'
        ]);
    }
}
