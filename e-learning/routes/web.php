<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

// definiendo una segunda ruta

Route::get('cursos', [CursoController::class, 'index']);

// definiendo una ruta con parametros

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}',  [CursoController::class, 'show']);






