<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::resource('centros', CentroController::class);
