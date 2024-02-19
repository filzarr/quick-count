<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/rekap-tps', [DashboardController::class, 'rekap'])->middleware('auth')->name('rekap');
Route::get('/edit/{tpsid}', [DashboardController::class, 'edittps'])->middleware('auth')->name('edit');
Route::post('/login', [AuthController::class, 'loginattemp']);
Route::get('/form', [FormController::class, 'kota']);
Route::get('/form/{kota}', [FormController::class, 'kecamatan']);
Route::get('/form/{kota}/{kecamatan}', [FormController::class, 'desa']);
Route::get('/form/{kota}/{kecamatan}/{desa}', [FormController::class, 'tps']);
Route::get('/form/{kota}/{kecamatan}/{desa}/{tps}', [FormController::class, 'form']);
