<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [AuthController::class, 'index'])->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/logados', [AuthController::class, 'logados'])->name('logados');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirige al usuario a la página de login
})->name('logout');