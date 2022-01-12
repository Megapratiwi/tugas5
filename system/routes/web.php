<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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
    return view('backview.dashboard');
});

Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/about', [HomeController::class, 'showabout']);
Route::get('/contact', [HomeController::class, 'showcontact']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/kategori', [HomeController::class, 'showkategori']);
Route::get('/user', [UserController::class, 'showuser']);
Route::get('/product', [HomeController::class, 'showproduct']);
Route::get('/pelanggan', [HomeController::class, 'showpelanggan']);
Route::get('/registrasi', [HomeController::class, 'showregistrasi']);
Route::get('/produk/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'produk']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/update/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::post('produk/filter', [ProdukController::class, 'filter']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/update/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);


Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginprocess']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/base', function () {
    return view('template.base');
});

Route::get('/table', function () {
    return view('backview.table');
});