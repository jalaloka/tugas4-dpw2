<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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
    return view('frontview.home');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('product', function () {
    return view('frontview.product');
});

Route::get('productdetail', function () {
    return view('frontview.productdetail');
});

Route::get('cart', function () {
    return view('frontview.cart');
});

Route::get('login', function () {
    return view('login.login');
});

Route::get('dashboard', function () {
    return view('backview.beranda');
});

Route::get('kategori', function () {
    return view('backview.kategori');
});


Route::get('produk',[ProdukController::class, 'index']);
Route::get('produk/create',[ProdukController::class, 'create']);
Route::post('produk',[ProdukController::class, 'store']);
Route::get('produk/{produk}',[ProdukController::class, 'show']);
Route::get('produk/{produk}/edit',[ProdukController::class, 'edit']);
Route::put('produk/{produk}',[ProdukController::class, 'update']);
Route::delete('produk/{produk}',[ProdukController::class, 'destroy']);