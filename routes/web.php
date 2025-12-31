<?php

use App\Http\Controllers\CentroController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* ************** */
/* LOGIN Y LOGOUT */
/* ************** */
Route::post('/', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Redirecciones si se intenta entrar en menu si no se esta logeado
Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/menu');
    }
    return view('login');
});
// Solo se puede entrar en la vista menu si se esta logeado
Route::get('/menu', function () {
    return view('menu');
})->middleware('auth');



/* ************** */
/* MY ROUTES */
/* ************** */
Route::resource('centros', CentroController::class)->middleware('auth');
