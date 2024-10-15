<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TurnoverController;
use App\Http\Controllers\EconomyController;
use App\Http\Controllers\LoginController;


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

Route::get('/event/create', [EventController::class, 'create'])->middleware('auth');
Route::post('/event', [EventController::class, 'store']);
Route::get('event/edit/{id}',[EventController::class, 'edit'])->middleware('auth');
Route::post('/event/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::get('/event/destroy/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('/country_create', [CountryController::class, 'create'])->middleware('auth');
Route::post('/country', [CountryController::class, 'store']);
Route::get('country/edit/{id}',[CountryController::class, 'edit'])->middleware('auth');
Route::post('/country/update/{id}', [CountryController::class, 'update'])->middleware('auth');
Route::get('/country/destroy/{id}', [CountryController::class, 'destroy'])->middleware('auth');

Route::get('/economy/create', [EconomyController::class, 'create'])->middleware('auth');
Route::post('/economy', [EconomyController::class, 'store']);
Route::get('economy/edit/{id}',[EconomyController::class, 'edit'])->middleware('auth');
Route::post('/economy/update/{id}', [EconomyController::class, 'update'])->middleware('auth');
Route::get('/economy/destroy/{id}', [EconomyController::class, 'destroy'])->middleware('auth');

Route::get('/turnover/create', [TurnoverController::class, 'create'])->middleware('auth');
Route::post('/turnover', [TurnoverController::class, 'store']);
Route::get('turnover/edit/{id}',[TurnoverController::class, 'edit'])->middleware('auth');
Route::post('/turnover/update/{id}', [TurnoverController::class, 'update'])->middleware('auth');
Route::get('/turnover/destroy/{id}', [TurnoverController::class, 'destroy'])->middleware('auth');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout',[LoginController::class, 'logout']);
Route::post('/auth',[LoginController::class, 'authenticate']);

Route::get('/error',function (){
    return view('error', ['message' => session('message')]);
});

Route::get('/home', [CountryController::class, 'index']);


//vlad@email.ru
//qwerty2024WEB
//$2y$10$unC8E2nXrcV1gXxH0XJGSuj73dzWCitJnwFFQWIVNwJzGushcsDh2

//dmitriy@gmail.com
//password
//$2y$10$N.sWnlFTGJyrJ/g94OEW5uUlsFXiH7a3pDNMbKfYj3EYE8M8XLJVm
