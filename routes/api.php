<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\KostController;
use App\Http\Controllers\Api\ShowKostController;
use App\Http\Controllers\Api\ChatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(["as" => "api."], function () {
    Route::prefix("/auth")->group(function () {
        Route::post('/login', LoginController::class)->name('login');
        Route::post('/register', RegisterController::class)->name('register');
    });

    Route::group([
        'middleware' => [
            'auth:sanctum'
        ],
    ], function () {
        Route::apiResource("kost", KostController::class);
    });

    Route::group([
        'middleware' => [
            'auth:sanctum'
        ],
    ], function () {
        Route::apiResource("showkost", ShowKostController::class);
    });

    Route::group([
        'middleware' => [
            'auth:sanctum'
        ],
    ], function () {
        Route::apiResource("chat", ChatController::class);
    });
});
