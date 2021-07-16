<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\LapakController;
use App\Http\Controllers\Admin\KurirController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/seller', SellerController::class);
    Route::get('lapak/gambar/{id}', [LapakController::class, 'file'])->name('lapak.file');
    Route::resource('/lapak', LapakController::class);
    Route::resource('/kurir', KurirController::class);
});
