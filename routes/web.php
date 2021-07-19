<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\LapakController;
use App\Http\Controllers\Admin\KurirController;
use App\Http\Controllers\Admin\ProdukController;

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

Route::resource('/', DashboardController::class);
Auth::routes();

Route::get('lapak/gambar/{id}', [LapakController::class, 'file'])->name('lapak.file');
Route::get('produk/show/{id}', [ProdukController::class, 'viewall'])->name('view.all');
Route::get('produk/gambar/{id}', [ProdukController::class, 'file'])->name('produk.file');
Route::resource('/produk', ProdukController::class);
Route::resource('/lapak', LapakController::class);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/seller', SellerController::class);
    Route::resource('/kurir', KurirController::class);
});
