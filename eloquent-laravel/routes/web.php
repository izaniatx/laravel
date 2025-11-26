<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MontanyasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('montanyas', MontanyasController::class);