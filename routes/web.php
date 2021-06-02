<?php

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
    return view('dashboard');
});

Route::get('/admin', function () {return view('dashboard');})->name('admin');
Route::get('/home', function () {return view('dashboardpenghuni');})->name('home');

Route::get('/akun', function () {return view('akun.index');})->name('akun');
Route::get('/akun/kelola', function () {return view('akun.kelola');})->name('kelola');
Route::get('/akun/buat',function () {return view('akun.buat');})->name('buat');

Route::get('/kontrak', function () {return view('kontrak.index');})->name('kontrak');
Route::get('/kontrak/buat', function () {return view('kontrak.buat');})->name('buat');
Route::get('/kontrak/aktif', function () {return view('kontrak.aktif');})->name('aktif');

Route::get('/tagihan', function () {return view('tagihan.index');})->name('tagihan');
Route::get('/tagihan/buat', function () {return view('tagihan.buat');})->name('buat');
Route::get('/tagihan/edit', function () {return view('tagihan.edit');})->name('edit');

Route::get('/kamar/buat', function () {return view('kamar.buat');})->name('buat');
Route::get('/kamar/edit', function () {return view('kamar.edit');})->name('edit');
Route::get('/kamar', function () {return view('kamar.index');})->name('kamar');





