<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::resource('/', studentController::class);
