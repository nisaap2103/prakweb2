<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriController;

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

Route::get('/salam', function () {
    return 'selamat siang semua';
});

Route::get('/about', function () {
    return view('about',[
        "nama" => "Chairunnisa",
        "kota" => "cilodong",
        "email" => "nisaap2103"
    ]);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/kategori_produk', [KategoriController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
});

Route::prefix('front')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/about/about', [AboutController::class, 'index']);
});

Route::get('/input', [InputController::class, 'index']); 
Route::post('/output', [InputController::class, 'output']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'form']);
