<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\WebController::class,"home"]);
Route::get('/create',[\App\Http\Controllers\WebController::class,"create"]);
    Route::get('/create/add',[\App\Http\Controllers\WebController::class,"createStudent"]);

