<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TurnoverController;
use App\Http\Controllers\EconomyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'Hello world!']);
});

Route::get('/country', [CountryController::class, 'index']);
Route::get('/country/{id}',[CountryController::class, 'show']);
Route::get('/event',[EventController::class, 'index']);
Route::get('/turnover',[TurnoverController::class, 'index']);
Route::get('/economy',[EconomyController::class, 'index']);

Route::get('/event/create', [EventController::class, 'create']);
Route::post('/event', [EventController::class, 'store']);
Route::get('event/edit/{id}',[EventController::class, 'edit']);
Route::post('/event/update/{id}', [EventController::class, 'update']);
Route::get('/event/destroy/{id}', [EventController::class, 'destroy']);

Route::get('/country_create', [CountryController::class, 'create']);
Route::post('/country', [CountryController::class, 'store']);
Route::get('country/edit/{id}',[CountryController::class, 'edit']);
Route::post('/country/update/{id}', [CountryController::class, 'update']);
Route::get('/country/destroy/{id}', [CountryController::class, 'destroy']);

Route::get('/economy/create', [EconomyController::class, 'create']);
Route::post('/economy', [EconomyController::class, 'store']);
Route::get('economy/edit/{id}',[EconomyController::class, 'edit']);
Route::post('/economy/update/{id}', [EconomyController::class, 'update']);
Route::get('/economy/destroy/{id}', [EconomyController::class, 'destroy']);

Route::get('/turnover/create', [TurnoverController::class, 'create']);
Route::post('/turnover', [TurnoverController::class, 'store']);
Route::get('turnover/edit/{id}',[TurnoverController::class, 'edit']);
Route::post('/turnover/update/{id}', [TurnoverController::class, 'update']);
Route::get('/turnover/destroy/{id}', [TurnoverController::class, 'destroy']);
