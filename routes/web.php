<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
   return Inertia::render('Home');
});

Route::get('/login', function () {
   return Inertia::render('Login');
});

Route::get('/register', function () {
   return Inertia::render('Register');
});

Route::get('/dashboard', function () {
   return Inertia::render('Deshboard');
});

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout']);