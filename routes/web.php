<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\alicontroller;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/users', UserController::class );

Route::resource('ali', alicontroller::class);
