<?php

use App\Http\Controllers\YourController;
use Illuminate\Support\Facades\Route;

Route::get('/items', [YourController::class, 'index']);
Route::get('/items/{id}', [YourController::class, 'show']);
Route::post('/items', [YourController::class, 'store']);
Route::put('/items/{id}', [YourController::class, 'update']);
Route::delete('/items/{id}', [YourController::class, 'destroy']);
