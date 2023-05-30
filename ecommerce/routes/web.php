<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormController;

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
});

Route::get('/input', [InputController::class, 'index']); 
Route::post('/output', [InputController::class, 'output']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'form']);
