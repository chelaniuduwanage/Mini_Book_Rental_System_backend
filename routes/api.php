<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BookController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('jwt.auth')->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);
    
    Route::prefix('books')->group(function () {
        Route::get('/', [BookController::class, 'index']);
        Route::get('/{id}', [BookController::class, 'show']);
        Route::post('/{id}/rent', [BookController::class, 'rentBook']);
        Route::post('/{id}/return', [BookController::class, 'returnBook']);
        
        Route::middleware('auth:api')->group(function () {
            Route::post('/', [BookController::class, 'store']);
        });
    });
});