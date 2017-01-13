<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Modelos\Perfiles;
use App\Modelos\Usuarios;

use App\User;
use \Auth;
use Redirect;
use Validator;

class UsuariosControlador extends Controller
{
    public function Usuarios()
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $usuarios = User::paginate();

            return view('privado.usuarios.lista-usuarios', compact(['usuarios']));
        }
    }

    public function EditarUsuarios(Request $request,$id_usuario)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            $usuario = Usuarios::find($id_usuario);
            
            if ($request->method() == 'GET') {
                $perfiles = Perfiles::all();

                return view('privado.usuarios.editar-usuario', compact(['usuario','perfiles']));

            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'username' => 'required|alpha_num|min:5',
                    'id_perfil' => 'required|in:1',
                    'password' => 'alpha_num|min:10',
                    're_password' => 'required_with:password|same:password',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('editar-usuarios-admin',['id_usuario' => $id_usuario]))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['username', 'id_perfil','password','re_password','habilitado']);

                $usuario->username = $datos['username'];
                $usuario->id_perfil = $datos['id_perfil'];

                if(!empty(trim($datos['password'])))
                    $usuario->password = md5(trim($datos['password']));
                
                $usuario->habilitado = $datos['habilitado'];

                $usuario->save();

                return Redirect::to(route('usuarios-admin'));
            }
        }
    }

    public function AgregarUsuarios(Request $request)
    {
        if(!Auth::check()) {
            return Redirect::to('/admin/login');
        }else {
            if ($request->method() == 'GET') {
                $perfiles = Perfiles::all();

                return view('privado.usuarios.agregar-usuario',compact(['perfiles']));

            } elseif ($request->method() == 'POST') {

                $validator = Validator::make($request->all(), [
                    'username' => 'required|alpha_num|min:5',
                    'id_perfil' => 'required|in:1',
                    'password' => 'required|alpha_num|min:10',
                    're_password' => 'required_with:password|same:password',
                    'habilitado' => 'required|in:0,1',
                ]);

                if ($validator->fails()) {
                    return redirect(route('agregar-usuarios-admin'))
                        ->withErrors($validator)
                        ->withInput();
                }

                $datos = $request->only(['username', 'id_perfil','password','re_password','habilitado']);

                $usuario = new Usuarios();

                $usuario->username = $datos['username'];
                $usuario->password = md5(trim($datos['password']));
                $usuario->id_perfil = $datos['id_perfil'];
                $usuario->habilitado = $datos['habilitado'];

                $usuario->save();

                return Redirect::to(route('usuarios-admin'));
            }
            
        }
    }
}
