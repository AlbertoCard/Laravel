<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //vista para los logeados
    public function index(){
        if(Auth::check()){
            return view('logados');
        }
        return view('login');
    }

    //ver si el usuario existe y logearlo
    public function login(Request $request){
        //Comprobamos que los datos sean introducidos
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]);
        
        //Almacenamos las credenciales
        $credentials = $request->only('email', 'password');

        //si esta logeado lo llevamos a la vista
        if (Auth::attempt($credentials)) {
	        return redirect()->intended('logados')
	            ->withSuccess('Logado Correctamente');
	    }
        
        //si no existe lo devolvemos al formulario
        return redirect("login")->withSuccess('Credenciales incorrectas');
    }

    public function logados(){
        if(Auth::check()){
            return view('logados');
        }
	    return redirect("/")->withSuccess('No tienes acceso, por favor inicia sesión');
    }
}
