<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipalidadController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('municipalidades', MunicipalidadController::class);
Route::get('municipalidades/create', [MunicipalidadController::class, 'create'])->name('municipalidades.create');
Route::post('municipalidades', [MunicipalidadController::class, 'store'])->name('municipalidades.store');
Route::put('municipalidades/{municipalidade}', [MunicipalidadController::class, 'update'])->name('municipalidades.update');


