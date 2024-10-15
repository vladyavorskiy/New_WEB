<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EconomyControllerApi;
use App\Http\Controllers\EventControllerApi;
use App\Http\Controllers\CountryControllerApi;
use App\Http\Controllers\TurnoverControllerApi;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/economy', [EconomyControllerApi::class, 'index']);
Route::get('/economy/{id}', [EconomyControllerApi::class, 'show']);

Route::get('/country', [CountryControllerApi::class, 'index']);
Route::get('/country/{id}', [CountryControllerApi::class, 'show']);

Route::get('/turnover', [TurnoverControllerApi::class, 'index']);
Route::get('/turnover/{id}', [TurnoverControllerApi::class, 'show']);

Route::get('/event', [EventControllerApi::class, 'index']);
Route::get('/event/{id}', [EventControllerApi::class, 'show']);


Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/country', [CountryControllerApi::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::get('/country', [CountryControllerApi::class, 'index']);
    Route::get('/user', function (Request $request){
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});


//3|FTBND2NNJpQ4iVtTPPNx0cC2Dnm7vbRhZdeh05qxdf411f1d
//2|Iy6fuBa7wqKSd5fANghjF23gAgF6TkzJYl4zmT4a30d790f8
//4|aEge7ZtGqZes1KwaywDQ2d2StxTmE1nr5KzC4Wd3c5aba0cf
