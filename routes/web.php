<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jenisheadphone', [App\Http\Controllers\jenisheadphoneController::class, 'index']);
Route::get('/jenisheadphone/create', [App\Http\Controllers\jenisheadphoneController::class, 'create']);
Route::post('/jenisheadphone', [App\Http\Controllers\jenisheadphoneController::class, 'store']);
Route::get('/jenisheadphone/{id}/edit', [App\Http\Controllers\jenisheadphoneController::class, 'edit']);
Route::patch('/jenisheadphone/{id}', [App\Http\Controllers\jenisheadphoneController::class, 'update']);
Route::delete('/jenisheadphone/{id}', [App\Http\Controllers\jenisheadphoneController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/headphone', [App\Http\Controllers\headphoneController::class, 'index']);
Route::get('/headphone/create', [App\Http\Controllers\headphoneController::class, 'create']);
Route::post('/headphone', [App\Http\Controllers\headphoneController::class, 'store']);
Route::get('/headphone/{id}/edit', [App\Http\Controllers\headphoneController::class, 'edit']);
Route::patch('/headphone/{id}', [App\Http\Controllers\headphoneController::class, 'update']);
Route::delete('/headphone/{id}', [App\Http\Controllers\headphoneController::class, 'destroy']);

Route::get('/pelanggan', [App\Http\Controllers\pelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\pelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\pelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\pelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\pelangganController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);