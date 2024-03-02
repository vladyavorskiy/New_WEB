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
