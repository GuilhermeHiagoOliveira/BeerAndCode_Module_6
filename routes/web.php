<?php

use App\Http\Controllers\BladeExamplesController;
use Illuminate\Support\Facades\Route;

Route::get('/', BladeExamplesController::class . '@index');
