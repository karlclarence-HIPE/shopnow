<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;

Route::prefix('/v1')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/', [UserController::class, "index"]);
        Route::post('/create', [UserController::class, 'store']);
        Route::get('/get-user-by-id/{id}', [UserController::class, 'getById']);
        Route::put('/update/{id}', [UserController::class, 'update']);
    });

    Route::prefix('/auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login']);
    });
});