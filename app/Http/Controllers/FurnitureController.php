<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FurnitureController extends Controller
{
    public function index()
    {
        // mengambil data dari table kamar
        $kategori = DB::table('kategori')->get();

        // mengirim data kamar ke view index
        return view('furniture.index', ['kategori' => $kategori]);
    }

    public function list($namaKategori)
    {
        // mengambil data dari table kamar
        $furniture = DB::table('furniture')
        ->where('namaKategori', $namaKategori)
        ->get();
        $namaKategori = $namaKategori;

        // mengirim data kamar ke view index
        return view('furniture.list', ['furniture' => $furniture, 'namaKategori' => $namaKategori]);
    }

    public function hapus($idFurniture)
    {
        // menghapus data tagihan berdasarkan id yang dipilih
        DB::table('furniture')->where('idFurniture', $idFurniture)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/furniture/index');
    }
}
