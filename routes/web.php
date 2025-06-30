<?php

use App\Http\Controllers\kamarController;
use App\Http\Controllers\pelangganController;
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
Route::delete('/pelanggan/{id}', [pelangganController::class, 'destroy']);

// | Method | URL                  | Fungsi Controller |
// | ------ | -------------------- | ----------------- |
// | GET    | /pelanggan           | `index()`         |
// | GET    | /pelanggan/create    | `create()`        |
// | POST   | /pelanggan           | `store()`         |
// | GET    | /pelanggan/{id}      | `show()`          |
// | GET    | /pelanggan/{id}/edit | `edit()`          |
// | PUT    | /pelanggan/{id}      | `update()`        |
// | DELETE | /pelanggan/{id}      | `destroy()`       |


// Route::get('/pelanggan', [pelangganController::class, 'index']);
// Route::get('/pelanggan/tambah', [pelangganController::class, 'create']);

//data kamar
Route::get('/kamar', [kamarController::class, 'index']);