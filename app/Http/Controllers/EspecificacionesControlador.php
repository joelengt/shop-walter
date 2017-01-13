<?php

namespace App\Http\Controllers;

use App\Modelos\Especificaciones;
use App\Modelos\Imagenes;
use Illuminate\Http\Request;

use App\Http\Requests;
use \Redirect;
use \Auth;
use \DB;
use Validator;

class EspecificacionesControlador extends Controller
{
    /**
     * Carga el reporte de las especificaciones registradas.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Especificaciones()
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $especificaciones = Especificaciones::paginate();

            return view('privado.especificaciones.lista-especificaciones', compact(['especificaciones']));
        }
    }

    public function BorrarEspecificacion(Request $request,$id_especificacion)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $especificacion = Especificaciones::find($id_especificacion);

            DB::table('productos_especificaciones')->where('id_especificacion',$id_especificacion)->delete();

            if(!empty($especificacion))
                $especificacion->delete();

            return Redirect::to('admin/especificaciones');
        }
    }

    /**
     * Carga formulario para editar una especificacion.
     *
     * @param Request $request
     * @param integer $id_especificacion Codigo de especificacion.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function EditarEspecificacion(Request $request,$id_especificacion)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $especificacion = Especificaciones::find($id_especificacion);

            if ($request->method() == 'GET') {
                return view('privado.especificaciones.editar-especificacion', compact(['especificacion']));
            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'nombre_especificacion' => 'required|string',
                    'imagen_especificacion' => 'file|image',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('editar-especificacion-admin',['id_especificacion' => $id_especificacion]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['nombre_especificacion', 'habilitado']);

                $imagen_especificacion = $request->file('imagen_especificacion');
                $ruta_destino = 'especificacion/';

                /**
                 * Guardamos la imagen de la categoria en el menu.
                 */
                if (!empty($imagen_especificacion) && $imagen_especificacion->isValid()) {
                    $extension = $imagen_especificacion->getClientOriginalExtension();
                    $nombre = GenerarCadenaAleatoria();
                    $nombre_archivo = "{$nombre}.{$extension}";
                    $imagen_especificacion->move($ruta_destino, $nombre_archivo);

                    $archivo_imagen = $especificacion->imagen;

                    if (!empty($archivo_imagen)) {
                        $archivo_imagen->ruta_imagen = "$ruta_destino$nombre_archivo";

                        $archivo_imagen->save();
                    } else {
                        $imagen = new Imagenes();
                        $imagen->ruta_imagen = "$ruta_destino$nombre_archivo";

                        $imagen->save();

                        $especificacion->icono = $imagen->id_imagen;
                    }
                }

                $especificacion->nombre_especificacion = $datos['nombre_especificacion'];
                $especificacion->habilitado = $datos['habilitado'];

                $especificacion->save();

                return Redirect::to('admin/especificaciones');
            }
        }
    }

    /**
     * Carga formulario para agregar una nueva especificacion.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AgregarEspecificacion(Request $request){
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            if ($request->method() == 'GET') {
                return view('privado.especificaciones.agregar-especificacion');
            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'nombre_especificacion' => 'required|string',
                    'imagen_especificacion' => 'required|file|image',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('agregar-especificacion-admin'))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['nombre_especificacion', 'habilitado']);
                $imagen_especificacion = $request->file('imagen_especificacion');
                $ruta_destino = 'especificacion/';
                $especificacion = new Especificaciones();

                if (!empty($imagen_especificacion) && $imagen_especificacion->isValid()) {
                    $extension = $imagen_especificacion->getClientOriginalExtension();
                    $nombre = GenerarCadenaAleatoria();
                    $nombre_archivo = "{$nombre}.{$extension}";
                    $imagen_especificacion->move($ruta_destino, $nombre_archivo);

                    $imagen = new Imagenes();
                    $imagen->ruta_imagen = "$ruta_destino$nombre_archivo";

                    $imagen->save();

                    $especificacion->icono = $imagen->id_imagen;
                }

                $especificacion->nombre_especificacion = $datos['nombre_especificacion'];
                $especificacion->habilitado = $datos['habilitado'];

                $especificacion->save();

                return Redirect::to('admin/especificaciones');
            }
        }
    }
}
