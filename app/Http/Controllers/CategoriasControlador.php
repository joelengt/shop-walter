<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Redirect;
use \Auth;
use \DB;
use Validator;

use App\Modelos\Categorias;
use App\Modelos\Imagenes;

class CategoriasControlador extends Controller
{
    private function GenerarNombreArchivo($length=40) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'),range('A', 'Z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    /**
     * Carga reporte con todas las categorias registradas.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Categorias()
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $categorias = Categorias::with(['padre'])->paginate();

            return view('privado.categorias.lista-categorias', compact(['categorias', 'categoria_principal', 'subcategoria']));
        }
    }

    /**
     * Borrar una categoria de la BD.
     *
     * @param Request $request
     * @param integer $id_categoria Codigo de la categoria.
     * @return mixed
     */
    public function BorrarCategorias(Request $request,$id_categoria)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $categoria = Categorias::find($id_categoria);

            DB::table('productos_categorias')->where('id_categoria',$id_categoria)->delete();

            if(!empty($categoria))
                $categoria->delete();

            return Redirect::to('admin/categorias');
        }
    }

    /**
     * Carga el formulario para editar una categoria.
     *
     * @param Request $request
     * @param integer $id_categoria Codigo de categoria.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function EditarCategorias(Request $request,$id_categoria)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $categoria = Categorias::find($id_categoria);

            if ($request->method() == 'GET') {
                $principales = Categorias::CategoriasPrincipales()->get();

                return view('privado.categorias.editar-categoria', compact(['categoria', 'principales']));
            } elseif ($request->method() == 'POST') {

                $categorias = Categorias::all();
                $codigos_categorias = "";
                foreach ($categorias as $categoria){
                    $codigos_categorias .= "{$categoria->id_categoria},";
                }

                $validator = Validator::make($request->all(), [
                    'id_categoria_padre' => 'integer|in:'.trim($codigos_categorias,','),
                    'nombre_categoria' => 'required|string',
                    'orden' => 'required|integer',
                    'imagen_menu' => 'file|image',
                    'imagen_principal' => 'file|image',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('editar-categorias-admin',['id_categoria' => $id_categoria]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['id_categoria_padre', 'nombre_categoria', 'orden', 'habilitado']);

                $imagen_menu = $request->file('imagen_menu');
                $imagen_principal = $request->file('imagen_principal');
                $ruta_destino = 'categorias/';

                /**
                 * Guardamos la imagen de la categoria en el menu.
                 */
                if (!empty($imagen_menu) && $imagen_menu->isValid()) {
                    $extension = $imagen_menu->getClientOriginalExtension();
                    $nombre = $this->GenerarNombreArchivo();
                    $nombre_archivo = "{$nombre}.{$extension}";
                    $imagen_menu->move($ruta_destino, $nombre_archivo);

                    $archivo_imagen = $categoria->imagen_menu;

                    if (!empty($archivo_imagen)) {
                        $archivo_imagen->ruta_imagen = "$ruta_destino$nombre_archivo";

                        $archivo_imagen->save();
                    } else {
                        $imagen = new Imagenes();
                        $imagen->ruta_imagen = "$ruta_destino$nombre_archivo";

                        $imagen->save();

                        $categoria->id_imagen = $imagen->id_imagen;
                    }
                }

                /**
                 * Guardamos la imagen principal de la categoria.
                 */
                if (!empty($imagen_principal) && $imagen_principal->isValid()) {
                    $extension = $imagen_principal->getClientOriginalExtension();
                    $nombre = $this->GenerarNombreArchivo();
                    $nombre_archivo = "{$nombre}.{$extension}";
                    $imagen_principal->move($ruta_destino, $nombre_archivo);

                    $archivo_principal = $categoria->imagen_principal;

                    if (!empty($archivo_principal)) {
                        $archivo_principal->ruta_imagen = "$ruta_destino$nombre_archivo";

                        $archivo_principal->save();
                    } else {
                        $imagen = new Imagenes();
                        $imagen->ruta_imagen = "$ruta_destino$nombre_archivo";

                        $imagen->save();

                        $categoria->id_imagen_principal = $imagen->id_imagen;
                    }
                }

                $categoria->id_categoria_padre = empty($datos['id_categoria_padre']) ? NULL : $datos['id_categoria_padre'];
                $categoria->nombre_categoria = $datos['nombre_categoria'];
                $categoria->slug = str_slug($datos['nombre_categoria']);
                $categoria->orden = $datos['orden'];
                $categoria->habilitado = $datos['habilitado'];

                $categoria->save();

                return Redirect::to('admin/categorias');
            }
        }
    }

    /**
     * Carga el formulario para agregar una nueva categoria.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AgregarCategorias(Request $request)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {

            if ($request->method() == 'GET') {
                $principales = Categorias::CategoriasPrincipales()->get();

                return view('privado.categorias.agregar-categoria', compact(['categoria', 'principales']));
            } elseif ($request->method() == 'POST') {

                $categorias = Categorias::all();
                $codigos_categorias = "";
                foreach ($categorias as $categoria){
                    $codigos_categorias .= "{$categoria->id_categoria},";
                }

                $validator = Validator::make($request->all(), [
                    'id_categoria_padre' => 'integer|in:'.trim($codigos_categorias,','),
                    'nombre_categoria' => 'required|string',
                    'orden' => 'required|integer',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('agregar-categorias-admin'))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['id_categoria_padre', 'nombre_categoria', 'orden', 'habilitado']);

                $categoria = new Categorias();

                $categoria->id_categoria_padre = empty($datos['id_categoria_padre']) ? NULL : $datos['id_categoria_padre'];
                $categoria->nombre_categoria = $datos['nombre_categoria'];
                $categoria->slug = str_slug($datos['nombre_categoria']);
                $categoria->orden = $datos['orden'];
                $categoria->habilitado = $datos['habilitado'];

                $categoria->save();

                return Redirect::to('admin/categorias');
            }
        }
    }
}
