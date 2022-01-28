<?php

use App\Http\Controllers\PartijaController;
use App\Http\Controllers\SkupstinaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutfController;

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

Route::post('register', [AutfController::class, 'register']);
Route::post('login', [AutfController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('skupstina', SkupstinaController::class);
    Route::resource('partija', PartijaController::class);
    Route::post('logout', [AutfController::class, 'logout']);
});
