<?php

use App\Http\Controllers\ViolinistController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/violinists', [ViolinistController::class, 'index']);
Route::get('/violinists/{id}', [ViolinistController::class, 'show']);
Route::get('/violinists/search/{violinist_name}', [ViolinistController::class, 'search']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/violinists', [ViolinistController::class, 'store']);
    Route::post('/violinists/{id}', [ViolinistController::class, 'update']);
    Route::post('/violinists/{id}', [ViolinistController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});