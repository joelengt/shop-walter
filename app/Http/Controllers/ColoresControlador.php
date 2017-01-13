<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Redirect;
use \Auth;
use \DB;
use Validator;

Use App\Modelos\Colores;

class ColoresControlador extends Controller
{
    /**
     * Carga reporte con los colores registrados.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Colores()
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $colores = Colores::paginate();

            return view('privado.colores.lista-colores', compact(['colores']));
        }
    }

    public function BorrarColores(Request $request,$id_color)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $color = Colores::find($id_color);

            if(!empty($color))
                $color->delete();

            DB::table('productos_colores')->where('id_color',$id_color)->delete();

            return Redirect::to('admin/colores');
        }
    }

    /**
     * Carga el formulario para editar un color.
     *
     * @param Request $request
     * @param integer $id_color Codigo de color a modificar.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function EditarColores(Request $request,$id_color)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $color = Colores::find($id_color);

            if ($request->method() == 'GET') {

                return view('privado.colores.editar-color', compact(['color']));
            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'nombre_color' => 'required|string|min:3',
                    'codigo_color' => 'required|string|min:4|max:7',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('editar-colores-admin',['id_color' => $id_color]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['nombre_color', 'codigo_color', 'habilitado']);

                $color->nombre_color = $datos['nombre_color'];
                $color->codigo_color = $datos['codigo_color'];
                $color->habilitado = $datos['habilitado'];

                $color->save();

                return Redirect::to('admin/colores');
            }
        }
    }

    /**
     * Carga el formulario para agregar un nuevo color.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AgregarColores(Request $request)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            if ($request->method() == 'GET') {
                return view('privado.colores.agregar-color');
            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'nombre_color' => 'required|string|min:3',
                    'codigo_color' => 'required|string|min:4|max:7',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('agregar-colores-admin'))
                        ->withErrors($validator)
                        ->withInput();
                }


                $datos = $request->only(['nombre_color', 'codigo_color', 'habilitado']);

                $color = new Colores();

                $color->nombre_color = $datos['nombre_color'];
                $color->codigo_color = $datos['codigo_color'];
                $color->habilitado = $datos['habilitado'];

                $color->save();

                return Redirect::to('admin/colores');
            }
        }
    }
}
