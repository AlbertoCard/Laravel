<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "Bienvenido a la página principal";
});

// definiendo una segunda ruta

Route::get('cursos', function () {
    return "Bienvenido a la página cursos";
});

// definiendo una ruta con parametros

Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Bienvenido al curso: " . $curso;
});






