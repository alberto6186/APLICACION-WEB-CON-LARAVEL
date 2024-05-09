<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', [SaludoController::class, 'saludito']);

Route::resource('/cursos', CursoController::class);

Route::resource('/docentes', DocenteController::class);


