<?php

use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


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
        Route::resource('event', EventController::class);
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
