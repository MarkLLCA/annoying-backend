<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', \App\Http\Controllers\Api\BooksController::class);

Route::post('register', [\App\Http\Controllers\Api\UserController::class, 'register']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
