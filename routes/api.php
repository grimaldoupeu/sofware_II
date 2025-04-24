<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MunicipalidadApiController;

Route::apiResource('municipalidades', MunicipalidadApiController::class);
