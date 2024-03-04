<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardHistoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/dashboard/controls', DashboardHistoryController::class)->middleware('auth');
Route::get('/dashboard/cetak', [DashboardHistoryController::class, 'cetak'])->middleware('auth');

Route::get('/bacasuhu', [MonitoringController::class, 'bacasuhu'])->middleware('auth');
Route::get('/bacakekeruhan', [MonitoringController::class, 'bacakekeruhan'])->middleware('auth');
Route::get('/bacaph', [MonitoringController::class, 'bacaph'])->middleware('auth');
Route::get('/bacado', [MonitoringController::class, 'bacado'])->middleware('auth');
Route::get('/bacawaterpump', [MonitoringController::class, 'bacawaterpump'])->middleware('auth');
Route::get('/bacaaerator', [MonitoringController::class, 'bacaaerator'])->middleware('auth');

// Route untuk menyimpan nilai sensor ke database
Route::get('/simpan/{temperature}/{turbidity}/{ph}/{dissolved_oxygen}/{water_pump}/{aerator}', [MonitoringController::class, 'simpan']);
