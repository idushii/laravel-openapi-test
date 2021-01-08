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

/**
 * @OA\Info(title="My First API", version="0.1")
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/article', [\App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/article/{id}', [\App\Http\Controllers\ArticleController::class, 'show']);
