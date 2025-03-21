<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){

    //Validacion de datos
    request()->validate([
        'name' => 'required',
        'description' => 'required',
        'categoria' => 'required'
    ]);


    $curso = new Curso();

    $curso->name = $request->name;
    $curso->description = $request->description;
    $curso->categoria = $request->categoria;

    $curso->save();

    // Redirigir usando el ID
    return redirect()->route('cursos.show', $curso->name);
}

    public function show($name){

        //se manda la variable a traves de un arreglo
        //return view('cursos.show', ['curso' => $curso]);

        $curso = Curso::where('name', $name)->first();
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso) {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
