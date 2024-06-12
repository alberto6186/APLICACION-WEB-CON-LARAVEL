<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/registros', CursoController::class);

Route::resource('/aseguradoras', DocenteController::class);





