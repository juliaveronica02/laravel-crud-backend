<?php

use App\Http\Controllers\PostController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/show', [PostController::class,'index']);
Route::post('/create-post', [PostController::class,'store']);
Route::get('/show/{id}', [PostController::class,'show']);
Route::put('/edit-post/{id}', [PostController::class,'update']);
Route::delete('/delete-post/{id}', [PostController::class,'destroy']);