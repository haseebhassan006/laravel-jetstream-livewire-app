<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('posts',[PostController::class,'getAllPost']);
Route::get('categories',[PostController::class,'getAllCategory']);
Route::get('users',[UserController::class,'getAllUser']);
Route::get('pages',[PostController::class,'getAllPages']);
Route::middleware('auth:sanctum')->get('categories',[PostController::class,'getAllCategory']);
Route::post('posts',[PostController::class,'store']);
Route::post('pages',[PostController::class,'addPages']);

