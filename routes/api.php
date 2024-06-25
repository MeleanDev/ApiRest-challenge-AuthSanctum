<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::post('Registro', 'registro');
    Route::post('Login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('Logout', [UserController::class, 'logout']);
});