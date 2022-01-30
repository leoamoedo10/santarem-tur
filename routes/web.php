<?php

use App\Http\Controllers\Admin\AdminHotelsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/', function () {
    return view('portal.index');
});

Route::resource('hotels', HotelsController::class);
Route::resource('culinary', CulinaryController::class);
Route::resource('attractions', AttractionsController::class);
Route::resource('event', EventController::class);

Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {
        Route::resource('admin', AdminController::class);
        Route::resource('admhotels', AdminHotelsController::class);
    });

