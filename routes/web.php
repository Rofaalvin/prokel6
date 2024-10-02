<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PTController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pt', PTController::class);
