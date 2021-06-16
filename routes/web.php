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
Route::get('/akun/detail',function () {return view('akun.detail');})->name('detail');

Route::get('/kontrak', 'KontrakController@index')->name('kontrak');
Route::get('/kontrak/buat', 'KontrakController@buat')->name('buat');
Route::post('/kontrak/store', 'KontrakController@store');
Route::get('/kontrak/selesai/{idKontrak}', 'KontrakController@selesai');
Route::get('/kontrak/aktif', 'KontrakController@aktif')->name('aktif');

Route::get('/tagihan/lihat/{idKontrak}', 'TagihanController@index')->name('tagihan');
Route::get('/tagihan/buat', 'TagihanController@buat')->name('buat');
Route::post('/tagihan/store', 'TagihanController@store');
Route::get('/tagihan/edit/{idTagihan}', 'TagihanController@edit')->name('edit');
Route::post('/tagihan/update', 'TagihanController@update');
Route::get('/tagihan/hapus/{idTagihan}', 'TagihanController@hapus');

Route::get('/kamar/buat', function () {return view('kamar.buat');})->name('buat');
Route::get('/kamar/edit', function () {return view('kamar.edit');})->name('edit');
Route::get('/kamar', function () {return view('kamar.index');})->name('kamar');
Route::get('/kamarpenghuni', function () {return view('kamar.indexpenghuni');})->name('kamarpenghuni');
Route::get('/kamar/detail', function () {return view('kamar.detail');})->name('detailkamar');
Route::get('/kamar/detailpenghuni', function () {return view('kamar.detailpenghuni');})->name('detailkamarpenghuni');

Route::get('/tagihanpenghuni', function () {return view('tagihan.indexpenghuni');})->name('tagihan penghuni');
Route::get('/detailtagihanpenghuni', function () {return view('tagihan.detailtagihankontrak');})->name('detail tagihan penghuni');

Route::get('/history', function () {return view('laundry.history');})->name('history laundry');
Route::get('/buatpesanan', function () {return view('laundry.buatlaundry');})->name('buat pesanan');
Route::get('/detailpesanan', function () {return view('laundry.detailpesanan');})->name('detail pesanan');
Route::get('/daftarpesananmasuk', function () {return view('laundry.daftarpesananmasuk');})->name('daftar pesanan masuk');
Route::get('/detailpesananpengelola', function () {return view('laundry.detailpesananpengelola');})->name('detail pesanan pengelola');

Route::get('/keluhan', function () {return view('keluhan.index');})->name('keluhan');
Route::get('/keluhan/edit', function () {return view('keluhan.edit');})->name('edit');
Route::get('/keluhan/detail', function () {return view('keluhan.detail');})->name('detail');
Route::get('/keluhanpenghuni', function () {return view('keluhan.indexpenghuni');})->name('keluhanpenghuni');
Route::get('/keluhan/buat', function () {return view('keluhan.buat');})->name('buat');
Route::get('/keluhan/buatsuccess', function () {return view('keluhan.buatsuccess');})->name('buatsuccess');
Route::get('/keluhanpenghuni/detail', function () {return view('keluhan.detailpenghuni');})->name('detailpenghuni');






