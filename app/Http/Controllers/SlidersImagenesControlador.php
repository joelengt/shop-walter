<?php

namespace App\Http\Controllers;

use App\Modelos\Sliders;
use App\Modelos\SlidersImagenes;
use App\Modelos\Imagenes;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use DB;
use Redirect;
use Validator;

class SlidersImagenesControlador extends Controller
{
    public function SlidersImagenes(Request $request,$id_slider)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $imagenes = SlidersImagenes::where('id_slider', $id_slider)->paginate();
            $slider = Sliders::find($id_slider);//dd($slider->imagenes);
            return view("privado.slider-imagenes.lista-sliders-imagenes", compact(['slider', 'imagenes']));
        }
    }

    public function AgregarImagenSlider(Request $request,$id_slider)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            if ($request->method() == 'GET') {
                $slider = Sliders::find($id_slider);
                return view('privado.slider-imagenes.agregar-imagen-slider',compact(['slider']));
            }elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'imagen_slider' => 'required|file|image',
                    'habilitado' => 'required|in:0,1',
                    'url' => 'string|min:10',
                ]);

                if ($validator->fails()) {

                    return redirect(route('agregar-slider-imagen-admin',['id_slider'=>$id_slider]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['habilitado','url']);

                $imagen = new Imagenes();

                $imagen_slider = $request->file('imagen_slider');
                $ruta_destino = 'sliders/';

                if (!empty($imagen_slider) && $imagen_slider->isValid()) {
                    $extension = $imagen_slider->getClientOriginalExtension();
                    $nombre = GenerarCadenaAleatoria();
                    $nombre_archivo = "{$nombre}.{$extension}";
                    $imagen_slider->move($ruta_destino, $nombre_archivo);

                    $imagen->ruta_imagen = "$ruta_destino$nombre_archivo";
                }

                $imagen->habilitado = $datos['habilitado'];
                $imagen->save();

                DB::table('sliders_imagenes')->insert(
                    ['id_slider' => $id_slider, 'id_imagen' => $imagen->id_imagen,'url' => $datos['url']]
                );

                return Redirect::to(route('sliders-imagenes-admin',['id_slider'=>$id_slider]));
            }
        }
    }


    public function EditarImagenSlider(Request $request,$id_slider,$id_slider_imagen)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {

            $slider_imagen = SlidersImagenes::find($id_slider_imagen);
            if ($request->method() == 'GET') {

                return view('privado.slider-imagenes.editar-imagen-slider',compact(['slider_imagen']));
            }elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'imagen_slider' => 'required|file|image',
                    'habilitado' => 'required|in:0,1',
                    'url' => 'string|min:10',
                ]);

                if ($validator->fails()) {

                    return redirect(route('editar-slider-imagen-admin',['id_slider' => $id_slider , 'id_slider_imagen' => $id_slider_imagen]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $imagen = $slider_imagen->imagen;
                $datos = $request->only(['habilitado','url']);

                $archivo_imagen = $request->file('imagen_slider');
                $ruta_destino = 'sliders/';

                if (!empty($archivo_imagen) && $archivo_imagen->isValid()) {
                    $extension = $archivo_imagen->getClientOriginalExtension();
                    $nombre = GenerarCadenaAleatoria();
                    $nombre_archivo = "{$nombre}.{$extension}";
                    $archivo_imagen->move($ruta_destino, $nombre_archivo);

                    $imagen->ruta_imagen = "$ruta_destino$nombre_archivo";
                }

                $slider_imagen->habilitado = $datos['habilitado'];
                $imagen->habilitado = $datos['habilitado'];
                $slider_imagen->url = $datos['url'];
                $imagen->save();

                return Redirect::to(route('sliders-imagenes-admin',['id_slider'=>$id_slider]));
            }
        }
    }
}
