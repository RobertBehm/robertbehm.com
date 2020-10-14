<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::get('/user', [UserController::class, 'user'])->middleware('auth:api');
Route::put('/users/info', [UserController::class, 'updateInfo'])->middleware('auth:api');
Route::get('/users/password', [UserController::class, 'updatePassword'])->middleware('auth:api');

Route::get('/users', [UserController::class, 'index'])->middleware('auth:api');
Route::get('users/{id}', [UserController::class, 'show'])->middleware('auth:api');
Route::post('users', [UserController::class, 'store'])->middleware('auth:api');
Route::put('users/{id}', [UserController::class, 'update'])->middleware('auth:api');
Route::delete('users/{id}', [UserController::class, 'destroy'])->middleware('auth:api');





/*

Route::group(['middleware' => ['auth:api']], function () {
   Route::apiResource('users', 'UserController');
});

*/

