<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        //se manda la variable a traves de un arreglo
        //return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso'));
    }
}
