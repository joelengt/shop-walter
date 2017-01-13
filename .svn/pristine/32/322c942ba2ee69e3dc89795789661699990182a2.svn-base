<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Redirect as Redirect;

use App\User as User;
use \Auth;

class LoginControlador extends Controller
{
    /**
     * Cierra la Session del usuario.
     *
     * @param Request $request
     * @return mixed
     */
    public function CerrarSession(Request $request)
    {
        Auth::logout();
        return Redirect::to('admin/login');
    }

    public function Login(Request $request){
        //dd($request->method());
        if($request->method()==='GET')
            return view('privado.login');
        elseif ($request->method()==='POST')
        {
            $datos = $request->only(['usuario','password']);
            $usuario = $datos['usuario'];
            $password = $datos['password'];

            $auth = User::where('username', '=',$usuario)->where('password', '=', md5($password))->Activos()->first();

            if(!empty($auth)) {
                //dd($auth);
                Auth::login($auth);

                return Redirect::to('/admin/productos');
            }else{
                return Redirect::to('/admin/login')
                    ->withErrors(['Usuario o Password incorrectos']);
            }
        }
    }
}
