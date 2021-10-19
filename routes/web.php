<?php

use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelsController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('portal.index');
});

Route::resource('hotels', HotelsController::class);
Route::resource('culinary', CulinaryController::class);
Route::resource('attractions', AttractionsController::class);
Route::resource('event', EventController::class);

// Route::middleware('admin')
//     ->prefix('admin')
//     ->group(function () {
//         Route::resource('admin', 'AdminController');
//         Route::resource('unit', 'UnitController');
//         Route::resource('category', 'ContentCategoryController');
//         Route::resource('area', 'AreaController');

//     });
