<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);


Route::controller(CursoController::class)->group(function (){
    // ruta : peticion( url, metodo)
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show'); 
});








