<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //invoke se usa cuando solo se quiere administrar una unica ruta
    public function __invoke()
    {
        // return view('welcome');
        return view('home');   
    }
}
