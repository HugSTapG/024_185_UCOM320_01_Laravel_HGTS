<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test_lar_controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('test_lar',test_lar_controller::class);