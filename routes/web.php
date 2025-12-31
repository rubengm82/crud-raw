<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/', function () {
    return view('login');
});

Route::resource('centros', CentroController::class);
