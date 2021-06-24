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
    return view('login');
});
Route::get('/login', function () {return view('login');})->name('login');

//View Admin
Route::get('/admin', function () {return view('dashboard');})->name('admin');

Route::get('/akun', 'AkunController@index')->name('akun');
Route::get('/akun/buat', 'AkunController@buat')->name('buat');
Route::post('/akun/store', 'AkunController@store');
Route::get('/akun/detail/{kosinID}','AkunController@detail')->name('detail');

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

Route::get('/kamar', 'KamarController@index')->name('kamar');
Route::get('/kamar/buat', 'KamarController@buat')->name('buat');
Route::post('/kamar/store', 'KamarController@store');
Route::get('/kamar/edit/{idKamar}', 'KamarController@edit')->name('edit');
Route::post('/kamar/update', 'KamarController@update');
Route::get('/kamar/detail/{idKamar}', 'KamarController@detail')->name('detailkamar');

Route::get('/laundry', function () {return view('laundry.daftarpesananmasuk');})->name('daftar pesanan masuk');
Route::get('/laundry/detailpesanan', function () {return view('laundry.detailpesananpengelola');})->name('detail pesanan pengelola');

Route::get('/keluhan', function () {return view('keluhan.index');})->name('keluhan');
Route::get('/keluhan/edit', function () {return view('keluhan.edit');})->name('edit');
Route::get('/keluhan/detail', function () {return view('keluhan.detail');})->name('detail');

Route::get('/furniture', 'FurnitureController@index')->name('furniture');
Route::get('/furniture/tambah', function () {return view('furniture.tambah');})->name('tambah');
Route::get('/furniture/edit', function () {return view('furniture.edit');})->name('edit');
Route::get('/furniture/list/{namaKategori}', 'FurnitureController@list')->name('list');

//View Penghuni
Route::get('/home', function () {return view('dashboardpenghuni');})->name('home');

Route::get('/akun/kelola', function () {return view('akun.kelola');})->name('kelola');

Route::get('/kamarpenghuni', function () {return view('kamar.indexpenghuni');})->name('kamarpenghuni');
Route::get('/kamar/detailpenghuni', function () {return view('kamar.detailpenghuni');})->name('detailkamarpenghuni');

Route::get('/tagihanpenghuni', function () {return view('tagihan.indexpenghuni');})->name('tagihan penghuni');
Route::get('/detailtagihanpenghuni', function () {return view('tagihan.detailtagihankontrak');})->name('detail tagihan penghuni');

Route::get('/laundrypenghuni', function () {return view('laundry.history');})->name('history laundry');
Route::get('/laundrypenghuni/buatpesanan', function () {return view('laundry.buatlaundry');})->name('buat pesanan');
Route::get('/laundrypenghuni/detailpesanan', function () {return view('laundry.detailpesanan');})->name('detail pesanan');

Route::get('/keluhanpenghuni', function () {return view('keluhan.indexpenghuni');})->name('keluhanpenghuni');
Route::get('/keluhan/buat', function () {return view('keluhan.buat');})->name('buat');
Route::get('/keluhanpenghuni/detail', function () {return view('keluhan.detailpenghuni');})->name('detailpenghuni');

Route::get('/kontrakpenghuni', function () {return view('kontrak.kontrakpenghuni');})->name('kontrakpenghuni');

//Tidak Terpakai
Route::get('/keluhan/buatsuccess', function () {return view('keluhan.buatsuccess');})->name('buatsuccess');
Route::get('/furniture/detail', function () {return view('furniture.detailmeja');})->name('detail');
