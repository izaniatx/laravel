<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MontanyasController;
use App\Http\Controllers\MontanyaController2;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('montanyas', MontanyasController::class);

Route::get('montanyas', [MontanyaController2::class, 'index2']);
Route::get('montanyas/{id}', [MontanyaController2::class, 'show']);
Route::get('montanyas/alta', [MontanyaController2::class, 'alta']);   