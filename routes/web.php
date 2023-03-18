<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrosController;

Route::resource('materias', RegistrosController::class);