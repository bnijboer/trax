<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TrackController;
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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::name('tracks.')->group(function () {
    Route::controller(TrackController::class)->group(function () {
        Route::get('/tracks', 'index')->name('index');
        Route::post('/tracks', 'store')->name('store');
    });
});