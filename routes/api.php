<?php

use App\Http\Controllers\VideoGamesController;
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

Route::resource('videogames', VideoGamesController::class);
Route::delete('videogames/{id}', [VideoGamesController::class, 'destroy']);
Route::put('videogames/{id}', [VideoGamesController::class, 'update']);
