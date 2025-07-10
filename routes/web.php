<?php

use App\Http\Controllers\kamarController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\pemesananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//data pelanggan

Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [pelangganController::class, 'create']);
Route::post('/pelanggan', [pelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [pelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [pelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');  


// Route::delete('/pelanggan/{id}', [pelangganController::class, 'destroy']);

// | Method | URL                  | Fungsi Controller |
// | ------ | -------------------- | ----------------- |
// | GET    | /pelanggan           | `index()`         |
// | GET    | /pelanggan/create    | `create()`        |
// | POST   | /pelanggan           | `store()`         |
// | GET    | /pelanggan/{id}      | `show()`          |
// | GET    | /pelanggan/{id}/edit | `edit()`          |
// | PUT    | /pelanggan/{id}      | `update()`        |
// | DELETE | /pelanggan/{id}      | `destroy()`       |

//data kamar
Route::get('/kamar', [kamarController::class, 'index']);
Route::get('/kamar/tambah', [kamarController::class, 'create']);
Route::post('/kamar', [kamarController::class, 'store']);
Route::get('/kamar/edit/{id}', [kamarController::class, 'edit']);
Route::put('/kamar/{id}', [kamarController::class, 'update']);
Route::delete('/kamar/{id}', [kamarController::class, 'destroy'])->name('kamar.destroy');

//data pemesanan
Route::get('/pemesanan', [pemesananController::class, 'index']);
Route::get('/pemesanan/tambah', [pemesananController::class, 'create']);
Route::post('/pemesanan', [pemesananController::class, 'store']);
Route::get('/pemesanan/edit/{id}', [pemesananController::class, 'edit']);
Route::put('/pemesanan/{id}', [pemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [pemesananController::class, 'destroy'])->name('pemesanan.destroy');

//data pembayaran
Route::get('/pembayaran', [pembayaranController::class, 'index']);
Route::get('/pembayaran/tambah', [pembayaranController::class, 'create']);
Route::post('/pembayaran', [pembayaranController::class, 'store']);
Route::get('/pembayaran/edit/{id}', [pembayaranController::class, 'edit']);
Route::put('/pembayaran/{id}', [pembayaranController::class, 'update']);
Route::delete('/pembayaran/{id}', [pembayaranController::class, 'destroy'])->name('pembayaran.destroy');