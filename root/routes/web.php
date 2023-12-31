<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DatesController;
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
    return view('welcome');
});


Route::prefix('works')->name('works')->controller(AttendanceController::class)->group(function() {
    Route::get('/', 'index')->name('.index');
    Route::get('create', 'create')->name('.create');
    Route::post('store', 'store')->name('.store');
});
