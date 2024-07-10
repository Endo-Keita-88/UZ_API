<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


/*Route::get('/', function () {
    return view('login');
});*/

Route::view('/', 'login')->name('login');
Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');
