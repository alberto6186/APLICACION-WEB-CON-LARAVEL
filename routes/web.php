<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoatController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/registros', CursoController::class);
Route::resource('/aseguradoras', DocenteController::class);
Route::resource('/soat', SoatController::class);

Route::get('/soat', [SoatController::class, 'index'])->name('soat.index');
Route::get('/soat/create', [SoatController::class, 'create'])->name('soat.create');
Route::post('/soat/consultar', [SoatController::class, 'consultar'])->name('soat.consultar');
