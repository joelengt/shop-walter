<?php

namespace App\Http\Controllers;

use App\Modelos\Sliders;
use Illuminate\Http\Request;

use App\Http\Requests;
use \Auth;
use \Redirect;
use \DB;
use Validator;

class SlidersControlador extends Controller
{
    public function Sliders()
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $sliders = Sliders::paginate();

            return view('privado.sliders.lista-sliders', compact(['sliders']));
        }
    }

    public function BorrarSlider(Request $request,$id_slider)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else{
            $slider = Sliders::find($id_slider);

            $slider->delete();

            return Redirect::to('admin/sliders');
        }
    }

    public function EditarSlider(Request $request,$id_slider)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $slider = Sliders::find($id_slider);

            if ($request->method() == 'GET') {
                return view('privado.sliders.editar-slider', compact(['slider']));
            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'nombre_slider' => 'required|string|min:5',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {

                    return redirect(route('editar-slider-admin',['id_slider'=>$id_slider]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['nombre_slider', 'habilitado']);

                $slider->nombre_slider = $datos['nombre_slider'];
                $slider->habilitado = $datos['habilitado'];

                $slider->save();

                return Redirect::to('admin/sliders');
            }
        }
    }

    public function AgregarSlider(Request $request)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            if ($request->method() == 'GET') {
                return view('privado.sliders.agregar-slider');
            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'nombre_slider' => 'required|string|min:5',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {

                    return redirect(route('agregar-slider-admin'))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['nombre_slider', 'habilitado']);

                $slider = new Sliders();

                $slider->nombre_slider = $datos['nombre_slider'];
                $slider->habilitado = $datos['habilitado'];

                $slider->save();

                return Redirect::to('admin/sliders');
            }
        }
    }
}
