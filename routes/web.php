<?php

use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\NewsController;
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

Route::get('/', function () {
    return view('portal.index');
});

Route::prefix('hoteis')
    ->group(function () {
        Route::resource('hotels', HotelsController::class);
    });

Route::prefix('culinaria')
    ->group(function () {
        Route::resource('culinary', CulinaryController::class);
    });

Route::prefix('pontos-turisticos')
    ->group(function () {
        Route::resource('attractions', AttractionsController::class);
    });

Route::prefix('eventos')
    ->group(function () {
        Route::resource('news', NewsController::class);
    });
