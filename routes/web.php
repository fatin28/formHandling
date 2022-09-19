<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::prefix('produk')->group(function () {
    Route::get('/detail', [ProdukController::class, 'index'])->name('produktampil');
    Route::get('/create', [ProdukController::class, 'create'])->name('create');
    Route::post('/tambah', [ProdukController::class, 'store'])->name('tambahproduk');
});
