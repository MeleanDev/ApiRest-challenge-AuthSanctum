<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::post('Registro', 'registro');
    Route::post('Login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('Logout', [UserController::class, 'logout']);
    Route::controller(ProductoController::class)->group(function () {
        Route::get('Productos/lista', 'lista');
        Route::get('Productos/{id}', 'producto');
        Route::post('Productos', 'crear');
        Route::put('Productos/{id}', 'editar');
        Route::delete('Productos/{id}', 'eliminar');
        Route::post('Productos/Reset', 'reset');
    });
});