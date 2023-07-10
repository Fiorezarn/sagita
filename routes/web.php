<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

// ********************* Fitur Admin **********************
Route::group(['middleware' => ['Auth', 'Status']], function () {
//////////////////////////////////////////////////////////////////////////
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/pakaian', [AdminController::class, 'pakaian'])->name('pakaian');
Route::get('/pakaian/detail/{id}',[AdminController::class,'detailpakaian'])->name('detailpakaian');
Route::get('/pakaian/add',[AdminController::class,'addpakaian']);
Route::post('/pakaian/insert',[AdminController::class,'insertpakaian']);
Route::get('/pakaian/edit/{id}',[AdminController::class,'editpakaian']);
Route::post('/pakaian/update/{id}',[AdminController::class,'updatepakaian']);
Route::get('/pakaian/delete/{id}',[AdminController::class,'deletepakaian']);

Route::get('/makanan', [AdminController::class, 'makanan'])->name('makanan');
Route::get('/makanan/detail/{id}',[AdminController::class,'detailmakanan'])->name('detailmakanan');
Route::get('/makanan/add',[AdminController::class,'addmakanan']);
Route::post('/makanan/insert',[AdminController::class,'insertmakanan']);
Route::get('/makanan/edit/{id}',[AdminController::class,'editmakanan']);
Route::post('/makanan/update/{id}',[AdminController::class,'updatemakanan']);
Route::get('/makanan/delete/{id}',[AdminController::class,'deletemakanan']);

Route::get('/alat', [AdminController::class, 'alat'])->name('alat');
Route::get('/alat/detail/{id}',[AdminController::class,'detailalat'])->name('detailalat');
Route::get('/alat/add',[AdminController::class,'addalat']);
Route::post('/alat/insert',[AdminController::class,'insertalat']);
Route::get('/alat/edit/{id}',[AdminController::class,'editalat']);
Route::post('/alat/update/{id}',[AdminController::class,'updatealat']);
Route::get('/alat/delete/{id}',[AdminController::class,'deletealat']);
//////////////////////////////////////////////////////////////////////////
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/detailproduct/{id}', [HomeController::class, 'showproductdetail'])->name('detailproduk');
Route::get('/pembayaran/{id}', [HomeController::class, 'showpembayaranproduct']);
Route::post('/pembayaranproduct', [HomeController::class, 'bayarproduct'])->name('bayarproduk');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

