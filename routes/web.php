<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });
Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
//Route::get('/login', [AuthController::class,'login']);
Route::get('/logout', [AuthController::class,'logout'])->name('logout');


Route::get('/dashboard' , function () {return 'BIENVENIDO AL DASHBOARD';
})->middleware('auth');