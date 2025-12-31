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

////// CENTROS /////
// Automatic (php artisan route:list)
Route::resource('centros', CentroController::class)->middleware('auth');
// Manual 
// Route::get('/centros', [CentroController::class, 'index'])->middleware('auth')->name('centros.index');
// Route::get('/centros/create', [CentroController::class, 'create'])->middleware('auth')->name('centros.create');
// Route::post('/centros', [CentroController::class, 'store'])->middleware('auth')->name('centros.store');
// Route::get('/centros/{centro}', [CentroController::class, 'show'])->middleware('auth')->name('centros.show');
// Route::get('/centros/{centro}/edit', [CentroController::class, 'edit'])->middleware('auth')->name('centros.edit');
// Route::put('/centros/{centro}', [CentroController::class, 'update'])->middleware('auth')->name('centros.update');
// Route::delete('/centros/{centro}', [CentroController::class, 'destroy'])->middleware('auth')->name('centros.destroy');