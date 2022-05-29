<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [App\Http\Controllers\Api\V1\AuthApiController::class, 'register']);
Route::post('login', [App\Http\Controllers\Api\V1\AuthApiController::class, 'login']);


Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout', [App\Http\Controllers\Api\V1\AuthApiController::class, 'logout']);
    Route::get('user', [App\Http\Controllers\Api\V1\UserController::class, 'show']);
    Route::get('users', [App\Http\Controllers\Api\V1\UserController::class, 'index']);
});