<?php

use App\Http\Controllers\BladeExamplesController;
use Illuminate\Support\Facades\Route;

Route::controller(BladeExamplesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/second', 'secondPage');
    Route::post('formulario', 'store')->name('send-form');
});


