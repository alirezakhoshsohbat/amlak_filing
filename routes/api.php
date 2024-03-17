<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
        Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
        Route::post('refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);
        Route::post('me', [\App\Http\Controllers\AuthController::class, 'me']);
    });
    Route::post('files', [FileController::class , 'index']);
});


